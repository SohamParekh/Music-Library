<?php
  include("connection.php");
  $sql = "SELECT * FROM music";
	$result = mysqli_query($con, $sql);
	session_start();
	if(!isset($_SESSION['uname'])){
		header('Location: index1.php');
	}
	
?>
<html>

<head>
	<title>Welcome Admin</title>
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
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
		<a class="navbar-brand" href="admin.php"><img src="https://img.icons8.com/nolan/64/000000/musical-notes.png"
				height="50px" width="50px"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">



			<ul class="navbar-nav ml-auto">
				<li class="nav-item active">
					<a class="nav-link" href="logout.php">Sign Out <span class="sr-only">(current)</span></a>
				</li>

			</ul>
		</div>
	</nav>
	<div class="container">
		<form method="POST" enctype="multipart/form-data" action="insert1.php">
			<input type="file" name="fileupload" value="fileupload" id="fileupload" class="btn btn-light image">
			<div class="form-group file">
				<input type="text" name="sname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
					placeholder="Song Name">
			</div>
			<div class="form-group artist">
				<input type="text" name="sartist" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
					placeholder="Song Artist">
			</div>
			<input type="file" name="songupload" value="fileupload" id="fileupload1" class="btn btn-light song-poster">
			<button type="submit" class="btn btn-outline-dark upload-bt"><i class="fas fa-upload"></i> Upload</button>
		</form>
	</div>
	<div class="container" style="margin-top: 350px;">
  <div class="row">
    <div class="col align-self-center">
    <table class="table">
    <table class="table">
   
    <hr/>
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col" colspan="2">Music List</th>
    </tr>
  </thead>
  <tbody>
  
  <?php
    if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){
        echo '<tr>
        <th scope="row">'.$row['srNo'].'</th>
        <td>'.$row['name'].'</td>      <td>
        <a href="update.php?taskId='.$row['srNo'].' "class="btn btn-secondary" ><i class="fas fa-pen"></i> Update</a>
        <a href="delete.php?taskId='.$row['srNo'].' " class="btn btn-danger" ><i class="fas fa-trash"></i> Delete</a>
      </td>
    </tr>';
      }
    }
  ?>

  </tbody>
</table>
    </div>
  </div>
</div>
</body>

</html>