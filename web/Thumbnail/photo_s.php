<?php

require_once 'photoclass.php';

$photo_path="/var/www/penny/data/www/photos";
$image = "pennywater.png";

switch($_GET["mod"]){
    case 'mainfoto': {$image = $photo_path."/houses/".ceil($_GET['lot']/1000)."/".$_GET['lot']."/foto_fs.jpg"; if(!file_exists($image)) $image = $photo_path."/houses/".ceil($_GET['lot']/1000)."/".$_GET['lot']."/foto_fw.jpg";} break;
    case 'maincp': {$image = $photo_path."/compounds/".ceil($_GET['lot']/1000)."/".$_GET['lot']."/foto_s1.jpg"; if(!file_exists($image)) $image = $photo_path."/compounds/".ceil($_GET['lot']/1000)."/".$_GET['lot']."/foto_w1.jpg";} break;
    case 'houses': $image = $photo_path."/houses/".ceil($_GET['lot']/1000)."/".$_GET['lot']."/".$_GET['name'].".jpg"; break;
    case 'lands': $image = $photo_path."/lands/".ceil($_GET['lot']/1000)."/".$_GET['lot']."/".$_GET['name'].".jpg"; break;
    case 'compounds': $image = $photo_path."/compounds/".ceil($_GET['lot']/1000)."/".$_GET['lot']."/".$_GET['name'].".jpg"; break;
}

if (!file_exists($image)) $image = "plrwatermark.png";

$auto=400;
if (!empty($_SESSION[$_GET["stype"]]))
{
    $auto=$_SESSION[$_GET["stype"]];
}
else
{
    if ($_GET["stype"]=="mf") $auto=660;
    if ($_GET["stype"]=="ct") $auto=365;
    if ($_GET["stype"]=="af") $auto=220;    
}

$thumb = new thumbnail($image);
$thumb->bicubic_resample=false;
$thumb->output_format='jpg';
if ($_GET["stype"]=="mf") $thumb->img_watermark="plrwatermark.png";
$thumb->jpeg_progressive=1;
$thumb->wh_43=true;
$thumb->size_width($auto);
$thumb->quality=90;
$thumb->process();
$thumb->show();
