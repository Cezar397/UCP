<!DOCTYPE html>
<html>
<head>
	<title>Control Panel</title>

	<!-- META TAGS -->
	<meta charset="utf-8">
	<meta name="author" content="Catarau Cezar-Iulian">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- END META TAGS -->

	<!-- CSS -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

	<!-- END CSS -->
</head>
<body>

	<div class="container" style="width: 400px !important;">
		
		<form class="index-form" action="../../controller/login/login.php" method="POST">
			<p class="form-text" style="text-align: center;">User Account Control</p>
			<div class="form-group">
				<label for="email_input">Email</label>
				<input class="form-control" id="email_input" type="email" name="user_email" placeholder="Email" pattern=".{5,}" title="Five or more characters" required="required">
			</div>

			<div class="form-group">
				<label for="password_input">Password</label>
				<input class="form-control" id="password_input" type="password" name="user_password" placeholder="Password" pattern=".{5,32}" title="Minim 5 characters and maxim 32 characters" required="required">
			</div>

			<div class="form-check">
				<input class="form-check-input" id="check_input" type="checkbox" name="remember">
				<label class="form-check-label" for="check_input">Remeber me</label>
			</div>
			<br>
			<input class="btn btn-primary" type="submit" name="submit" value="Login">
		</form>

	</div>

<!-- JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- End JavaScript -->
</body>
</html>