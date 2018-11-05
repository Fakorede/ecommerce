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
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="shop.php">Shop</a></li>
            <li><a href="checkout.php">My Account</a></li>
            <li><a href="checkout.php">Shopping Cart</a></li>
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
            <li>Shop</li>
          </ul>
        </div>
        <div class="col-md-3">
          <?php include("includes/sidebar.php"); ?>
        </div>
        <div class="col-md-9">
          <div class="row" id="productMain">
            <div class="col-sm-6">
              <div id="mainImage">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="item active">
                      <center>
                        <img src="admin/products_images/product.jpg" class="img-responsive">
                      </center>
                    </div>
                    <div class="item">
                      <center>
                        <img src="admin/products_images/product2.jpg" class="img-responsive">
                      </center>
                    </div>
                    <div class="item">
                      <center>
                        <img src="admin/products_images/product3.jpg" class="img-responsive">
                      </center>
                    </div>
                  </div>
                  <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                  </a>
                  <a href="#myCarousel" class="right carousel-control" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-next"></span>
                  <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div> <!-- col-sm-6 -->
            <div class="col-sm-6">
              <div class="box">
                <h1 class="text-center">Black Marvel Kids Polo T-Shirt</h1>
                <form class="form-horizontal" action="details.php" method="post">
                  <div class="form-group">
                    <label class="col-md-5 control-label">Product Quantity</label>
                    <div class="col-md-7">
                      <select class="form-control" name="product_qty">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-5 control-label">Product Size</label>
                    <div class="col-md-7">
                      <select class="form-control" name="product_size">
                        <option>Select a Size</option>
                        <option>Small</option>
                        <option>Medium</option>
                        <option>Large</option>
                      </select>
                    </div>
                  </div>
                  <p class="price">$50</p>
                  <p class="text-center buttons">
                    <button type="submit" class="btn btn-primary">
                      <i class="fa fa-shopping-cart"></i>Add to Cart
                    </button>
                  </p>
                </form>
              </div><!-- box -->
              <div class="row" id="thumbs">
                <div class="col-xs-4">
                  <a href="#" class="thumbs">
                    <img src="admin/products_images/product.jpg" class="img-responsive">
                  </a>
                </div>
                <div class="col-xs-4">
                  <a href="#" class="thumbs">
                    <img src="admin/products_images/product2.jpg" class="img-responsive">
                  </a>
                </div>
                <div class="col-xs-4">
                  <a href="#" class="thumbs">
                    <img src="admin/products_images/product3.jpg" class="img-responsive">
                  </a>
                </div>
              </div>
            </div><!-- .col-sm-6 -->
          </div><!-- .row -->
          <div class="box" id="details">
            <p>
              <h4>Product details</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
               dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
               Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </p>
            <h4>Size & Fit</h4>
            <ul>
              <li>Small</li>
              <li>Medium</li>
              <li>Large</li>
            </ul>
            </p>
            <hr>
          </div><!-- .box -->
          <div id="row same-height-row">
            <div class="col-md-3 col-sm-6">
              <div class="box same-height headline">
                <h3 class="text-center">You will also like these Products</h3>
              </div>
            </div>
            <div class="center-responsive col-md-3 col-sm-6">
              <div class="product same-height">
                <a href="details.php">
                  <img src="admin/products_images/product.jpg" class="img-responsive">
                </a>
                <div class="text">
                  <h3><a href="details.php">Black Marvel Kids Polo T-Shirt</a></h3>
                  <p class="price">$50</p>
                </div>
              </div>
            </div>
            <div class="center-responsive col-md-3 col-sm-6">
              <div class="product same-height">
                <a href="details.php">
                  <img src="admin/products_images/product.jpg" class="img-responsive">
                </a>
                <div class="text">
                  <h3><a href="details.php">Black Marvel Kids Polo T-Shirt</a></h3>
                  <p class="price">$50</p>
                </div>
              </div>
            </div>
            <div class="center-responsive col-md-3 col-sm-6">
              <div class="product same-height">
                <a href="details.php">
                  <img src="admin/products_images/product.jpg" class="img-responsive">
                </a>
                <div class="text">
                  <h3><a href="details.php">Black Marvel Kids Polo T-Shirt</a></h3>
                  <p class="price">$50</p>
                </div>
              </div>
            </div>
          </div>
        </div><!-- .col-md-9 -->
      </div>
    </div>
  </section>







  <!-- FOOTER SECTION -->
  <?php
    include("includes/footer.php");
  ?>
  <!-- SECTION ENDS -->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
