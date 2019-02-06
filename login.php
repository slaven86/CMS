<?php

include('includes/konekcija.php');

	if(isset($_SESSION['username'])){
		
		header('location: admin.php');
		exit();
	}

$error = "";

if(isset($_POST['submit'])){
	
	if(empty($_POST['username']) || empty($_POST['password'])){
		
		 $error = "Uneti podatci nisu ispravni";
	}
	else{
		
		
		
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		$password = mysqli_real_escape_string($conn,$_POST['password']);
		
		
		$query = mysqli_query($conn,"SELECT * FROM users WHERE username = '$username' AND password = '$password'");
		$row = mysqli_num_rows($query);
		if($row == 1){
			
			$_SESSION['username'] = $username;
			header("location: admin.php");
				
		}
		else{
			$error = "Uneti podatci nisu ispravni";
		}
	}
}



?>