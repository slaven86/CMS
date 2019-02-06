<!doctype html>
<html>
<head>
<?php include ('includes/head.php'); ?>
</head>
<body>

<style type="text/css">

body {
	background:url("images/bg.jpg")no-repeat 0px 0px;
	font-family: Tahoma, Geneva, sans-serif;
	background-size: cover;
	background-attachment:fixed;
	background-position: bottom center;
}

</style>

<?php

include('includes/konekcija.php');

if(isset($_SESSION['username'])){
		
	}
	else {
		
		header('location: index.php');
	}

$year = "";
	if(isset($_POST['upload'])){
	
	if(empty($_POST['name']) || empty($_POST['year']) || empty($_POST['genre'])){
		
					
		 	echo '<h3 style="color: red; text-align: center; margin-top: 20px;">Niste ubacili novi film, pokusajte ponovo</h3>';	
			
	}
	else{

$name = $_POST['name'];
$year = $_POST['year'];
$genre = $_POST['genre'];

$insert = mysqli_query($conn, "set names 'utf8' ");
$insert = "INSERT INTO films (name,year,genre) VALUES ('".$_POST['name']."', '".$_POST['year']."' , '".$_POST['genre']."')";
$rez = mysqli_query($conn,$insert);
	
	?>
	<h1 style="text-align: center; color:red;"> Novi film je dodat! </h1>
	<meta http-equiv="refresh" content="3;url=admin.php">
<?php
}

}
?>


<form style="margin-top: 20px; margin-left: 20px;" action="insert_artikal.php" method="post" >
<div class="container">
<div class="form-group row">
  <div class="col-sm-4">
    <label for="ex1">Naziv filma</label>
    <input class="form-control" name="name" id="ex1" type="">
  </div>
  <div class="col-sm-4">
    <label for="ex2">Godina</label>
    <input class="form-control" name="year" id="ex2" type="number">
  </div>

<div class="col-sm-4">

<label  class="control-label"><strong> Žanr </strong> </label> 
<select name="genre" class="form-control" id="genre">
<option value=""> - Izaberite - </option>
<option value="komedija">Komedija</option>
<option value="drama">Drama</option>
<option value="akcija">Akcija</option>
<option value="horor">Horor</option>
<option value="dečiji">Dečiji</option>

</select>
</div>

</div> 
</div>

  
  <p>&nbsp;</p>


  <p><input name="upload" type="submit" class="btn btn-primary btn-lg"  value="Dodajte novi film"/></p>
 
 </form>

  <p>&nbsp;</p>
  
  <span style="font-size: 20px;margin-left: 30px;" ><a style="color: blue;" href="admin.php"><img src="images/logout.jpg" width="25" height="25"> Povratak na filmove</a></span> 
  
</div>



</body>
</html>
