<?php
	$path	=	'/files/abc.txt';
	
	// Hien thi ten tap tin (co luon phan mo rong)
	echo basename($path) . '<br />';
	
	// Hien thi ten tap tin (khong co phan mo rong)
	echo basename($path, '.tx1t') . '<br />';