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
            <li><a href="index.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="customer/my_account.php">My Account</a></li>
            <li class="active"><a href="cart.php">Shopping Cart</a></li>
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
            <li>Cart</li>
          </ul>
        </div>
        <div class="col-md-9" id="cart">
          <div class="box">
            <form action="cart.php" method="post" enctype="multipart/form-data">
              <h1>Shopping Cart</h1>
              <p class="text-muted"> You currently have 3 item(s) in your cart.</p>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th colspan="2">Products</th>
                      <th>Quantity</th>
                      <th>Unit Price</th>
                      <th>Size</th>
                      <th colspan="1">Delete</th>
                      <th colspan="2">Sub Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><img src="admin/products_images/product.jpg"></td>
                      <td><a href="#">Black Marvel Kids Polo T-Shirt</a></td>
                      <td>2</td>
                      <td>$50</td>
                      <td>Large</td>
                      <td><input type="checkbox" name="remove[]"></td>
                      <td>$100</td>
                    </tr>
                    <tr>
                      <td><img src="admin/products_images/product.jpg"></td>
                      <td><a href="#">Black Marvel Kids Polo T-Shirt</a></td>
                      <td>2</td>
                      <td>$50</td>
                      <td>Large</td>
                      <td><input type="checkbox" name="remove[]"></td>
                      <td>$100</td>
                    </tr>
                    <tr>
                      <td><img src="admin/products_images/product.jpg"></td>
                      <td><a href="#">Black Marvel Kids Polo T-Shirt</a></td>
                      <td>2</td>
                      <td>$50</td>
                      <td>Large</td>
                      <td><input type="checkbox" name="remove[]"></td>
                      <td>$100</td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th colspan="5">Total</th>
                      <th colspan="2">$100.00</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class="box-footer">
                <div class="pull-left">
                  <a href="index.php" class="btn btn-default">
                    <i class="fa fa-chevron-left"></i> Continue Shopping
                  </a>
                </div>
                <div class="pull-right">
                  <button type="submit" name="update" value="Update Cart" class="btn btn-default">
                    <i class="fa fa-refresh"></i>Update Cart
                  </button>
                  <a href="checkout.php" class="btn btn-primary">
                    Proceed to checkout <i class="fa fa-chevron-right"></i>
                  </a>
                </div>
              </div>
            </form>
          </div>
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
        </div><!-- col-md-9 -->
        <div class="col-md-3">
          <div class="box" id="order-summary">
            <div class="box-header">
              <h3>Order Summary</h3>
            </div>
            <p class="text-muted">Shipping and additional costs are calculated based on the value you have entered</p>
            <div class="table-responsive">
              <table class="table">
                <tbody>
                  <tr>
                    <td>Order Subtotal</td>
                    <th>$20.00</th>
                  </tr>
                  <tr>
                    <td>Shipping and handling</td>
                    <th>$0.00</th>
                  </tr>
                  <tr class="total">
                    <td>Tax</td>
                    <th>$0.00</th>
                  </tr>
                  <tr class="total">
                    <td>Total</td>
                    <th>$200.00</th>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- SECTION END -->


















  <!-- FOOTER SECTION -->
  <?php
    include("includes/footer.php");
  ?>
  <!-- SECTION ENDS -->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
