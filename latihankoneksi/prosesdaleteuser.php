<?php 
require_once "koneksi.php";

$id = $_get['id'];

$sql = "DELETE FROM tb_users WHERE id_user='$id'";

if ($conn->query($sql)===TRUE){
	echo "<script>alert('data berhasil di hapus')</script>";
	echo "<script>window.location.assign('frominfutuser.php')</script>";
}else{
	echo "<script>alert('data gagal di hapus $conn->error')</script>";
}
?>