<?php
//need to update with new database
$localhost = "173.212.235.205";
$username = "jimmycodefactory_final_project";
$password = "group9project";
$dbname = "jimmycodefactory_FSWD_group9";

// create connection
$connect = new  mysqli($localhost, $username, $password, $dbname);

/* check connection
if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
} else {
  echo "Successfully Connected";
}
*/
?>