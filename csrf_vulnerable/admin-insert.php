<?php
	if(isset($_POST['insert'])){
		if(!empty(!empty($_POST['username'])&&!empty($_POST['password']))){
			$username=$_POST['username'];
			$password=$_POST['password'];
			
			$query="INSERT INTO `db`.`user` (`username`,`password`) VALUES ('$username','$password')";
					
			if(mysql_query($query)){
				mysql_close();
				header("location: admin.php");
			}
		}
		else{
			$error="Please enter username/password";
		}
	}
?>