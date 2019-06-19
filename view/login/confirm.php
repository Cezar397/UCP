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

	<div class="container">
		
		<form class="form-inline" style="justify-content: center; margin-top: 150px;" action="../../controller/login/login.php" method="POST">
 			 <div class="form-group mb-2">
  			  <label for="email" class="sr-only">Email</label>
    		  <input type="text" readonly class="form-control-plaintext" id="email" value="<?php echo $_SESSION["email"] ?>">
  			</div>

  			<div class="form-group mx-sm-3 mb-2">
   			 <label for="token" class="sr-only">Token</label>
   			 <input type="text" class="form-control" id="token" name="Token" placeholder="Token">
 			</div>

  			<button type="submit" class="btn btn-primary mb-2">Confirm identity</button>
		</form>

	</div>

<!-- JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- End JavaScript -->
</body>
</html>