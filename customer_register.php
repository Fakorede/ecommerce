<?php
include("includes/db.php");
include("functions/functions.php");
?>

<DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ecommerce Project</title>
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100">
  <link rel="stylesheet" href="styles/bootstrap.min.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles/style.css">

</head>
<body>

  <!-- TOP SECTION -->
  <div id="top">
    <div class="container">
      <div class="row">
        <div class="col-md-6 offer">
          <a href="#" class="btn btn-success btn-sm">
            Welcome, Guest
          </a>
          <a href="#">
            Shopping Cart - Total Items: 2, Total Price: $150
          </a>
        </div>
        <div class="col-md-6">
          <ul class="menu">
            <li>
              <a href="customer_register.php">Register</a>
            </li>
            <li>
              <a href="checkout.php">My Account</a>
            </li>
            <li>
              <a href="cart.php">Go to Cart</a>
            </li>
            <li>
              <a href="checkout.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- SECTION END -->


  <!-- HEADER SECTION -->
  <div class="navbar navbar-default" id="navbar">
    <div class="container">
      <div class="navbar-header">
        <a href="index.php" class="navbar-brand home">
          <p>CARE's</p>
          <!--
          <img src="images/logo.png" alt="logo" class="hidden-xs"><!--d-sm-none-->
          <!--
          <img src="images/logo-small.png" alt="logo" class="visible-xs"><!--d-sm-block-->
        </a>
        <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
          <span class="sr-only">Toggle Navigation</span>
          <i class="fa fa-align-justify"></i>
        </button>
        <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
          <span class="sr-only">Toggle Search</span>
          <i class="fa fa-search"></i>
        </button>
      </div>
      <div class="navbar-collapse collapse" id="navigation">
        <div class="padding-nav">
          <ul class="nav navbar-nav navbar-left">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="checkout.php">My Account</a></li>
            <li><a href="cart.php">Shopping Cart</a></li>
            <li><a href="contact.php">Contact Us</a></li>
          </ul>
        </div>
        <a href="cart.php" class="btn btn-primary navbar-btn right">
          <i class="fa fa-shopping-cart"></i>
          <span>4 items in cart</span>
        </a>
        <div class="navbar-collapse collapse right">
          <button class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
            <span class="sr-only">Toggle Search</span>
            <i class="fa fa-search"></i>
          </button>
        </div>
        <div class="collapse clearfix" id="search">
          <form action="results.php" method="get" class="navbar-form">
            <div class="input-group">
              <input type="text" placeholder="Search" name="user_query" class="form-control" required>
              <span class="input-group-btn">
                <button type="submit" value="Search" name="search" class="btn btn-primary">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- SECTION END -->

  <!-- SECTION -->
  <section id="content">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li>Register</li>
          </ul>
        </div>
        <div class="col-md-3">
          <?php include("includes/sidebar.php"); ?>
        </div>
        <div class="col-md-9">
          <div class="box">
            <div class="box-header">
              <center>
                <h2>Register</h2>
              </center>
            </div>
            <form action="customer_register.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label>Name</label>
                <input type="text" name="c_name" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="c_email" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="c_pass" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Country</label>
                <input type="text" name="c_country" class="form-control" required>
              </div>
              <div class="form-group">
                <label>City</label>
                <input type="text" name="c_city" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Contact</label>
                <input type="text" name="c_contact" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Address</label>
                <input type="text" name="c_address" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Image</label>
                <input type="file" name="c_image" class="form-control" required>
              </div>
              <div class="text-center">
                <button type="submit" name="register" class="btn btn-primary">
                  <i class="fa fa-user-md"></i>Register
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- SECTION ENDS -->

  <!-- SECTION STARTS -->
  <?php
    include("includes/footer.php");
  ?>
  <!-- SECTION ENDS -->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
