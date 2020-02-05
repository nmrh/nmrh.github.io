<?php 
include_once('./Include/Header.php');
?>  
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active" style="background-image: url('Images/2.jpg')"></div>
        <div class="carousel-item" style="background-image: url('Images/0.jpg')"></div>
        <div class="carousel-item" style="background-image: url('Images/1.jpg')"></div>
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


  
  <div class="container">

    <h1 class="my-4">Welcome to Faculty of Engineering, University of Ruhuna.</h1>

   
    <div class="row">
      <div class="col">
        <div class="card h-100">
          <h4 class="card-header">Admin</h4>
          <div class="card-body">
            <p class="card-text">Create your account as an admin in here</p>
          </div>
          <div class="card-footer">
              <a href="Register.php" class="btn btn-primary">Register</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <h4 class="card-header">Guest</h4>
          <div class="card-body">
            <p class="card-text">Create your account from here to apply for a gate passes to enter the faculty.</p>
          </div>
          <div class="card-footer">
              <a href="GuestReg.php" class="btn btn-primary">Register</a>
          </div>
        </div>
      </div>
        <br>
</div>
    <br><br><br><br><br>
  <?php
include_once('./Include/Footer.php');
  ?>