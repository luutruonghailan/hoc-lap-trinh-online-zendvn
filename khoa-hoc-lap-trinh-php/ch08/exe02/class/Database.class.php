<?php
class Database{
	
	protected $connect;
	protected $database;
	protected $table;
	protected $resultQuery;
	
	// CONNECT DATABASE
	public function __construct($params){
		$link = mysql_connect($params['server'], $params['username'], $params['password']);
		if(!$link){
			die('Fail connect: ' . mysql_errno());
		}else{
			$this->connect 	= $link;
			$this->database = $params['database'];
			$this->table 	= $params['table'];
			$this->setDatabase();
			$this->query("SET NAMES 'utf8'");
			$this->query("SET CHARACTER SET 'utf8'");
		}
	}
	
	// SET CONNECT
	public function setConnect($connect){
		$this->connect = $connect;
	}
	
	// SET DATABASE
	public function setDatabase($database = null){
		if($database != null) {
			$this->database = $database;
		}
		mysql_select_db($this->database, $this->connect );
	}
	
	// SET TABLE
	public function setTable($table){
		$this->table = $table;
	}
	
	// DISCONNECT DATABASE
	public function __destruct(){
		mysql_close($this->connect);
	}
	
	// INSERT
	public function insert($data, $type = 'single'){
		if($type == 'single'){
			$newQuery 	= $this->createInsertSQL($data);
			$query 		= "INSERT INTO `$this->table`(".$newQuery['cols'].") VALUES (".$newQuery['vals'].")";
			$this->query($query);
		}else{
			foreach($data as $value){
				$newQuery = $this->createInsertSQL($value);
				$query = "INSERT INTO `$this->table`(".$newQuery['cols'].") VALUES (".$newQuery['vals'].")";
				$this->query($query);
			}
		}
		return $this->lastID();
	}
	
	// CREATE INSERT SQL
	public function createInsertSQL($data){
		$newQuery = array();
		if(!empty($data)){
			foreach($data as $key=> $value){
				$cols .= ", `$key`";
				$vals .= ", '$value'";
			}
		}
		$newQuery['cols'] = substr($cols, 2);
		$newQuery['vals'] = substr($vals, 2);
		return $newQuery;
	}

	// LAST ID
	public function lastID(){
		return mysql_insert_id($this->connect);
	}
	
	// QUERY
	public function query($query){
		$this->resultQuery = mysql_query($query, $this->connect);
		return $this->resultQuery;
	}

	// UPDATE
	public function update($data, $where){
		$newSet 	= $this->createUpdateSQL($data);
		$newWhere 	= $this->createWhereUpdateSQL($where);
		$query = "UPDATE `$this->table` SET " . $newSet . " WHERE $newWhere";
		$this->query($query);
		return $this->affectedRows();
	}
	
	// CREATE UPDATE SQL
	public function createUpdateSQL($data){
		$newQuery = "";
		if(!empty($data)){
			foreach($data as $key => $value){
				$newQuery .= ", `$key` = '$value'";
			}
		}
		$newQuery = substr($newQuery, 2);
		return $newQuery;
	}
	
	// CREATE WHERE UPDATE SQL
	public function createWhereUpdateSQL($data){
		$newWhere = '';
		if(!empty($data)){
			foreach($data as $value){
				$newWhere[] = "`$value[0]` = '$value[1]'";
				$newWhere[] = $value[2];
			}
			$newWhere = implode(" ", $newWhere);
		}
		return $newWhere;
	}
	
	// AFFECTED ROWS
	public function affectedRows(){
		return mysql_affected_rows($this->connect);
	}
	
	// DELETE
	public function delete($where){
		$newWhere 	= $this->createWhereDeleteSQL($where);
		$query 		= "DELETE FROM `$this->table` WHERE `id` IN ($newWhere)";
		$this->query($query);
		return $this->affectedRows();
	}
	
	// CREATE WHERE DELTE SQL
	public function createWhereDeleteSQL($data){
		$newWhere = '';
		if(!empty($data)){
			foreach($data as $id) {
				$newWhere .= "'" . $id . "', ";  
			}
			$newWhere .= "'0'";
		}
		return $newWhere;
	}
	
	// LIST RECORD
	public function listRecord($query){
		$result = array();
		if(!empty($query)){
			$resultQuery = $this->query($query);
			if(mysql_num_rows($resultQuery) > 0){
				while($row = mysql_fetch_assoc($resultQuery)){
					$result[] = $row;
				}
				mysql_free_result($resultQuery);
			}
		}
		return $result;
	}
	
	// SINGLE RECORD
	public function singleRecord($query){
		$result = array();
		if(!empty($query)){
			$resultQuery = $this->query($query);
			if(mysql_num_rows($resultQuery) > 0){
				$result = mysql_fetch_assoc($resultQuery);
			}
			mysql_free_result($resultQuery);
		}
		return $result;
	}
	
	// EXIST
	public function isExist($query){
		if($query != null) {
			$this->resultQuery = $this->query($query);
		}
		if(mysql_num_rows($this->resultQuery ) > 0) return true;
		return false;
	}
}