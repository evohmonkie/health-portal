<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Login</title>
	
	<!-- Bootstrap core files -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<!-- Custom style -->
	<link rel="stylesheet" type="text/css" href="css/main.css">
	
	<!-- Main Javascript -->
	<script src="js/main.js"></script>
</head>
<body>
	<div class="container">
		<form class="form-signin">
			<h2 class="form-signin-heading">Portal Login</h2>
			<label for="inputUsername" class="sr-only">Username</label>
			<input id="inputUsername" class="form-control" type="text" placeholder="Username or Email">
			<label for="inputPassword" class="sr-only">Password</label>
			<input id="inputPassword" class="form-control" type="password" placeholder="Password" required>
			<div class="checkbox">
				<label>
					<input type="checkbox" value="remember-me"> Remember me
				</label>
			</div>
			<button type="button" class="btn btn-lg btn-primary btn-block" onclick="checkLogin()">Sign in</button>
			<div id="info">
			</div>
		</form> 
	</div>

	<!-- Javascript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
</body>
</html>