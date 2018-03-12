<?php 
	require_once 'connect.php';
	require_once 'class/Pagination.class.php';
	
	$totalItem			= $database->countItem("SELECT COUNT(`id`) AS totalItem FROM `user`");
	$currentPage		= (isset($_GET['page'])) ? $_GET['page'] : 1;
	$totalItemPerPage	= 2;
	$pageRange			= 3;
	
	$paginator			= new Pagination($totalItem, $totalItemPerPage, $pageRange, $currentPage);
	$paginationXML		= $paginator->showPaginator();

	$start		= ($currentPage - 1) * $totalItemPerPage;
	$query[] 	= "SELECT `id`, `username`, CONCAT(`firstname`, ' ', `lastname`) AS fullname, `email`, `birthday`, `status`, `ordering`";
	$query[] 	= "FROM `user`";
	$query[] 	= "LIMIT $start, $totalItemPerPage";

	$query		= implode(' ', $query);
	$list	= $database->listRecord($query);
	
	if(!empty($list)){
		$i = 0;
		foreach($list as $key=>$value){
			$row 	= ($i % 2 == 0) ? 'odd' : 'even';
			$status	= ($value['status'] == 0) ? 'Inactive' : 'Active';
			$xhtml .= '<div class="row '.$row.'">
							<p class="id">'.$value['id'].'</p>
							<p class="username">'.$value['username'].'</p>
							<p class="fullname">'.$value['fullname'].'</p>
							<p class="email">'.$value['email'].'</p>
							<p class="birthday">'.date('d-m-Y',strtotime($value['birthday'])).'</p>
							<p class="status">'.$status.'</p>
							<p class="ordering">'.$value['ordering'].'</p>
						</div>';
		}
	}
	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Manage User</title>
</head>
<body>
	<div id="wrapper">
		<div class="title">Manage User</div>
		<div class="list">
			<div class="row head">
				<p class="id">ID</p>
				<p class="username">UserName</p>
				<p class="fullname">Full Name</p>
				<p class="email">Email</p>
				<p class="birthday">Birthday</p>
				<p class="status">Status</p>
				<p class="ordering">Ordering</p>
			</div>
			<?php echo $xhtml;?>
		</div>
		<div id="pagination">
			<?php echo $paginationXML;?>
		</div>
	</div>
</body>
</html>
