<?php

require_once 'photoclass.php';

$photo_path="/web1/realtor.ru/spb/spb{$_GET['deal']}base/htdocs/images/photo";
$image = $photo_path."/web1/realtor.ru/spb/newspb/htdocs/web/public/images/zaglushka/zaglushka_1.jpg";
$auto=$_GET['size'];
switch($_GET["mod"]){
    case 'lot':
    	ALL_IMG_DIR_PHOTO_LOTS.$_GET['id'].'/'.$_GET['id'].'_'.$_GET['numb'].'_'.$_GET['size'].'.jpg';
    	$image = "{$photo_path}/{$_GET['photo']}.jpg";
    	//var_dump($image);die;
    	$arr = array("zaglushka_1.jpg","zaglushka_2.jpg","zaglushka_3.jpg");
    	if (!file_exists($image)) $image = "/web1/realtor.ru/spb/newspb/htdocs/web/public/images/zaglushka/".$arr[rand(0,2)];
    	break;
    case 'jk':
    	break;
}

$thumb = new \thumbnail($image);
$thumb->bicubic_resample = false;
$thumb->output_format = 'jpg';

$thumb->img_watermark = "/web1/realtor.ru/spb/newspb/htdocs/web/public/images/plrwatermark.png";
if ($auto != 0){
	//$thumb->size_height($size);
	//$thumb->size_auto($auto);
	$thumb->size_exact($auto, ($auto * 3)/4);
}

$thumb->jpeg_progressive = 1;

$thumb->quality = 90;

$thumb->process();
$thumb->show();
