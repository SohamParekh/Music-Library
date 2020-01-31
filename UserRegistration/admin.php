<!DOCTYPE html>
<html>
<head>
	<title>User Login and Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><img src="https://img.icons8.com/nolan/64/000000/musical-notes.png" height="50px" width="50px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">My Music</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="UserRegistration/login.php">Login</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <div class="container">
	<div class="Login-box">
  	<div class="row">
  		<div class="col-md-6 login-left">
  			<h2>Login Here</h2>
  			<form action="validation1.php" method="post">
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


		
  	</div>
	</div>
  </div>
  
</body>
</html>
