<?php
	require_once 'connect.php';
	
	// Tổng số phần tử
	$totalItems				= $database->totalItem("SELECT COUNT(`id`) AS totalItems FROM `user`");
	
	// Tổng số phần tử xuất hiện trên một trang
	$totalItemsPerPage		= 1;
	
	// Số trang xuất hiện
	$pageRange				= 5;
	if($pageRange %2 == 0) $pageRange = $pageRange + 1;
	
	// Tổng số trang
	$totalPage				= ceil($totalItems/$totalItemsPerPage);
	
	// Trang hiện tại
	$currentPage			= (isset($_GET['page'])) ? $_GET['page'] : 1;
	
	if($currentPage < 1 || $currentPage > $totalPage) {
		header('location: error.php');
		exit();
	}
		
	// Pagination
	$paginationHTML = '';
	if($totalPage > 1){
		$start 	= '<li>Start</li>';
		$prev 	= '<li>Previous</li>';
		if($currentPage > 1){
			$start 	= '<li><a href="?page=1">Start</a></li>';
			$prev 	= '<li><a href="?page='.($currentPage-1).'">Previous</a></li>';
		}
		
		$next 	= '<li>Next</li>';
		$end 	= '<li>End</li>';
		if($currentPage < $totalPage){
			$next 	= '<li><a href="?page='.($currentPage+1).'">Next</a></li>';
			$end 	= '<li><a href="?page='.$totalPage.'">End</a></li>';
		}
		
		if($pageRange < $totalPage){
			if($currentPage == 1){
				$startPage 	= 1;
				$endPage 	= $pageRange;
			}else if($currentPage == $totalPage){
				$startPage		= $totalPage - $pageRange + 1;
				$endPage		= $totalPage;
			}else{
				$startPage		= $currentPage - ($pageRange-1)/2;
				$endPage		= $currentPage + ($pageRange-1)/2;
				
				if($startPage < 1){
					$endPage	= $endPage + 1;
					$startPage = 1;
				}
				
				if($endPage > $totalPage){
					$endPage	= $totalPage;
					$startPage 	= $endPage - $pageRange + 1;
				}
			}
		}else{
			$startPage		= 1;
			$endPage		= $totalPage;
		}
		
		for($i = $startPage; $i <= $endPage; $i++){
			if($i == $currentPage) {
				$listPages .= '<li class="active">'.$i.'</a>';
			}else{
				$listPages .= '<li><a href="?page='.$i.'">'.$i.'</a>';
			}
		}
		
		$paginationHTML = '<ul class="pagination">' . $start . $prev . $listPages . $next . $end . '</ul>';
	}
	
	

	$position	= ($currentPage-1)*$totalItemsPerPage;
	$query[]	= "SELECT `id`, `username`, CONCAT(`firstname`, ' ', `lastname`) AS fullname, `email`, `birthday`, `status`, `ordering`";
	$query[]	= "FROM `user`";
	$query[]	= "LIMIT $position, $totalItemsPerPage";
	
	$query		= implode(" ", $query);
	$list 	= $database->listRecord($query);
	
	if(!empty($list)){
		$i = 0;
		foreach($list as $key=>$item){
			$row 	= ($i % 2 == 0) ? "odd" : "even";
			$status	= ($item['status']==0) ? 'Inactive' : 'Active';
			$xhtml .= '<div class="row '.$row.'">
							<p class="id">'.$item['id'].'</p>
							<p class="username">'.$item['username'].'</p>
							<p class="fullname">'.$item['fullname'].'</p>
							<p class="email">'.$item['email'].'</p>
							<p class="birthday">'.date("d-m-Y",strtotime($item['birthday'])).'</p>
							<p class="status">'.$status.'</p>
							<p class="ordering">'.$item['ordering'].'</p>
						</div>';
		}
	}else{
		$xhtml = 'Dữ liệu đang cập nhật';
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
			<?php echo $paginationHTML;?>
		</div>
	</div>
</body>
</html>
