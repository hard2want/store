<?php 
if (isset($_POST['submit'])){
    $search = mysqli_real_escape_string($connect, $_POST['search']);
    $query = "
    SELECT *
    FROM products
    WHERE
    product_name LIKE '%$search%'
    OR product_code LIKE '%$search%'
    OR list_price LIKE '%$search%'
    ";
    $searchResults = mysqli_query($connect, $query);
} // end if
 // note - expand your search via products p, categories c and then change the where to use c.category LIKE... p.product_name LIKE, etc.

?>