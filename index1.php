<?php
session_start();

if(isset($_SESSION['uname']) && !empty($_SESSION[uname])){
  header('Location: admin.php');
}


?>


<!DOCTYPE html>

<html lang="en" class="gr__getbootstrap_com">

<head>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style2.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login | Music Library</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

  <!-- Bootstrap core CSS -->

  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">


  <style>
    body {
      font-family: Montserrat;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }
    .form-signin{
      margin-top: 100px;
    }
    #inputEmail,#inputPassword {
      margin-bottom: 10px;
    }
    input{
      margin-left: 400px;
    }

button{
  margin-left: 400px;
}
    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body class="text-center" data-gr-c-s-loaded="true">
  <div class="container">
  <form class="form-signin" method="Post" action="login.php">
    <i class="fas fa-fire fa-5x"></i>
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <?php
      if(isset($_GET['error'])){
        echo '
         <small style="color:red;">Credentials are wrong</small>
        ';
      }
    ?>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="text" id="inputEmail" class="form-control" placeholder="Email address" name="username" required
      style="width:300px;">
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required
      style="width:300px" align="center">
    <button class="btn btn-lg btn-primary btn-block b1" type="submit" style="width:200px;margin-left: 450px;">Sign in</button>
    <p class="mt-5 mb-3 text-muted">© 2019-2020</p>
  </form>

  <form action="index.php"> 
    <button class="btn btn-lg btn-primary btn-block b2" type="submit" style="width:300px;"><i class="fas fa-arrow-left"></i> Back To Home Page</button>
  </form>
</div>
</body>

</html>