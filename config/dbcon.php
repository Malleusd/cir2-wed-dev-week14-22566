<?php
$host = "localhost";
$username ="root";
$password = "";
$dbname="blog-app";

$conn = new mysqli($host, $username, $password, $dbname);

if(!$conn){
    die("Connection".mysqli_error($conn));
}else{
    print"Connected successflly";
}