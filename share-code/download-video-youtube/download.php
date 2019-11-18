<?php
if(!empty($_GET['url']) && !empty($_GET['title']) && !empty($_GET['mime']) && !empty($_GET['ext'])) {
	$url   = base64_decode($_GET['url']);
	$title = filter_var($_GET['title']);
	$mime  = filter_var($_GET['mime']);
	$ext   = filter_var($_GET['ext']);
	$size  = filter_var($_GET['size']);

	if ($url) {
		// Generate the server headers
		if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE)
		{
			header('Content-Type: "' . $mime . '"');
			header('Content-Disposition: attachment; filename="' . $title .".". $ext . '"');
			header('Expires: 0');
			header('Content-Length: '.$size);
			header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
			header("Content-Transfer-Encoding: binary");
			header('Pragma: public');
		}
		else
		{
			header('Content-Type: "' . $mime . '"');
			header('Content-Disposition: attachment; filename="' . $title .".". $ext . '"');
			header("Content-Transfer-Encoding: binary");
			header('Expires: 0');
			header('Content-Length: '.$size);
			header('Pragma: no-cache');
		}

		readfile($url);
		exit;
	}
}
?>

