<?php 	
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'config.php';
 
// menangkap data yang dikirim dari form
$usernameCust = $_POST['usernameCust'];
$passwordCust = $_POST['passwordCust'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$dataCust = mysqli_query($koneksi,"select * from customer where username='$username' and password='$password'"); 


if($cekCust > 0){
	$_SESSION['usernameCust'] = $username;
	$_SESSION['statusCust'] = "login";
	header("location:customer/index.php");
}else{
	header("location:login_admin.php?pesan=gagal");
}
?>