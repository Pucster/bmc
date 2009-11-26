<?php
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
?>