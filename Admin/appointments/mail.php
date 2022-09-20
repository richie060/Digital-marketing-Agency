
<?php include ('../server.php');


// if user not logged in cannot access the home page

if (empty($_SESSION['username'])) {
  header('location: ../login.php');
  // code...
}

?>
<?php include ('appointment.php'); ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Email</title> 
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
	<div class="header">
		EMAIL
	</div>
	<form method="post" action="../mail/send_mail.php">

	<div class="input-group">
		<label>Message</label>
		<input type="text" name="name" value="<?php echo $message ?>" required>
	</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email" value="<?php echo $email ?>" required>
		</div>

		<div class="input-group">
			<label>Message</label>
			<textarea name="body" id="body" required></textarea>
		</div>
	
		<div class="input-group">
			<button type="submit" name="send" class="btn  btn-primary">SEND </button>
		</div>
	</form>

</body>
</html>