<?php
    include('config.php');
	
	function getFileExtension($str) {

        $i = strrpos($str,".");
        if (!$i) { return ""; }

        $l = strlen($str) - $i;
        $ext = substr($str,$i+1,$l);

        return $ext;

    }
	
	function addInputValue($str) {
		return $str;
	}
	
	function redirect($page) {
	header('Location: ' . $page);
	exit();
	}
	
	function check_login_status() {
	// If $_SESSION['logged_in'] is set, return the status
	if (isset($_SESSION['logged_in'])) {
		return $_SESSION['logged_in'];
	}
	return false;
	}
	
	function logToFile($filename, $msg)
	{ 
	// open file
	$fd = fopen($filename, "a");
	
	// write string
	fwrite($fd, $msg . "\n");
	
	// close file
	fclose($fd);
	}
	
	function adminLink($str)
	{
		return "http://" . $GLOBALS['hostname'] . $GLOBALS['context'] . "/admin/" . $str . ".php";
	}

	function createthumb($name,$filename,$new_w,$new_h){
		$system=explode('.',$name);
		if (preg_match('/jpg|jpeg/',strtolower($system[1]))){
			$src_img=imagecreatefromjpeg($name);
		}
		if (preg_match('/png/',strtolower($system[1]))){
			$src_img=imagecreatefrompng($name);
		}
		$old_x=imageSX($src_img);
		$old_y=imageSY($src_img);
		if ($old_x > $old_y) {
			$thumb_w=$new_w;
			$thumb_h=$old_y*($new_h/$old_x);
		}
		if ($old_x < $old_y) {
			$thumb_w=$old_x*($new_w/$old_y);
			$thumb_h=$new_h;
		}
		if ($old_x == $old_y) {
			$thumb_w=$new_w;
			$thumb_h=$new_h;
		}
		$dst_img=ImageCreateTrueColor($thumb_w,$thumb_h);
		imagecopyresampled($dst_img,$src_img,0,0,0,0,$thumb_w,$thumb_h,$old_x,$old_y); 
		if (preg_match("/png/",$system[1])) {
			imagepng($dst_img,$filename); 
		} else {
			imagejpeg($dst_img,$filename); 
		}
		imagedestroy($dst_img); 
		imagedestroy($src_img); 
	}

	
?>