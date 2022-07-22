<?php 

include_once "config.php";

$connection = mysqli_connect(DB_HOST,DB_USER, DB_PASS, DB_NAME);

$query = "select * from account";

$result = mysqli_query($connection,$query);

echo "<pre>";
print_r($result);
echo "</pre>";