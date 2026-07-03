<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "food_delivery"
);

if(!$conn){
    die("Connection Failed");
}

//echo "Database Connected Successfully";

?>