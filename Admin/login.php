<?php include ('server.php');?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title> 
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		Login
	</div>
	<form method="post" action="login.php">
		<?php include ('errors.php'); ?>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username">
	</div>
	<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		<div class="input-group">
			<button type="submit" name="login" class="btn  btn-primary">Login  </button>
		</div>
		<p>Not yet  a member?<a href="register.php">Sign in</p>
	</form>

</body>
</html>