<?php
//untuk menjadikan file php menjadi format JSON
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

//buat koneksi
$host="localhost";
$user="root";
$pass="";
$db="pengurus";

$con=mysqli_connect($host,$user,$pass,$db);

?>