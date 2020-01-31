<?php
include('connection.php');
$sql = 'SELECT * FROM music where srNo='.$_GET['songID'].'';
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>MUSIC_PLAYER</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style1.css"> 
	<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
	  <a class="navbar-brand" href="index.php"><img src="https://img.icons8.com/nolan/64/000000/musical-notes.png" height="50px" width="50px"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">My Music</a>
	      </li>
	    </ul>
	  </div>
	</nav>
<audio id="myAudio">

  <source src="songs/<?php echo $row['song']; ?>" type="audio/mpeg">

</audio>
	<div class="music-container">
		<div class="music-img text-center">
			<div class="music-header">
				<i class="fa fa-angle-left"></i>
				<div class="title"><p> Now Playing</p></div>
				<i class="fa fa-list-ul"></i>
			</div>
			<div class="inner-img">
					<!--<img src="simage/">-->
					<?php 
					
							echo '
							<img src="simage/'.$row['image'].'">
							<p> '.$row['name'].' </p>
							<marquee>'.$row['name'].' Title Track - '.$row['artist'].'</marquee>
							';

					?>
				<!--<p> Ok Jaanu </p>
				<marquee>Ok Jaanu Title Track - A.R. Rahman & Srinidhi</marquee>-->
		</div>
  
		<div class="music-control">
			<div class="music-bar">
				<div class="progress">
				
				</div>
			</div>

			<div class="control-bar text-center">
				<i class="fa fa-step-backward " onclick="backward()"></i>
				<i class="fa fa-play" onclick="playAudio()" ></i>
				<i class="fa fa-pause" onclick="pauseAudio()" ></i>
				<i class="fa fa-step-forward" onclick="forward()"></i>
</div></div></div></div>
<script>
var x = document.getElementById("myAudio"); 

function playAudio() { 
  x.play(); 
} 

function pauseAudio() { 
  x.pause(); 
} 	
</script>
</body>
</html>