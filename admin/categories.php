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
            require('models/categories_model.php');
        ?>

	    <title>CIS 282 Store | Category List</title>
    </head>

    <body>

        <div class="container main-title">
            <div class="row">
                <div class="col">
                    <h2>Category List</h2>
                    <a href="add_categories.php" class="btn btn-primary">Add Category</a>
                </div> <!-- close class col -->
            </div> <!-- close class row -->
            <p><a href="index.html">Back to Store Admin Page</a></p>
        </div> <!-- close class container main-title -->

        <div class="container">
            <div class="row text-center">
                <div class="col-1"></div>
                <div class="col-11 text-left">Category</div>
            </div> <!-- close class row -->
        </div> <!-- close class container -->

        <?php // var_dump($categoryList); ?>
        <?php foreach($categoryList as $row) { ?>	
            <div class="container">
                <div class="row text-center">        
                    <div class="col-1"><?php echo $row['category_id']; ?></div>
                    <div class="col-11 text-left"><a href="edit_categories.php?<?php echo $row['category_id']; ?>"><?php echo $row['category_name']; ?></a></div>
                        <div class="col-12">
                            <a href="edit_categories.php?edit=<?php echo $row['category_id']; ?>" class="btn btn-info">Edit</a>
                            <a href="models/edit_categories_model.php?delete=<?php echo $row['category_id']; ?>" class="btn btn-danger">Delete</a>
                        </div> <!-- close class col-12 -->
                </div> <!-- close class row -->
            </div> <!-- close class container -->
        <?php } ?>


	
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>


</html>