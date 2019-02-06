<?php

include('includes/konekcija.php');

if(isset($_SESSION['username'])){
		
	}
	else {
		
		header('location: index.php');
	}

$id = $_POST['id'];
$name = $_POST['name'];
$year = $_POST['year'];
$genre = $_POST['genre'];

$rez = mysqli_query($conn, "set names 'utf8'");
$rez = mysqli_query($conn, "UPDATE films SET name = '$name', year = '$year', genre = '$genre' WHERE id = '$id'") or die('Neuspela izmena filma..');



?>

<h1 style="color: red; text-align: center;"> Uspešno ste izmenili film! </h1>
<meta http-equiv="refresh" content="3;url=admin.php?add=<?php echo $id; ?>">