
  <section id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <h4><b>Pages</b></h4>
          <ul>
            <li><a href="cart.php">Shopping Cart</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="checkout.php">My Account</a></li>
          </ul>
          <hr>
          <h4><b>User Section</b></h4>
          <ul>
            <li><a href="checkout.php">Login</a></li>
            <li><a href="customer_register.php">Register</a></li>
          </ul>
          <hr class="hidden-md">
        </div>
        <div class="col-md-3 col-sm-6">
          <h4><b>Top Products Categories</b></h4>
          <ul>
            <?php

            include("includes/db.php");

              $get_p_cats = "SELECT * FROM product_categories";
              $run_p_cats = mysqli_query($con,$get_p_cats);
              while($row_p_cats = mysqli_fetch_array($run_p_cats)){
                $p_cat_id = $row_p_cats['p_cat_id'];
                $p_cat_title = $row_p_cats['p_cat_title'];
                echo "<li><a href='shop.php?p_cat=$p_cat_id'>$p_cat_title</a></li>";
              }

            ?>
          </ul>
          <hr class="hidden-md">
        </div>
        <div class="col-md-3 col-sm-6">
          <h4><b>Where to find us</b></h4>
          <p>
            Ace Towers,
            <br>Atlantic City,
            <br>Lagos Island.
            <br>08188469918
            <br>hr@caresline.com<br>
          </p>
          <a href="contact.php">Go to Contact page</a>
          <hr class="hidden-md">
        </div>
        <div class="col-md-3 col-sm-6">
          <h4><b>Get our Latest updates</b><h4>
          <p class="text-muted"> Lorem ipsum dolor sit amet, consectetur adipisicing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <form action="index.html" method="post">
            <div class="input-group">
              <input type="text" name="email" class="form-control">
              <span class="input-group-btn">
                <input type="submit" name="submit" value="subscribe" class="btn btn-default">
              </span>
            </div>
          </form>
          <hr>
          <h4>Stay in touch</h4>
          <p class="social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-envelope"></i></a>
          </p>
        </div>
      </div>
    </div>
  </section>

  <footer id="copyright">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p class="pull-left">
            &copy; 2018 <span class="brand-primary">CARE's</span> | All Rights Reserved
          </p>
        </div>
        <div class="col-md-6">
          <p class="pull-right">
            Designed with <i class="fa fa-heart text-danger"></i> by Polymath_dev
          </p>
        </div>
      </div>
    </div>
  </footer>
