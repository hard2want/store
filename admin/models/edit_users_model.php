<?php

session_start();

// 
$mysqli = new mysqli('cis282final.cvsq1txmkdrk.us-east-1.rds.amazonaws.com', 'dbest1', 'Going2win', 'cis282final') or die(mysqli_error($mysqli));

$update = false;
$user_id = 0;
$access_level_id = 1;
$cohort_id = 0;
$first_name = '';
$last_name = '';
$email = '';
$password = '';
$phone = '';



if (isset($_GET['delete'])){
    $user_id = $_GET['delete'];
    $mysqli->query("DELETE FROM cis282final.users WHERE user_id=$user_id") or die($mysqli->error());
    
    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";
    
    header("location: ../delete_users_success.php");
}

/*
Upon 'Edit' buttton selection from the users.php page, 
a query is made to retrieve the current user's field values and assign them to variables
*/
if (isset($_GET['edit'])){
    $user_id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM cis282final.users WHERE user_id=$user_id") or die($mysqli->error());
    if (count($result)==1){
        $row = $result->fetch_array();
        // NOTE: Data is coming from the database for the specific record 'user_id' and the field values are getting stored into variables
        $user_id = $row['user_id'];
        $access_level_id = $row['access_level_id'];
        $cohort_id = $row['cohort_id'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $email = $row['email'];
        $password = $row['password'];
        $phone = $row['phone'];
    }
}
/*
Upon 'Update' buttton selection, retrieve the current user's field values and assign them to variables
*/

if (isset($_POST['update'])){
    $user_id = $_POST['user_id'];
    $access_level_id = $_POST['access_level_id'];
    $cohort_id = $_POST['cohort_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    
    $mysqli->query("UPDATE cis282final.users 
    
    SET user_id='$user_id', 
    access_level_id='$access_level_id',
    cohort_id='$cohort_id',
    first_name='$first_name',
    last_name='$last_name',    
    email='$email',
    password='$password',
    phone='$phone'

    WHERE user_id=$user_id") or
            die($mysqli->error);

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";
    
    header("location: ../edit_users_success.php");
}


// Close Connection
mysqli_close($connect); 

?>