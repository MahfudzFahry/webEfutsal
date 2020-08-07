<?php 
// koneksi database
include '../config.php';
 
// menangkap data yang di kirim dari form
$idCust = $_POST['idCust'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$jk = $_POST['jk'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
 
// update data ke database
mysqli_query($koneksi,"update customer set first_name='$first_name', last_name='$last_name', jk='$jk', email='$email', username='$username', password='$password' where id='$idCust'");
 
// mengalihkan halaman kembali ke index.php
header("location:data_customer.php");
 
?>