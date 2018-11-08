<?php

  include("includes/db.php");

  if(!isset($_SESSION['admin_email'])){
    echo '<script>window.open("login.php", "_self")</script>';
  }else {

?>

<?php

  $admin_session = $_SESSION['admin_email'];
  $get_admin = "SELECT * FROM admins WHERE admin_email='$admin_session'";
  $log_admin = mysqli_query($con, $get_admin);
  $row_admin = mysqli_fetch_array($log_admin);
  $admin_id = $row_admin['admin_id'];
  $admin_name = $row_admin['admin_name'];
  $admin_email = $row_admin['admin_email'];
  $admin_image = $row_admin['admin_image'];
  $admin_city = $row_admin['admin_city'];
  $admin_job = $row_admin['admin_job'];
  $admin_contact = $row_admin['admin_contact'];
  $admin_about = $row_admin['admin_about'];

  $get_products = "SELECT * FROM products";
  $run_products = mysqli_query($con, $get_products);
  $count_products = mysqli_num_rows($run_products);

  $get_customers = "SELECT * FROM customers";
  $run_customers = mysqli_query($con, $get_customers);
  $count_customers = mysqli_num_rows($run_customers);

  $get_p_categories = "SELECT * FROM product_categories";
  $run_p_categories = mysqli_query($con, $get_p_categories);
  $count_p_categories = mysqli_num_rows($run_p_categories);

  $get_pending_orders = "SELECT * FROM pending_orders";
  $run_pending_orders = mysqli_query($con, $get_pending_orders);
  $count_pending_orders = mysqli_num_rows($run_pending_orders);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">

</head>
<body>

  <div id="wrapper">
    <?php include("includes/sidebar.php"); ?>
    <div id="page-wrapper">
      <div class="container-fluid">
        <?php 
          if(isset($_GET['dashboard'])){
            include('dashboard.php');
          }
          if(isset($_GET['insert_product'])){
            include('insert_product.php');
          }
          if(isset($_GET['view_products'])){
            include('view_products.php');
          }
          if(isset($_GET['delete_product'])){
            include('delete_product.php');
          }
          if(isset($_GET['edit_product'])){
            include('edit_product.php');
          }
          if(isset($_GET['insert_product_categories'])){
            include('insert_product_categories.php');
          }
           if(isset($_GET['view_product_categories'])){
            include('view_product_categories.php');
          }
          if(isset($_GET['edit_product_category'])){
            include('edit_product_category.php');
          }
          if(isset($_GET['delete_product_category'])){
            include('delete_product_category.php');
          }
           if(isset($_GET['view_product'])){
            include('edit_product.php');
          }
          if(isset($_GET['insert_category'])){
            include("insert_category.php");
          }
          if(isset($_GET['view_categories'])){
            include("view_categories.php");
          }
          if(isset($_GET['delete_category'])){
            include("delete_category.php");
          }
          if(isset($_GET['edit_category'])){
            include("edit_category.php");
          }
          if(isset($_GET['insert_slide'])){
            include("insert_slide.php");  
          }
          if(isset($_GET['view_slides'])){
            include("view_slides.php");
          }
          if(isset($_GET['delete_slide'])){
            include("delete_slide.php");
          }
          if(isset($_GET['edit_slide'])){
            include("edit_slide.php");
          }
          if(isset($_GET['view_customers'])){
            include("view_customers.php");
          }
          if(isset($_GET['customer_delete'])){
            include("customer_delete.php");
          }
          if(isset($_GET['view_orders'])){
            include("view_orders.php");
          }
          if(isset($_GET['order_delete'])){
            include("order_delete.php");
          }
          if(isset($_GET['view_payments'])){
            include("view_payments.php");
          }
          if(isset($_GET['payment_delete'])){
            include("payment_delete.php");
          }
          if(isset($_GET['add_admin'])){
            include("add_admin.php");
          }
          if(isset($_GET['view_admins'])){
            include("view_admins.php");
          }
          if(isset($_GET['admin_delete'])){        
            include("admin_delete.php");      
          }
          if(isset($_GET['admin_profile'])){     
            include("admin_profile.php"); 
          }
        ?>
      </div>
    </div>
  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php
  }
?>