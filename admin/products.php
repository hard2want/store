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

        <?php // var_dump($produtList); ?>
        <?php foreach($productList as $row) { ?>	
            <?php echo $row['product_id']; ?>
            <?php echo $row['category_id']; ?>
            <?php echo $row['product_code']; ?>
            <?php echo $row['product_name']; ?>
            <?php echo $row['description']; ?>
            <?php echo $row['list_price']; ?>
            <?php echo $row['discount_percent']; ?>
            <?php echo $row['date_added']; ?>
        <?php } ?>




	
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>


</html>