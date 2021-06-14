<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "feedback";

$connection = mysqli_connect($server, $username, $password, $database);
if (!$connection){

    die("Error". mysqli_connect_error());
}

?>