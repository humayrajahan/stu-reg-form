<?php

$servername = "localhost";
$username   = "root";
$password   = "";
$db_name    = "reg_form";

$con = mysqli_connect($servername, $username, $password, $db_name);

if($con === false)
{
    die("Connection failed! " . mysqli_connect_error());
}

?>