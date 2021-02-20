<?php
session_start();

if(!isset($_SESSION['role'])=="admin"){
    echo "<script> alert('Login terlebih dahulu'); window.history.go(-1); </script>";
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>.In</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
    .carousel-control-prev-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23f00' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
    }

    .carousel-control-next-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23f00' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
    }
    </style>
</head>
<body>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-sm bg-danger navbar-danger" >
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="img/logoin.jpg" alt="logo" style="width:50px;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
    <div class="dropdown show">
          <a class="btn btn-danger " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            View
          </a>

          <div class="dropdown-menu bg-danger" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item text-black" value="Man" onclick="window.location.href='men_view.php'"> Man </a>
            <a class="dropdown-item text-black" value="Woman" onclick="window.location.href='women_view.php'">Woman</a>
            <a class="dropdown-item text-black" value="Kids" onclick="window.location.href='kids_view.php'">Kids</a>
          </div>
    </div>   
        </div>
    </li>
     <li class="nav-item">
        <div class="dropdown show">
          <a class="btn btn-danger " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Edit
          </a>

          <div class="dropdown-menu bg-danger" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item text-black" value="Man" onclick="window.location.href='men.php'"> Man </a>
            <a class="dropdown-item text-black" value="Woman" onclick="window.location.href='women.php'">Woman</a>
            <a class="dropdown-item text-black" value="Kids" onclick="window.location.href='kids.php'">Kids</a>
          </div>
        </div>
         <li class="nav-item">
        <div class="dropdown show">
          <a class="btn btn-danger " href="register_admin.php" role="button" onclick="window.location.href='register_admin.php'">
            Register
          </a>
        </div>
    <li class="nav-item">
        <div class="dropdown show">
          <a class="btn btn-danger " href="logout.php" role="button" onclick="window.location.href='logout.php'" >
            Logout
          </a>
        </div>
    </li>
  </ul>
</nav>

<!-- NAVBAR -->

<!-- FOTOSLIDE/CAROUSLE -->

<div class="container-fluid">
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <center class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/promo3.png"  width="1000" height="400">
    </div>
    <div class="carousel-item">
      <img src="img/promo1.png"  width="1000" height="400">
    </div>
    <div class="carousel-item">
      <img src="img/promo4.png"  width="1000" height="400">
    </div>
  </center>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev" >
    <span class="carousel-control-prev-icon" ></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<!-- FOTO SLIDE -->

<!-- FOOTER -->
</div>
<div class="footer">
 
  <div class="card bg-danger text-white">
    <div class="card-body">
    <P>.In</P>
    <p>Best Choices for Your Lifestyle</p>
      Email      :<a href="#" class="card-link">.in@gmail.com</a><br>
      Call       :<a href="#" class="card-link">0003342553</a>
    </div>
  </div>
</div>
<!-- FOOTER -->
</body>

</html>