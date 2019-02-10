<?php
session_start();

	$un= $_POST['username'];
	$pw= $_POST['password'];

		if ($un=="admin"){
			if ($pw="root")
			{
				session_start();
				header('Location: dashboard.php');
			}
				else
				{
					echo "<div id='loginmsg'>Invalid Password. </div>"; 
					
				}
		}
		else {
			echo "<div id='loginmsg'>Invalid Username. </div>"; 
		}
?>