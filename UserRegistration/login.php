<?php
session_start();
if(isset($_SESSION['name1'])){
	header('Location: ../index2.php');
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>User Login and Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css"
		href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body style="    background-color: #ff4c68;">
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
			<a class="navbar-brand" href="../index.php"><img src="https://img.icons8.com/nolan/64/000000/musical-notes.png"
					height="50px" width="50px"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">My Music</a>
					</li>
				</ul>

				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>

			</div>
		</nav>
	</header>
	<div class="container">
		<div class="Login-box">
			<div class="row">
				<div class="col-md-6 login-left">
					<h2>Login Here</h2>
					<form action="validation.php" method="post">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="user" class="form-control" placeholder="Username" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="Password" name="password" class="form-control" placeholder="Password" required>
						</div>
						<button type="submit" class="btn btn-primary">Login</button>
					</form>
				</div>


				<div class="col-md-6 login-right">
					<h2>Register Here</h2>
					<form action="registration.php" method="post">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="user" id="username" class="form-control" placeholder="Username"
								autocomplete="off" required>
						</div>
						<h5 id="show-error"> </h5>
						<div class="form-group">
							<label>Password</label>
							<input type="Password" name="password" id="password" class="form-control" placeholder="Password"
								autocomplete="off" required>
						</div>
						<h5 id="show-error1"> </h5>
						<div class="form-group">
							<label>Email</label>
							<input type="email" name="email" id="email" class="form-control" placeholder="Email" autocomplete="off" required>
						</div>
						<h5 id="show-error2"> </h5>
						<div class="form-group">
							<label>Contact Number</label>
							<input type="text" name="number" id="number" class="form-control" autocomplete="off" placeholder="Contact Number" required>
						</div>
						<h5 id="show-error3"> </h5>
						<button type="submit" id="submit" class="btn btn-primary">Register</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function () {
			$('#show-error').hide();
			$('#show-error1').hide();
			$('#show-error2').hide();
			$('#show-error3').hide();
			var user_err = true;
			var pass_err = true;
			var contact_err = true;
			var email_err = true;

			$('#username').keyup(function () {
				username_check();
			});

			function username_check() {
				var user_val = $('#username').val();

				if (user_val.length == '') {
					$('#show-error').show();
					$('#show-error').html("**Please Fill the Username");
					$('#show-error').focus();
					$('#show-error').css("color", "red");
					user_err = false;
					return false;
				}
				else {
					$('#show-error').hide();
				}
			}

			$('#password').keyup(function () {
				password_check();
			});

			function password_check() {
				var pass_val = $('#password').val();

				if (pass_val.length == '') {
					$('#show-error1').show();
					$('#show-error1').html("**Please Fill the Password");
					$('#show-error1').focus();
					$('#show-error1').css("color", "red");
					user_err = false;
					return false;
				}
				else {
					$('#show-error1').hide();
				}
			}
			$('#email').keyup(function () {
				email_check();
			});

			function email_check() {
				var email_val = $('#email').val();
				var regex = /^[a-zA-Z0-9._]+@[a-zA-Z0-9]+\.[a-z]{2,6}$/;

				if (!(email_val.match(regex))) {
					$('#show-error2').show();
					$('#show-error2').html("**Provide Valid Email");
					$('#show-error2').focus();
					$('#show-error2').css("color", "red");
					email_err = false;
					return false;
				}
				else {
					$('#show-error2').hide();
				}
			}
			$('#number').keyup(function () {
				number_check();
			});

			function number_check() {
				var number_val = $('#number').val();
				var regnum = /^[6-9][0-9]{9}/;
				if (!(number_val.match(regnum))) {
					$('#show-error3').show();
					$('#show-error3').html("**Provide Valid Contact Number");
					$('#show-error3').focus();
					$('#show-error3').css("color", "red");
					contact_err = false;
					return false;
				}
				if ((number_val.length < 10) || (number_val.length > 10)) {
					$('#show-error3').show();
					$('#show-error3').html("**Provide 10 Digit Number");
					$('#show-error3').focus();
					$('#show-error3').css("color", "red");
					contact_err = false;
					return false;
				}
				else {
					$('#show-error3').hide();
				}
			}

			$('#submit').click(function () {
				 user_err = true;
				 pass_err = true;
				 contact_err = true;
				 email_err = true;
				 username_check();
				 password_check();
				 email_check();
				 number_check();
				 if(( user_err == true) && ( pass_err == true) && ( contact_err == true) && ( email_err == true)){
					 return true;
				 }
				 else{
					 return false;
				 }
			});
		});
	</script>
</body>

</html>