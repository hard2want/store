<?php

session_start();

// 
$mysqli = new mysqli('cis282store.cvsq1txmkdrk.us-east-1.rds.amazonaws.com', 'beststore', 'Going2win', 'cis282store') or die(mysqli_error($mysqli));

date_default_timezone_set('America/Chicago');
$id = 0;
$update = false;
$category_id = 0;
$product_code = '';
$product_name = '';
$description = '';
$list_price = 0;
$discount_percent = 0;
$now = new DateTime();



if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM cis282store.products WHERE product_id=$id") or die($mysqli->error());
    
    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";
    
    header("location: ../delete_products_success.php");
}

/*
Upon 'Edit' buttton selection from the products.php page, 
a query is made to retrieve the current product's field values and assign them to variables
*/
if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM cis282store.products WHERE product_id=$id") or die($mysqli->error());
    if (count($result)==1){
        $row = $result->fetch_array();
        // NOTE: Data is coming from the database for the specific record 'product_id' and the field values are getting stored into variables
        $category_id = $row['category_id'];
        $product_code = $row['product_code'];
        $product_name = $row['product_name'];
        $description = $row['description'];
        $list_price = $row['list_price'];
        $discount_percent = $row['discount_percent'];
        $date_added = $row['date_added'];
    }
}
/*
Upon 'Update' buttton selection, retrieve the current product's field values and assign them to variables
*/

if (isset($_POST['update'])){
    $id = $_POST['product_id'];
    $category_id = $_POST['category_id'];
    $product_code = $_POST['product_code'];
    $product_name = $_POST['product_name'];
    $description = $_POST['description'];
    $list_price = $_POST['list_price'];
    $discount_percent = $_POST['discount_percent'];
    $date_added = $_POST['date_added'];
    
    $mysqli->query("UPDATE cis282store.products 
    
    SET category_id='$category_id', 
    product_code='$product_code',
    product_name='$product_name',
    description='$description',
    list_price='$list_price',    
    discount_percent='$discount_percent',
    date_added='$date_added'

    WHERE product_id=$id") or
            die($mysqli->error);

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";
    
    header("location: ../edit_products_success.php");
}


// Close Connection
mysqli_close($connect); 

?>