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

$id = $_GET['add'];
$listing = mysqli_query($conn,"set names 'utf8'");
$listing = mysqli_query($conn, "SELECT * FROM films WHERE id = '$id'");
while($row = mysqli_fetch_assoc($listing)){
	
	$id = $row['id'];
	$name = $row['name'];
	$year = $row['year'];
	$genre = $row['genre'];
}

?>


<form style="margin: 20px;" action="edit_artikal_skripta.php" method="post" >
<input name="id" style="background-color:#FFF; color:#FFFFFF; border:0;" type="text" id="id" value="<?php echo $id; ?>" size="5" readonly>

<div class="form-group row">
  <div class="col-sm-3">
   <label for="inputName" class="control-label"><strong> Naziv filma </strong> </label>
    <input name="name" required class="form-control" type="text" id="name" value="<?php echo $name; ?>">
  </div>
  <div class="col-sm-3">
    <label for="inputName" class="control-label"><strong> Godina </strong> </label>
    <input name="year" required class="form-control" type="text" id="year" value="<?php echo $year; ?>">
  </div>

<div class="col-sm-3">
   <label for="inputName" class="control-label"><strong> Žanr </strong> </label>
    <select name="genre"  required class="form-control" id="genre">
<option value=""> - Izaberite - </option>
<option value="komedija">Komedija</option>
<option value="drama">Drama</option>
<option value="akcija">Akcija</option>
<option value="horor">Horor</option>
<option value="dečiji">Dečiji</option>

	</select>
  </div>

</div> 

  
  <p>&nbsp;</p>

  <p><input name="upload" type="submit" class="btn btn-primary btn-lg"  value="Izmenite film"/></p>
  </form>

  <p>&nbsp;</p>
  
  <span style="font-size: 20px;margin-left: 30px;" ><a style="color: blue;" href="admin.php"><img src="images/logout.jpg" width="25" height="25"> Povratak na filmove</a></span> 
  
  
</div>



</body>
</html>
