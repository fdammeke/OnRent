<?php
session_start(); /* Session */
$con=mysqli_connect($_ENV["DATABASE_SERVER"],$_ENV["DATABASE_USER"],$_ENV["DATABASE_PASSWORD"],$_ENV["DATABASE_NAME"]); /*Database Connection*/
?>
