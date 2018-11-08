<?php

    if(!isset($_SESSION['admin_email'])){

        echo "<script>window.open('login.php','_self')</script>";

    }else {

?>

<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li>
            <i class = "fa fa-dashboard"></i>Dashboard / Insert products Category
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                <i class="fa fa-money fa-fw"></i>Insert Product Category
                </h3>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" action="" method="post">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Product Category Title</label>
                        <div class="col-md-6">
                            <input type="text" name="product_category_title" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Product Category Description</label>
                        <div class="col-md-6">
                            <textarea type="text" name="product_category_description" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-6">
                            <input type="submit" name="submit" value="Submit" class="btn btn-primary form-control">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php

if(isset($_POST['submit'])) {

    $product_category_title = $_POST['product_category_title'];
    $product_category_description = $_POST['product_category_description'];
    $insert_product_category = "INSERT INTO product_categories (product_category_title, product_category_description) VALUES
                                ('$product_category_title', '$product_category_description')";

    $run_product_category = mysqli_query($con, $insert_product_category);

    if($run_product_category) {
        echo "<script>alert('New Product Category has been inserted successfully!')</script>";
        echo "<script>window.open('index.php?view_product_categories', 'self')</script>";
    }

}

?>

<?php } ?> 