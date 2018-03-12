<?php
class Pagination{
	
	private $totalItem;					// Tổng số phần tử
	private $totalItemPerPage	= 2;	// Tổng số phần tử trên 1 trang
	private $pageRange			= 3;	// Số trang hiển thị
	private $currentPage		= 1;	// Trang hiện tại
	private $totalPage;					// Tổng số trang
	
	// Thiết lập tổng số phần tử trên một trang
	public function setTotalItemPerPage($number){
		if(is_int($number)) {
			$this->totalItemPerPage = $number;
		}
		return this;
	}
	
	// Thiết lập số trang hiển thị
	public function setPageRange($number){
		if(is_int($number)) {
			$this->pageRange = $number;
		}
		return this;
	}

	public function __construct($totalItem, $totalItemPerPage, $pageRange, $currentPage = 1){
		$this->totalItem 			= $totalItem;
		$this->totalItemPerPage 	= $totalItemPerPage;
		$this->pageRange 			= $pageRange;
		$this->currentPage 			= $currentPage;
		$this->totalPage 			= ceil($this->totalItem/$this->totalItemPerPage);
	}
	
	public function showPaginator(){
		if($this->totalItem  > 1){
		
			$startPage	= '<li>Start</li>';
			$prevPage	= '<li>Previous</li>';
			$nextPage 	= '<li>Next</li>';
			$endPage 	= '<li>End</li>';
		
			if($this->currentPage > 1){
				$startPage	= '<li><a href="?page=1">Start</a></li>';
				$prevPage	= '<li><a href="?page='.($this->currentPage-1).'">Previous</a></li>';
			}
			
			if($this->pageRange >= $this->totalPage ){
				$start = 1;
				$end	= $this->totalPage ;
			}else{
				if($this->currentPage==1){
					$start 	= 1;
					$end	= $this->pageRange;
				}else if($this->currentPage==$this->totalPage ){
					$start 	= $this->totalPage -$this->pageRange+1;
					$end	= $this->totalPage ;
				}else{
					$start 	= max(array($this->currentPage-($this->pageRange-1)/2, 1));
					$end 	= min(array($this->currentPage+($this->pageRange-1)/2, $this->totalPage ));
				}
			}
		
			for($i = $start; $i <= $end; $i++) {
				if($i == $this->currentPage){
					$listPage	.= '<li class="active">'.$i.'</li>';
				} else{
					$listPage	.= '<li><a href="?page='.$i.'">'.$i.'</a></li>';
				}
			}
		
			// Next
			if($this->currentPage < $this->totalPage ){
				$nextPage	= '<li><a href="?page='.($this->currentPage+1).'">Next</a></li>';
				$endPage	= '<li><a href="?page='.$this->totalPage .'">End</a></li>';
			}
		
			$paginationXML	= '<ul class="pagination">'.$startPage.$prevPage.$listPage.$nextPage.$endPage.'</ul>';
		}
		return $paginationXML;
	}
}