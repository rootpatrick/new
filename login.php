<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title> LOGIN FORM </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: red;
    color: white;
    text-align: center;
}
</style>

<div class="footer">
  <p>Footer</p>
</div>
</head>
<body>

	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<!--<p>
			Not yet a member? <a href="#">Sign up</a>
		</p>-->
	</form>

<div class="footer">
  <p>201611309 , 201511178 </p>
</div>
</body>
</html>