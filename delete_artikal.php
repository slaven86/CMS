<?php 

include('includes/konekcija.php');

if(isset($_SESSION['username'])){
		
	}
	else {
		
		header('location: index.php');
	}


$id = $_GET['add'];
mysqli_query($conn, "DELETE FROM films WHERE id = '$id'") 
or die(mysqli_error());
?>

<h1 style="text-align: center; color: red;"> Film je obrisan!! </h1>
<meta http-equiv="refresh" content="2;url=admin.php">

