<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_toko_japar";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("koneksi gagal");
}


?>