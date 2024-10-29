<?
/*  Sample -------------------------------------
$thumb=new Thumbnail("source.jpg");	        // set source image file

$thumb->size_width(100);				    // set width for thumbnail, or
$thumb->size_height(300);				    // set height for thumbnail, or
$thumb->size_auto(200);					    // set the biggest width or height for thumbnail

$thumb->quality=75;                        //default 75 , only for JPG format
$thumb->output_format='JPG';               // JPG | PNG
$thumb->jpeg_progressive=0;                // set progressive JPEG : 0 = no , 1 = yes
$thumb->allow_enlarge=false;               // allow to enlarge the thumbnail
$thumb->CalculateQFactor(10000);           // Calculate JPEG quality factor for a specific size in bytes
$thumb->bicubic_resample=true;             // [OPTIONAL] set resample algorithm to bicubic

$thumb->img_watermark='watermark.png';	    // [OPTIONAL] set watermark source file, only PNG format [RECOMENDED ONLY WITH GD 2 ]
$thumb->img_watermark_Valing='TOP';   	    // [OPTIONAL] set watermark vertical position, TOP | CENTER | BOTTOM
$thumb->img_watermark_Haling='LEFT';   	    // [OPTIONAL] set watermark horizonatal position, LEFT | CENTER | RIGHT

$thumb->txt_watermark='Watermark text';	    // [OPTIONAL] set watermark text [RECOMENDED ONLY WITH GD 2 ]
$thumb->txt_watermark_color='000000';	    // [OPTIONAL] set watermark text color , RGB Hexadecimal[RECOMENDED ONLY WITH GD 2 ]
$thumb->txt_watermark_font=1;	            // [OPTIONAL] set watermark text font: 1,2,3,4,5
$thumb->txt_watermark_Valing='TOP';   	    // [OPTIONAL] set watermark text vertical position, TOP | CENTER | BOTTOM
$thumb->txt_watermark_Haling='LEFT';       // [OPTIONAL] set watermark text horizonatal position, LEFT | CENTER | RIGHT
$thumb->txt_watermark_Hmargin=10;          // [OPTIONAL] set watermark text horizonatal margin in pixels
$thumb->txt_watermark_Vmargin=10;           // [OPTIONAL] set watermark text vertical margin in pixels

$thumb->process();   				        // generate image

$thumb->show();						        // show your thumbnail, or
$thumb->save("thumbnail.jpg");			    // save your thumbnail to file, or
$image = $thumb->dump();                    // get the image

echo ($thumb->error_msg);                   // print Error Mensage
//----------------------------------------------
################################################  */


class thumbnail {
    var $quality=75;
    var $output_format='JPG';
    var $jpeg_progressive=0;
    var $allow_enlarge=false;
    var $img_watermark='';
    var $img_brdx='';
    var $img_watermark_Valing='TOP';
    var $img_watermark_Haling='LEFT';
    var $txt_watermark='';
    var $txt_watermark_color='000000';
    var $txt_watermark_font=1;
    var $txt_watermark_Valing='TOP';
    var $txt_watermark_Haling='LEFT';
    var $txt_watermark_Hmargin=10;
    var $txt_watermark_Vmargin=10;
    var $bicubic_resample=false;
    var $wh_16x9=false;
    var $memory_limit='300M';
    var $error_msg='';
    var $img;

	function thumbnail($imgfile) 	{
        ini_set('memory_limit',$this->memory_limit);
    	$img_info =  getimagesize( $imgfile );
        switch( $img_info[2] ){
	    		case 2:
	    			$this->img["format"]="JPEG";
	    			$this->img["src"] = ImageCreateFromJPEG ($imgfile);
        		break;
	    		case 3:
	    			$this->img["format"]="PNG";
	    			$this->img["src"] = ImageCreateFromPNG ($imgfile);
                    $this->img["des"] =  $this->img["src"];
  	    		break;
	    		default:
	                $this->error_msg="Not Supported File";
	 				return false;
	    }
		$this->img["x"] = $img_info[0];
		$this->img["y"] = $img_info[1];
        $this->img["x_thumb"]= $this->img["x"];
        $this->img["y_thumb"]= $this->img["y"];
        $this->img["des"] =  $this->img["src"];
		return true;
	}

	function size_height($size=100) {
  		$this->img["y_thumb"]=$size;
        if ($this->img["y"]>0) 
        {
            if ($this->wh_16x9) $this->img["x_thumb"]=$this->img["y_thumb"]*16/9; else $this->img["x_thumb"] = ($this->img["y_thumb"]/$this->img["y"])*$this->img["x"];
        } 
        else 
        {
	        $this->error_msg="Invalid size : Y";
		    return false;
        }
	}

	function size_width($size=100)  {
    	$this->img["x_thumb"]=$size;
        if ($this->img["x"]>0) 
        {
            if ($this->wh_16x9) $this->img["y_thumb"]=$this->img["x_thumb"]/16*9; else $this->img["y_thumb"] = ($this->img["x_thumb"]/$this->img["x"])*$this->img["y"];
        } 
        else 
        {
    	    $this->error_msg="Invalid size : X";
    		return false;
        }
    }

	function size_auto($size=100)   {
		if ($this->img["x"]>=$this->img["y"]) $this->size_width($size); else $this->size_height($size);
	}

	function show() {
		Header("Content-Type: image/".$this->img["format"]);
        if ($this->output_format=="PNG") {
    	imagePNG($this->img["des"]);
    	} else {
            imageinterlace( $this->img["des"], $this->jpeg_progressive);
         	imageJPEG($this->img["des"],null,$this->quality);
        }
	}

	function dump() {
		return $this->img["des"];
	}

	function save($save="")	{
	    if (empty($save)) {
            $this->error_msg='Not Save File';
            return false;
        }
        if ($this->output_format=="PNG") {
    	    imagePNG($this->img["des"],"$save");
    	} else {
           imageinterlace( $this->img["des"], $this->jpeg_progressive);
           imageJPEG($this->img["des"],"$save",$this->quality);
        }
        return true;
	}

    function process () {
        $X_des =$this->img["x_thumb"];
        $Y_des =$this->img["y_thumb"];
        $N_x =$this->img["x"];
        $N_y =$this->img["y"];

        if ($this->wh_16x9)
        {
            if ($X_des >= $Y_des*16/9) $X_des=$Y_des*16/9; else $Y_des=$X_des*16/9;
        }
        
   		if ($this->checkgd2()) 
        {
            $this->img["des"] = ImageCreateTrueColor($X_des,$Y_des);
            if ($this->txt_watermark!='' ) 
            {
                sscanf($this->txt_watermark_color, "%2x%2x%2x", $red, $green, $blue);
                $txt_color=imageColorAllocate($this->img["des"] ,$red, $green, $blue);
            }
            if (!$this->bicubic_resample) 
            {
                if ($this->wh_16x9)
                {
                    if ($N_x >= $N_y*16/9) $N_x=$N_y*16/9; else $N_y=$N_x*9/16;
                }
                imagecopyresampled ($this->img["des"], $this->img["src"], 0, 0, 0, 0, $X_des, $Y_des, $N_x, $N_y);
            } 
            else 
            {
                $this->imageCopyResampleBicubic($this->img["des"], $this->img["src"], 0, 0, 0, 0, $X_des, $Y_des, $this->img["x"], $this->img["y"]);
            }
            if ($this->img_watermark!='' && file_exists($this->img_watermark))
            {
                $this->img["watermark"]=ImageCreateFromPNG ($this->img_watermark);
                $this->img["x_watermark"] =imagesx($this->img["watermark"]);
                $this->img["y_watermark"] =imagesy($this->img["watermark"]);
                imagecopymerge($this->img["des"], $this->img["watermark"], $this->calc_position_H (), $this->calc_position_V (), 0, 0, $this->img["x_watermark"], $this->img["y_watermark"], 25);
            }
            if ($this->img_brdx!='' && file_exists($this->img_brdx))
            {
                $this->img["brdx"]=ImageCreateFromPNG ($this->img_brdx);
                $this->img["x_brdx"] =imagesx($this->img["brdx"]);
                $this->img["y_brdx"] =imagesy($this->img["brdx"]);                
                imagecopyresampled ($this->img["des"], $this->img["brdx"], 0, 0, 0, 0, $X_des, $Y_des, $this->img["x_brdx"], $this->img["y_brdx"]);
            }
            if ($this->txt_watermark!='' ) 
            {
                imagestring ( $this->img["des"], $this->txt_watermark_font, $this->calc_text_position_H() , $this->calc_text_position_V(), $this->txt_watermark,$txt_color);
            }
        } 
        else 
        {
            $this->img["des"] = ImageCreate($X_des,$Y_des);
            if ($this->txt_watermark!='' ) 
            {
                sscanf($this->txt_watermark_color, "%2x%2x%2x", $red, $green, $blue);
                $txt_color=imageColorAllocate($this->img["des"] ,$red, $green, $blue);
            }
            if ($this->img_watermark!='' && file_exists($this->img_watermark)) 
            {
                $this->img["watermark"]=ImageCreateFromPNG ($this->img_watermark);
                $this->img["x_watermark"] =imagesx($this->img["watermark"]);
                $this->img["y_watermark"] =imagesy($this->img["watermark"]);
                imagecopy ($this->img["des"], $this->img["watermark"], $this->calc_position_H (), $this->calc_position_V (), 0, 0, $this->img["x_watermark"], $this->img["y_watermark"]);
            }
            imagecopyresized ($this->img["des"], $this->img["src"], 0, 0, 0, 0, $X_des, $Y_des, $this->img["x"], $this->img["y"]);
            imagecopy ($this->img["des"], $this->img["watermark"], $this->calc_position_H (), $this->calc_position_V (), 0, 0, $this->img["x_watermark"], $this->img["y_watermark"]);
            if ($this->txt_watermark!='' ) 
            {
                imagestring ( $this->img["des"], $this->txt_watermark_font, $this->calc_text_position_H() , $this->calc_text_position_V(), $this->txt_watermark, $txt_color); // $this->txt_watermark_color);
            }
        }
        $this->img["src"]=$this->img["des"];
        $this->img["x"]= $this->img["x_thumb"];  
        $this->img["y"]= $this->img["y_thumb"];
    }

    /**
    *Calculate JPEG quality factor for a specific size in bytes
    *@access public
    *@param integer maximun file size in bytes
    **/
    function CalculateQFactor($size)  {
        //based on: JPEGReducer class version 1,  25 November 2004,  Author: huda m elmatsani, Email :justhuda@netscape.net

        //calculate size of each image. 75%, 50%, and 25% quality
        ob_start(); imagejpeg($this->img["des"],'',75);  $buffer = ob_get_contents(); ob_end_clean();
        $size75 = strlen($buffer);
        ob_start(); imagejpeg($this->img["des"],'',50);  $buffer = ob_get_contents(); ob_end_clean();
        $size50 = strlen($buffer);
        ob_start(); imagejpeg($this->img["des"],'',25);  $buffer = ob_get_contents(); ob_end_clean();
        $size25 = strlen($buffer);

        //calculate gradient of size reduction by quality
        $mgrad1 = 25/($size50-$size25);
        $mgrad2 = 25/($size75-$size50);
        $mgrad3 = 50/($size75-$size25);
        $mgrad  = ($mgrad1+$mgrad2+$mgrad3)/3;
        //result of approx. quality factor for expected size
        $q_factor=round($mgrad*($size-$size50)+50);

        if ($q_factor<25) {
            $this->quality=25;
        } elseif ($q_factor>100) {
            $this->quality=100;
        } else {
            $this->quality=$q_factor;
        }
    }

    /**
    *@access private
    *@return integer
    **/
    function calc_text_position_H () {
        $W_mark =  imagefontwidth  ($this->txt_watermark_font)*strlen($this->txt_watermark);
        $W = $this->img["x_thumb"];
        switch ($this->txt_watermark_Haling) {
             case 'CENTER':
                 $x = $W/2-$W_mark/2;
                 break;
             case 'RIGHT':
                 $x = $W-$W_mark-($this->txt_watermark_Hmargin);
                 break;
             default:
             case 'LEFT':
                $x = 0+($this->txt_watermark_Hmargin);
                 break;
         }
         return $x;
    }

    /**
    *@access private
    *@return integer
    **/
    function calc_text_position_V () {
        $H_mark = imagefontheight ($this->txt_watermark_font);
        $H = $this->img["y_thumb"];
        switch ($this->txt_watermark_Valing) {
             case 'CENTER':
                 $y = $H/2-$H_mark/2;
                 break;
             case 'BOTTOM':
                 $y = $H-$H_mark-($this->txt_watermark_Vmargin);
                 break;
             default:
             case 'TOP':
                $y = 0+($this->txt_watermark_Vmargin);
                 break;
         }
         return $y;
    }

    /**
    *@access private
    *@return integer
    **/
    function calc_position_H () {
        $W_mark = $this->img["x_watermark"];
        $W = $this->img["x_thumb"];
        switch ($this->img_watermark_Haling) {
             case 'CENTER':
                 $x = $W/2-$W_mark/2;
                 break;
             case 'RIGHT':
                 $x = $W-$W_mark;
                 break;
             default:
             case 'LEFT':
                $x = 0;
                 break;
         }
         return $x;
    }

    /**
    *@access private
    *@return integer
    **/
    function calc_position_V () {
        $H_mark = $this->img["y_watermark"];
        $H = $this->img["y_thumb"];
        switch ($this->img_watermark_Valing) {
             case 'CENTER':
                 $y = $H/2-$H_mark/2;
                 break;
             case 'BOTTOM':
                 $y = $H-$H_mark;
                 break;
             default:
             case 'TOP':
                $y = 0;
                 break;
         }
         return $y;
    }

    /**
    *@access private
    *@return boolean
    **/
    function checkgd2(){
        // TEST the GD version
          if (extension_loaded('gd2') && function_exists('imagecreatetruecolor')) {
            return false;
          } else {
            return true;
          }
    }

    function imageCopyResampleBicubic($dst_img, $src_img, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h) {
      $scaleX = ($src_w - 1) / $dst_w;
      $scaleY = ($src_h - 1) / $dst_h;
      $scaleX2 = $scaleX / 2.0;
      $scaleY2 = $scaleY / 2.0;
      $tc = imageistruecolor($src_img);

      for ($y = $src_y; $y < $src_y + $dst_h; $y++) {
       $sY  = $y * $scaleY;
       $siY  = (int) $sY;
       $siY2 = (int) $sY + $scaleY2;

       for ($x = $src_x; $x < $src_x + $dst_w; $x++) {
         $sX  = $x * $scaleX;
         $siX  = (int) $sX;
         $siX2 = (int) $sX + $scaleX2;

         if ($tc) {
           $c1 = imagecolorat($src_img, $siX, $siY2);
           $c2 = imagecolorat($src_img, $siX, $siY);
           $c3 = imagecolorat($src_img, $siX2, $siY2);
           $c4 = imagecolorat($src_img, $siX2, $siY);

           $r = (($c1 + $c2 + $c3 + $c4) >> 2) & 0xFF0000;
           $g = ((($c1 & 0xFF00) + ($c2 & 0xFF00) + ($c3 & 0xFF00) + ($c4 & 0xFF00)) >> 2) & 0xFF00;
           $b = ((($c1 & 0xFF)  + ($c2 & 0xFF)  + ($c3 & 0xFF)  + ($c4 & 0xFF))  >> 2);

           imagesetpixel($dst_img, $dst_x + $x - $src_x, $dst_y + $y - $src_y, $r+$g+$b);
         }  else {
           $c1 = imagecolorsforindex($src_img, imagecolorat($src_img, $siX, $siY2));
           $c2 = imagecolorsforindex($src_img, imagecolorat($src_img, $siX, $siY));
           $c3 = imagecolorsforindex($src_img, imagecolorat($src_img, $siX2, $siY2));
           $c4 = imagecolorsforindex($src_img, imagecolorat($src_img, $siX2, $siY));

           $r = ($c1['red']  + $c2['red']  + $c3['red']  + $c4['red']  ) << 14;
           $g = ($c1['green'] + $c2['green'] + $c3['green'] + $c4['green']) << 6;
           $b = ($c1['blue']  + $c2['blue']  + $c3['blue']  + $c4['blue'] ) >> 2;

           imagesetpixel($dst_img, $dst_x + $x - $src_x, $dst_y + $y - $src_y, $r+$g+$b);
         }
       }
      }
    }

}
?>
