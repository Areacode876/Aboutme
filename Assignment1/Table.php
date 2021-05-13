

<?php

$dbc = mysqli_query('localhost','root','','foods'); 
// sql to create table
$sql = "CREATE TABLE food (
food_ID INT NOT NULL AUTO_INCREMENT, 
name VARCHAR(64), 
price  DOUBLE,
description BLOB,
PRIMARY KEY(food_ID)
)";

$result = mysqli_query($dbc, $sql) or die ("Bad Create: $sql");
?>