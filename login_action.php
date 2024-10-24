<?php
session_start();	
include "koneksi.php";


$username = mysqli_real_escape_string($kon,$_POST['username']);
$password = mysqli_real_escape_string($kon,sha1($_POST['password']));

$sql = "select * from tbl_users where username='$username' and password='$password'";
$hasil = mysqli_query ($kon,$sql);
$jumlah = mysqli_num_rows($hasil);


if($jumlah > 0){
 
	$data = mysqli_fetch_assoc($hasil);

	$_SESSION['id'] = $data_user['id'];
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	setcookie('serkomlsp', 'asjbmbnsugaldsks22', time() + 24 * 3600);

	header("Location:admin/dashboard.php");

}else{
	header("location:index.php?pesan=gagal");
}
?>
