<?php 
	require_once 'connect.php';
	
	// Tổng số phần tử
	$totalItem			= $database->countItem("SELECT COUNT(`id`) AS totalItem FROM `user`");
	
	// Tổng số phần tử trên 1 trang
	$totalItemPerPage	= 2;
	
	// Tổng số trang
	$totalPage			= ceil($totalItem/$totalItemPerPage);
	
	// Trang hiện tại
	$currentPage		= (isset($_GET['page'])) ? $_GET['page'] : 1;
	
	// Số trang hiển thị;
	$pageRange			= 3;
	
	$paginationXML		= '';
	
	if($totalPage > 1){	
		
		$startPage	= '<li>Start</li>';
		$prevPage	= '<li>Previous</li>';
		$nextPage 	= '<li>Next</li>';
		$endPage 	= '<li>End</li>';
		
		if($currentPage > 1){
			$startPage	= '<li><a href="?page=1">Start</a></li>';
			$prevPage	= '<li><a href="?page='.($currentPage-1).'">Previous</a></li>';
		}
		
		// Pages 		4 : 2 3 4 5 
		if($pageRange >= $totalPage){
			$start = 1;
			$end	= $totalPage;
		}else{
			if($currentPage==1){
				$start 	= 1;
				$end	= $pageRange;
			}else if($currentPage==$totalPage){
				$start 	= $totalPage-$pageRange+1;
				$end	= $totalPage;
			}else{
				$start 	= max(array($currentPage-($pageRange-1)/2, 1));
				$end 	= min(array($currentPage+($pageRange-1)/2, $totalPage));
			}
		}
		
		for($i = $start; $i <= $end; $i++) {
			if($i == $currentPage){
				$listPage	.= '<li class="active">'.$i.'</li>';
			} else{
				$listPage	.= '<li><a href="?page='.$i.'">'.$i.'</a></li>';
			}
		}
		
		// Next
		if($currentPage < $totalPage){
			$nextPage	= '<li><a href="?page='.($currentPage+1).'">Next</a></li>';
			$endPage	= '<li><a href="?page='.$totalPage.'">End</a></li>';
		}

		$paginationXML	= '<ul class="pagination">'.$startPage.$prevPage.$listPage.$nextPage.$endPage.'</ul>';
	}

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
