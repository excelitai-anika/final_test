<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname ="cmsp";
$conn = new mysqli($servername, $username, $password,$dbname);
if(!$conn){
    die("error");
}
?>