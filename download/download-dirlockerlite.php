<?php

	$hit_count = @file_get_contents('DirLockerLite_Counter.txt');
	$hit_count++;
	@file_put_contents('DirLockerLite_Counter.txt', $hit_count);

	header('Location: http://dulandias.com/download/DirLockerLite.msi');

?>
