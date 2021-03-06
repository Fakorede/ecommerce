<?php

$db = mysqli_connect("localhost", "root", "", "ecommerce");

function getProduct() {

    global $db;

    $get_products = "SELECT * FROM products ORDER BY 1 DESC LIMIT 0, 8";
    $run_products = mysqli_query($db, $get_products);

    while($row_products = mysqli_fetch_array($run_products)) {

        $pro_id = $row_products['product_id'];
        $pro_title = $row_products['product_title'];
        $pro_price = $row_products['product_price'];
        $pro_img1 = $row_products['product_img1'];

        echo "
        
        <div class='col-md-4 col-sm-6 single'>
            <div class='product'>
                <a href='details.php?pro_id=$pro_id'>
                    <img src='admin/products_images/$pro_img1' class='img-responsive'>
                </a>
                <div class='text'>
                    <h3><a href='details.php?pro_id=$pro_id'>$pro_title</a></h3>
                    <p class='price'>$ $pro_price</p>
                    <p class='buttons'>
                        <a href='details.php?pro_id=$pro_id' class='btn btn-default'>View details</a>
                        <a href='details.php?pro_id=$pro_id' class='btn btn-primary'>
                            <i class='fa fa-shopping-cart'></i>Add to Cart
                        </a>
                    </p>
                </div>
            </div>
        </div>
        
        ";
    }

}

// function to get products categories
function getPCategories() {

    global $db;

    $get_p_cats = "SELECT * FROM product_categories";
    $run_p_cats = mysqli_query($db, $get_p_cats);

    while($row_p_cats = mysqli_fetch_array($run_p_cats)) {

        $p_cat_id = $row_p_cats['p_cat_id'];
        $p_cat_title = $row_p_cats['p_cat_title'];

        echo "<li><a href='shop.php?p_cat=$p_cat_id'>$p_cat_title</a></li>";
        
    }

}

function getCategories() {
    
    global $db;

    $get_cats = "SELECT * FROM categories";
    $run_cats = mysqli_query($db, $get_cats);
    while($row_cats = mysqli_fetch_array($run_cats)) {

    $cat_id = $row_cats['cat_id'];
    $cat_title = $row_cats['cat_title'];

    echo "<li><a href='shop.php?cat=$cat_id'>$cat_title</a></li>";

    }

}

?>