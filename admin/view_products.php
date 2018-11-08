<?php

    if(!isset($_SESSION['admin_email'])){

    echo '<script>window.open("login.php", "_self")</script>';

    } else {

?>


<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i>Dashboard / View Products
            </li>
        </ol>
    </div>
</div>

<div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-money fa-fw"></i>View Products
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Product ID</th>
                                    <th>Product Title</th>
                                    <th>Product Image</th>
                                    <th>Product Price</th>
                                    <th>Product Sold</th>
                                    <th>Product Keywords</th>
                                    <th>Product Date</th>
                                    <th>Product Delete</th>
                                    <th>Product Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $i = 0;

                                    $get_products = "SELECT * FROM products";
                                    $run_products = mysqli_query($con, $get_products);
                                    $row_products = mysqli_fetch_array($run_products);

                                    while($row_products=mysqli_fetch_array($run_products)) {

                                        $product_id = $row_products['product_id'];
                                        $product_title = $row_products['product_title'];
                                        $product_image = $row_products['product_img1'];
                                        $product_price = $row_products['product_price'];
                                        $product_keywords = $row_products['product_keywords'];
                                        $product_date = $row_products['date'];

                                        $i++;
                                    
                                ?>

                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $product_title; ?></td>
                                    <td><img src="products_images/<?php echo $product_image; ?>" width="60" height="60"></td>\
                                    <td>$<?php echo $product_price; ?></td>
                                    <td>
                                    <?php
                                        $get_sold = "SELECT * FROM pending_orders WHERE product_id='$product_id'";
                                        $run_sold = mysqli_query($con, $get_sold);
                                        $count = mysqli_num_rows($run_sold);

                                        echo $count;
                                    ?>
                                    </td>
                                    <td><?php echo $product_keywords; ?></td>
                                    <td><?php echo $product_date; ?></td>
                                    <td>
                                        <a href="index.php?delete_product=<?php echo $product_id; ?>">
                                            <i class="fa fa-trash-o"></i>Delete
                                        </a>
                                    </td>
                                    <td>
                                        <a href="index.php?edit_product=<?php echo $product_id; ?>">
                                            <i class="fa fa-pencil"></i>Edit
                                        </a>
                                    </td>
                                </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php } ?>