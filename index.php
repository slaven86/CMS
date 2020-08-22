<?php
include('login.php');
?>


<!Doctype html>
<html>
<head>
<title>Login</title>
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">

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

.login-form {
	margin:auto;
	width:500px;
	border-radius: 30px;
	height: auto;
	margin-top: 100px;
	color: #FFF;
	text-align: center;
	padding-top: 20px;
	padding-bottom: 15px;
	background-color: #333;
	opacity: 0.8;
}
form {
	padding: 2em 2.5em 2em 2.5em;
}

input[type="text"], input[type="password"] {
	width: 350px;
	padding: 0.7em 1em 0.9em 3em;
	color: #000;
	font-size: 15px;
	border: none;
	border-radius: 0.3em;
	border: 1px solid #eee;
	margin: 0.8em 0;
	font-family: Verdana, Geneva, sans-serif;
	background: url("images/user.png")no-repeat 10px 16px #eee;
}
input[type="password"] {
	background: url("images/key.png")no-repeat 10px 15px #eee;
}
.submit input[type="submit"] {
	font-size: 1.2em;
	color: #fff;
	cursor: pointer;
	padding: 0.7em 0.8em;
	width: 100%;
	border: none;
	font-weight: 600;
	border-radius: 0.3em;
	font-family: 'Open Sans', sans-serif;
	background-color: #1377AB;
}
input[type="submit"]:hover {
	
	color: #FFF;
	background-color: #000000;
}
.submit {
	margin-top: 1em;
	width: 420px;

</style>
<div class="login-form">
    <form action="" method="post">

    <label> Username : </label>
	<input type="text" name="username" placeholder="username" id="name" />
	<label> Password : </label>
	<input type="password" name="password" placeholder="*********" id="password" />
	<div class="submit"><input name="submit" type="submit" value=" Login "> </div>
	 <span style="color:red;"><?php echo $error; ?></span>
	 
	 


</form>
</div>


</body>
</html>