<?php 
//session_start();
// error_reporting(0);
// echo "header called";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Alleviate Hunger</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- css file  -->
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <!-- <link rel="stylesheet" href="css/testfood.css"> -->
  <!-- bootstrap-cdn  -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- slider -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <!-- fontawesome-cdn  -->
  <script src="https://kit.fontawesome.com/61f1497cf8.js" crossorigin="anonymous"></script> 
</head>
<body>
  <!-- header -->
  <header>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-12 col-12">
        </div>
        <div class="col-md-4 col-12 text-center">
          <h2 class="my-md-3 site-title primary-color text-white">Alleviate Hunger</h2>
        </div>
        <div class="col-md-4 col-12 text-right">
          <p class="my-md-4 header-links">
            <?php
            // echo $_SESSION['user'];
            if(isset($_SESSION['user'])){
                if(isset($_SESSION['role'])){
                    if($_SESSION['role']==1){
                      // echo $_SESSION['user'];
                      // echo $_SESSION['role'];
                        echo '<a href="dashboard.php" class="px-2">Admin</a>';
                        
                    } 
                    else
                    {
                      echo '<b><span style="font-size:  15px; color:white;">Hello '.$_SESSION['user'].' !!</span></b>';
                    }
                }
                echo '<a href="profile.php" class="px-2">Profile</a>';
                echo '<a href="logout.php" class="px-1">Log Out</a>';
            }else{

                echo '<a href="signin.html" class="px-2">Sign In</a>
                <a href="register.php" class="px-1">Create an Account</a>';
            }            
            ?>
          </p>
        </div>
      </div>
    </div>
    <div class="container-fluid p-0">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php"><img src="./images/icon1.jpg"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                DONATE
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="donatefood.php">FOOD</a>
                <a class="dropdown-item" href="donatemoneyinitial.php">MONEY</a>

              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="requestforfood.php">REQUEST FOR FOOD</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">HUNGER SPOT</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="volunteer.php">VOLUNTEER</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">ABOUT US</a>
            </li>

          </ul>
        </div>
      </nav>
    </div> 
  </header>
  <!-- main  -->
 
    


