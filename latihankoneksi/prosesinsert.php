<?php 
require_once "koneksi.php";
$nama = $_POST['namauser'];
$email = $_POST['emailuser'];
$password = md5($_POST['passworduser']);

$sql = "INSERT INTO tb_users VALUES(null,'$nama','$email','password')";

if ($conn->query($sql)===TRUE){
	echo "<script>alert('data berhasil di simpan')</script>";
	echo "<script>window.location.assign('frominfutuser.php')</script>";
}else{
	echo "<script>alert('data gagal di simpan $conn->error')</script>";
	echo "<script>window.location.assign('frominfutuser.php')</script>";
}
?>