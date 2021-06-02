<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User Registration</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

	<style type="text/css">
		body{
			background-color: mediumpurple;
		}
		.login-box{
			max-width: 700px;
			float: none;
			margin: 150px auto;
		}
		.login-left{
			padding-top: 40px;
			padding-left: 40px;
			padding-right: 40px;
			background:lightgrey;
		}
		.login-right{
			padding-top: 38px;
			padding-left: 40px;
			padding-right: 40px;
			padding-bottom: 40px;
			background:whitesmoke;
		}
		.form-control{
			background-color: transparent !important;
			border-color: black;
		}

	</style>
</head>
<body>
<div class="container">
	<div class="login-box">
	<div class="row">
		<div class="col-md-6 login-left">
			<h2>Login Here</h2>
			<form action="validation.php" method="post">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="user" class="form-control" required>
				</div>

				<div class="form-group">
					<label>Password</label>
					<input type="Password" name="password" class="form-control" required>
				</div>

				<button type="submit" class="btn btn-primary">Login</button>
			</form>
		</div>
		<div class="col-md-6 login-right">
			<h2>Register Here</h2>
			<form action="registeration.php" method="post">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="user" class="form-control" required>
				</div>

				<div class="form-group">
					<label>Password</label>
					<input type="Password" name="password" class="form-control" required>
				</div> 

				<div class="form-group">
					<label>Confirm Password</label>
					<input type="Confirm Password" name="confirmpassword" class="form-control" required>
				</div> 

				<button type="submit" class="btn btn-primary">Register</button>
			</form>
		</div>
	</div>
	</div>
</div>

</body>
</html>