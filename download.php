<?php

	ob_start();

	if (strpos($_POST['file'], 'DirLockerLite')!==false)
	{
		echo "True";
		header("Location: http://dulandias.com/download/download-dirlockerlite.php");
		return;
	}
		echo "False";
		$file = "http://dulandias.com/cloud/". $_POST['file'];
	
		header("Location:".$file);

?>
