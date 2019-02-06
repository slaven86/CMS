<?php
	include('includes/konekcija.php');
	
	if(isset($_SESSION['username'])){
		
	}
	else {
		
		header('location: index.php');
	}
?>

<!doctype html>
<html>
<head>
<?php include('includes/head.php'); ?>
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

	<p>&nbsp;</p>

	<span  style="margin-left:1300px; margin-top: 30px;font-size: 20px;" ><a style="color: blue;"href="logout.php"><img src="images/logout.jpg" width="25" height="25"> LOGOUT</a></span> 
	
	<p>&nbsp;</p>
	
	<p><a style="margin-left: 30px;" class="btn btn-success btn-lg" href="insert_artikal.php" role="button">(+) Dodaj film </a></p>
  <div class="container">
  <div class="row">
	
       <table style="margin-left: 200px; margin-top: 50px;" class="table table-striped">
           <thead class="bg-primary">
               <tr>
                   <th>Naziv filma</th>
                   <th>Godina</th>
                   <th>Žanr</th>  
					<th>Obriši</th>  
					<th>Izmeni</th>					
               </tr>
           </thead>
		   
		   <?php
		   		   
			$query = mysqli_query($conn, "set names 'utf8' ");
			$query = mysqli_query($conn,"SELECT * FROM films ORDER BY id");
			while($row = mysqli_fetch_assoc($query)){
				$id = $row['id'];
				$year = $row['year'];
				$name = $row['name'];
				$genre = $row['genre'];
				?>
			
			 <!-- Javascripta - potvrda brisanja --> 
          <script>
			function confirmDelete(delUrl) {
			  if (confirm(" Delate from database ? ")) {
				document.location = delUrl;  }
			}
	      </script> 		 
          <!-- Javascripta - potvrda brisanja  -->
          
		  <tbody>
			
			   <tr>
					<td class="bg-info"><?php echo $name; ?> </a></td>
                    <td><?php echo $year ?></td>
                    <td class="bg-info"><?php echo $genre ?></td>
                    <td><a href="javascript:confirmDelete('delete_artikal.php?add=<?php echo $id; ?>')"</a><img src="images/delete.png" width="20" height="20"></td> 
					<td><a href="edit_artikal.php?add=<?php echo $id; ?>"</a><img src="images/edit.png" width="20" height="20"></td> 
              </tr>
			<?php
			}
			?>
           </tbody>
         </table>
		
   </div>
</div>
</body>
</html>
