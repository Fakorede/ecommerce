<?php
include("includes/db.php");
include("functions/functions.php");
?>

<!DOCTYPE html>
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
              <a href="customer/my_account.php">My Account</a>
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
            <li><a href="customer/my_account.php">My Account</a></li>
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


  <!-- SLIDER SECTION -->
  <section id="slider">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
              <?php
                $get_slides = "SELECT * FROM slides LIMIT 0, 1";
                $run_slides = mysqli_query($con, $get_slides);
                while($row_slides=mysqli_fetch_array($run_slides)) {
                  $slide_name = $row_slides['slide_name'];
                  $slide_image = $row_slides['slide_image'];
                  echo "
                  <div class='item active'>
                  <img src='admin/slides_images/$slide_image' alt='$slide_image'>
                  </div>                  
                  ";
                }
              ?>

              <?php
                $get_slides = "SELECT * FROM slides LIMIT 1, 3";
                $run_slides = mysqli_query($con, $get_slides);
                while($row_slides=mysqli_fetch_array($run_slides)) {
                  $slide_name = $row_slides['slide_name'];
                  $slide_image = $row_slides['slide_image'];
                  echo "
                  <div class='item'>
                  <img src='admin/slides_images/$slide_image' alt='$slide_image'>
                  </div>                  
                  ";
                }
              ?>

            </div>
            <a href="#myCarousel" class="left carousel-control" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a href="#myCarousel" class="right carousel-control" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- SECTION END -->

  <!-- SECTION -->
  <section id="advantages">
    <div class="container">
      <div class="row">
        <div class="same-height-row">
          <div class="col-sm-4">
            <div class="box same-height">
              <div class="icon">
                <i class="fa fa-heart"></i>
              </div>
              <h3><a href="#"> WE LOVE OUR CUSTOMERS</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, delectus!</p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="box same-height">
              <div class="icon">
                <i class="fa fa-tags"></i>
              </div>
              <h3><a href="#"> BEST PRICES</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, delectus! Lorem ipsum dolor. </p>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="box same-height">
              <div class="icon">
                <i class="fa fa-thumbs-up"></i>
              </div>
              <h3><a href="#"> 100% SATISFACTION GUARANTEED</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, delectus!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- SECTION END -->

  <!-- SECTION -->
  <section id="hot">
    <div class="box">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>Latest This Week</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- SECTION ENDS -->

  <!-- CONTENT SECTION -->
  <section id="content">
    <div class="container">
      <div class="row">
      <?php
      getProduct();
      ?>
      </div><!-- row -->
    </div><!-- container -->
  </section>
  <!-- SECTION ENDS -->

  <!-- FOOTER SECTION -->
  <?php
    include("includes/footer.php");
  ?>
  <!-- SECTION ENDS -->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
