<?php
  include("connection.php");
  $sql = "SELECT * FROM music WHERE srNo='$_GET[taskId]'";
  $result = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Update</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
    crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700|Ubuntu" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
    crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
    crossorigin="anonymous"></script>  
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php"> <i class="fas fa-pen"></i> Update</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">

  </div>
</nav>


<div class="container">
  <div class="row">
    <div class="col align-self-center">
    <table class="table">
    <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col" colspan="2">Task Details</th>
    </tr>
  </thead>
  <tbody>
  <form method="post" action="insert2.php">
  <?php
    if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){
        echo '<tr>
        <th scope="row">'.$row['srNo'].'</th>
        <td><input type="hidden" name="taskId" value="'.$row['srNo'].'"><input type="text" value="'.$row['artist'].'" name="listupdate"/></td>      <td>
        <button type="submit" class="btn btn-secondary" ><i class="fas fa-pen"></i> Update</a>
      </td>
    </tr>';
      }
    }
  ?>
</form>
  </tbody>
</table>
    </div>
  </div>
</div>

</body>

</html>