<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/styles.css">
       
        <?php
            require('includes/config.php');
            require('models/products_model.php');
        ?>

	    <title>CIS 282 Store | Product List</title>
    </head>

    <body>

        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-1"></div>
                <div class="col-1">Category</div>
                <div class="col-1">Product Code</div>
                <div class="col-2">Product Name</div>
                <div class="col-5">Description</div>
                <div class="col-1">List Price</div>
                <div class="col-1">Discount %</div>
                <!-- <div class="col-1">Date Added</div> -->
            </div> <!-- close class row -->
        </div> <!-- close class container -->
        <?php // var_dump($produtList); ?>
        <div class="container-fluid">
            <div class="row text-center">        
                <?php foreach($productList as $row) { ?>	
                    <div class="col-1"><?php echo $row['product_id']; ?></div>
                    <div class="col-1"><?php echo $row['category_id']; ?></div>
                    <div class="col-1"><?php echo $row['product_code']; ?></div>
                    <div class="col-2"><?php echo $row['product_name']; ?></div>
                    <div class="col-5 text-left"><?php echo $row['description']; ?></div>
                    <div class="col-1"><?php echo $row['list_price']; ?></div>
                    <div class="col-1"><?php echo $row['discount_percent']; ?></div>
                    <!-- <div class="col-1"><?php echo $row['date_added']; ?></div> -->
                <?php } ?>
            </div> <!-- close class row -->
        </div> <!-- close class container -->



	
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>


</html>