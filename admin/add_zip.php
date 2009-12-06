<?php
	include("../config.php");
	include("../helpers.php");
	mysql_connect ($sql_host, $sql_user, $sql_pass);
    mysql_select_db ($sql_db);
	if (isset($_FILES['zipfile']['name'])) {
		$albumId = $_POST['album_id'];
		$albumPath = mysql_result(mysql_query("SELECT path FROM albums WHERE id='" . $albumId . "'"),0);
		$zipFile = $_FILES['zipfile']['tmp_name'];
		$albumDir = $root_dir . "/images/" . $albumPath;
		$uploadDir = $albumDir . "/tmp";
		if (!file_exists($uploadDir)) mkdir($uploadDir);
		if (@is_uploaded_file($zipFile))
		{
			$extension = getFileExtension($_FILES['zipfile']['name']);
			$now = time();
			while(file_exists($newFile = $uploadDir.'/'.$now.'.'.$extension)) {
				$now++;
			}
			$uploadedFileName = $now.'.'.$extension;
			move_uploaded_file($_FILES['zipfile']['tmp_name'], $newFile);
			$zip = new ZipArchive;
			$handle = $zip->open($newFile);
			if ($handle === TRUE) {
				echo 'ok<br>';
				$zip->extractTo($uploadDir);
				$zip->close();
			} else {
				echo 'failed, code:' . $handle;
			}
			unlink($newFile);
			if ($handle = opendir($uploadDir)) {
				while (false !== ($file = readdir($handle))) {
					if ($file == "." || $file == "..") continue;
					$extension = getFileExtension($file);
					$now = time();
					while(file_exists($newFile = $albumDir.'/'.$now.'.'.$extension)) {
						$now++;
					}
					$fileName = $now . '.' . $extension;
					rename($uploadDir.'/'.$file,$newFile);
					$thName = $root_dir . "/thumbs/" . $albumPath . "/th_" . $fileName;
					createthumb($newFile, $thName, 150, 150);
					$query = "INSERT INTO images VALUES (0,'" . $fileName . "','',0,'" . $albumId . "',NULL);";
					$result = mysql_query($query);
				}
			}
		}
		unlink($uploadDir);
	}
	redirect(adminLink('main'));

?>