<?php

require_once 'photoclass.php';


$photo_path="//web1/realtor.ru/spb/newspb/htdocs/web/public/";
$auto=400;
$wh_43=true;

switch($_GET["mod"]){
    case 'spief': $image = $photo_path."/images/spief/".$_GET['photo'].".jpg"; break;
}

$thumb = new thumbnail($image);
$thumb->bicubic_resample=false;
$thumb->output_format='jpg';


$thumb->jpeg_progressive=1;

if ($_GET['size'] != 0){
	//$thumb->size_height($size);
	/* $thumb->size_auto($_GET['size']); */
	$thumb->size_exact($_GET['size'], $_GET['size']);
}

$thumb->quality=90;

$thumb->process();
$thumb->show();
