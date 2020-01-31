<?php
include('connection.php');
$sql = "SELECT * FROM music";
$result = mysqli_query($con, $sql);
session_start();

if(isset($_SESSION['name1']) && !empty($_SESSION[name1])){
  header('Location: index2.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Music Library</title>

  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700|Ubuntu" rel="stylesheet">
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
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
  <!-- or -->
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
  <!--Jquery Form Validation-->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
      <a class="navbar-brand" href="index.php"><img src="https://img.icons8.com/nolan/64/000000/musical-notes.png"
          height="50px" width="50px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#player-list">My Music</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#filt">Gallery</a>
          </li>
        </ul>

        
        <ul class="navbar-nav ml">
          <li class="nav-item active">
            <a class="nav-link" href="UserRegistration/login.php">Login/Sign Up <span
                class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!--/.CAROUSEL-->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="Image/image1.png" class="d-block w-100" alt="Loading...">
      </div>
      <div class="carousel-item">
        <img src="Image/image2.jpg" class="d-block w-100" alt="Loading...">
      </div>
      <div class="carousel-item">
        <img src="Image/image3.png" class="d-block w-100" alt="Loading...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!--/.CAROUSEL END-->
  <section id="features">
    <div class="container">
      <div class="row">
        <div class="feature-box col-lg-4 col-md-4 col-sm-12">

          <i class="fas fa-music fa-4x fa-hover"></i>
          <h3 class="ff">Feel The MUSIC</h3>
          <p></p>
        </div>
      </div>
    </div>
  </section>
  <!--/.JS Isotope-->
  <section id="filt">
    <div class="ff" style="padding-top: 10px;" align="center">Song Gallery</div>
    <div class="wraper">
      <div class="iso-nav">
        <button class="btn btn-outline-dark active" data-filter="*">All</button>
        <button class="btn btn-outline-dark" data-filter=".new">New Tracks</button>
        <button class="btn btn-outline-dark" data-filter=".old">Old Tracks</button>
      </div>

      <div class="main-iso">
        <div class="item old">
          <img src="https://i.pinimg.com/236x/05/5e/93/055e93cbdd04a051d1f4020599f458f2--indian-movies-film-posters.jpg" alt="" height="200px" width="200px">
        </div>
        <div class="item new">
          <img src="https://movieboxofficereview.com/wp-content/uploads/2018/10/Simmba-Movie-First-Look-Poster.jpg" alt="" height="200px" width="200px">
        </div>
        <div class="item new">
          <img src="https://st1.bollywoodlife.com/wp-content/uploads/2019/03/pjimage-38.jpg" alt="" height="200px" width="200px">
        </div>
        <div class="item new">
          <img src="https://2.bp.blogspot.com/-0VeMWC0YZSM/W-kWuLjwYSI/AAAAAAAA9TE/x-E_YfrIxRYOtmzQ6-fKBMZClJmadY5KgCLcBGAs/s1600/cheat-india.jpg" alt="" height="200px" width="200px">
        </div>
        <div class="item old">
          <img src="http://thumbnails106.imagebam.com/23002/f0a9a4230011526.jpg" alt="" height="200px" width="200px">
        </div>
        <div class="item new">
          <img src="https://bollywoodmascot.com/wp-content/uploads/2018/09/Kesari.jpg" alt="" height="200px" width="200px">
        </div>
      </div>
    </div>

    <script>
      var $grid = $('.main-iso').isotope({
        // options
      });
      // filter items on button click
      $('.iso-nav').on('click', 'button', function () {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
      });
    </script>
  </section>
  <!--/.MUSIC CARD-->
  <section id="player-list">
    <div class="container" style="padding-bottom: 50px;">
      <div class="ff" style="padding-top: 10px;">Top Release</div>
      <div class="row">
        <?php
        if(mysqli_num_rows($result) > 0){
          while($row = mysqli_fetch_assoc($result)){
            echo '
            <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card" style="width: 15rem; height: 15rem ;margin-top: 10px; margin-bottom: 10px;" width="100px"
              height="190px">
              <img class="card-img-top" src="simage/'.$row['image'].'" alt="Card image cap" height="130px">
              <div class="card-body">
                <h5 class="card-title">'.$row['name'].'</h5>
                
                <a href="player.php?songID='.$row['srNo'].'" class="btn btn-primary"><i class="far fa-play-circle"></i> Play</a>
              
              </div>
            </div>
          </div>
            ';
          }
        }
      ?>
         <!-- <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card" style="width: 15rem; height: 15rem ;margin-top: 10px; margin-bottom: 10px;" width="100px"
            height="180px">
            <img class="card-img-top" src="Image/image3.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Song Name</h5>
              <a href="player.php?songID=" class="btn btn-primary"><i class="far fa-play-circle"></i> Play</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card" style="width: 15rem; height: 15rem ;margin-top: 10px; margin-bottom: 10px;" width="100px"
            height="180px">
            <img class="card-img-top" src="Image/image1.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Song Name</h5>
              <a href="player.html" class="btn btn-primary"><i class="far fa-play-circle"></i> Play</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card" style="width: 15rem; height: 15rem ;margin-top: 10px;margin-bottom: 10px;" width="100px"
            height="180px">
            <img class="card-img-top" src="Image/image2.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Song Name</h5>
              <a href="player.html" class="btn btn-primary"><i class="far fa-play-circle"></i> Play</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card" style="width: 15rem; height: 15rem ;margin-top: 10px; margin-bottom: 10px;" width="100px"
            height="180px">
            <img class="card-img-top" src="Image/image3.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Song Name</h5>
              <a href="player.html" class="btn btn-primary"><i class="far fa-play-circle"></i> Play</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card" style="width: 15rem; height: 15rem ;margin-top: 10px; margin-bottom: 10px;" width="100px"
            height="180px">
            <img class="card-img-top" src="Image/image3.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Song Name</h5>
              <a href="player.html" class="btn btn-primary"><i class="far fa-play-circle"></i> Play</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card" style="width: 15rem; height: 15rem ;margin-top: 10px; margin-bottom: 10px;" width="100px"
            height="180px">
            <img class="card-img-top" src="Image/image1.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Song Name</h5>
              <a href="player.html" class="btn btn-primary"><i class="far fa-play-circle"></i> Play</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card" style="width: 15rem; height: 15rem ;margin-top: 10px;margin-bottom: 10px;" width="100px"
            height="180px">
            <img class="card-img-top" src="Image/image2.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Song Name</h5>
              <a href="player.html" class="btn btn-primary"><i class="far fa-play-circle"></i> Play</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card" style="width: 15rem; height: 15rem ;margin-top: 10px; margin-bottom: 10px;" width="100px"
            height="180px">
            <img class="card-img-top" src="Image/image3.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Song Name</h5>
              <a href="player.html" class="btn btn-primary"><i class="far fa-play-circle"></i> Play</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card" style="width: 15rem; height: 15rem ;margin-top: 10px; margin-bottom: 10px;" width="100px"
            height="180px">
            <img class="card-img-top" src="Image/image3.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Song Name</h5>
              <a href="player.html" class="btn btn-primary"><i class="far fa-play-circle"></i> Play</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card" style="width: 15rem; height: 15rem ;margin-top: 10px; margin-bottom: 10px;" width="100px"
            height="180px">
            <img class="card-img-top" src="Image/image1.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Song Name</h5>
              <a href="player.html" class="btn btn-primary"><i class="far fa-play-circle"></i> Play</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card" style="width: 15rem; height: 15rem ;margin-top: 10px;margin-bottom: 10px;" width="100px"
            height="180px">
            <img class="card-img-top" src="Image/image2.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Song Name</h5>
              <a href="player.html" class="btn btn-primary"><i class="far fa-play-circle"></i> Play</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card" style="width: 15rem; height: 15rem ;margin-top: 10px; margin-bottom: 10px;" width="100px"
            height="180px">
            <img class="card-img-top" src="Image/image3.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Song Name</h5>
              <a href="player.html" class="btn btn-primary"><i class="far fa-play-circle"></i> Play</a>
            </div>
          </div>
        </div>-->
      </div>
    </div>
  </section>
  <!--/.FOOTER-->
  <footer id="footer">
    <i class="fab social-icon fa-facebook-f blinker"></i>
    <i class="fab social-icon fa-twitter blinker"></i>
    <i class="fab social-icon fa-instagram blinker"></i>
    <i class="fas social-icon fa-envelope blinker"></i>
    <p>© Copyright 2019 Music-Library</p>
    <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal"
      data-whatever="@mdo">FeedBack</button>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">New message</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" enctype="multipart/form-data" action="insert.php">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Recipient:</label>
                <input type="text" name="fname" class="form-control" id="recipient-name">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Message:</label>
                <textarea class="form-control" name="message" id="message-text"></textarea>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Send message</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </footer>




  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>

  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>

</html>