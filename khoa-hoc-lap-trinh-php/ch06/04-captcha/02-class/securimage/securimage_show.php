<?php


require_once dirname(__FILE__) . '/securimage.php';

$img = new Securimage();

// 01 - Color
// $img->line_color      = new Securimage_Color("#080808");
// $img->image_bg_color  = new Securimage_Color("#f0f80c");
// $img->text_color      = new Securimage_Color("#f40f15");

// 02 - Background
// $img->show('backgrounds/bg5.jpg');

// 03 - Độ phức tạp
$img->perturbation    = 1;

// 04 - Font
$img->ttf_file			= 'AHGBold.ttf';

// 05 - Chữ ký
$img->image_signature	= 'zend.vn';
$img->signature_color	= new Securimage_Color('#080808');

// 06 - Size
//$img->image_width	= 150;
//$img->image_height	= 50;

// 07 - Ký tự xuất hiện
// $img->charset	=	'0123456789';
$img->charset	=	'abc';

// 08 - Số ký tự
$img->code_length	= rand(4,6);

// 09 - Số đường line
$img->num_lines		= 5;

$img->show();
