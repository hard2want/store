<?php
/* Database connection settings */
$dbhost = 'cis282store.cvsq1txmkdrk.us-east-1.rds.amazonaws.com'; // found via your RDS
$dbuser = 'beststore'; // your mySQL workbench user name
$dbpass = 'Going2win'; // password from mySQL workbench
$dbname = 'cis282store'; // your database name
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($mysqli->error);
?>
