<?php
	$path	=	'/files/abc.txt';
	
	$baseName	= pathinfo($path, PATHINFO_BASENAME);
	$extension	= pathinfo($path, PATHINFO_EXTENSION);
	$dirname	= pathinfo($path, PATHINFO_DIRNAME);
	$fileName	= pathinfo($path, PATHINFO_FILENAME);
	
	echo '<ul>';
		echo '<li>PATH: <b>' . $path . '</b></li>';
		echo '<li>PATHINFO_BASENAME: <b>' . $baseName . '</b></li>';
		echo '<li>PATHINFO_EXTENSION: <b>' . $extension . '</b></li>';
		echo '<li>PATHINFO_DIRNAME: <b>' . $dirname . '</b></li>';
		echo '<li>PATHINFO_FILENAME: <b>' . $fileName . '</b></li>';
	echo '</ul>';
?>