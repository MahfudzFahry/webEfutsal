<?php 
// koneksi database
include '../config.php';

// menangkap data yang di kirim dari form
$id_cust = $_POST['id_cust'];
$no_table = $_POST['no_table'];
$date = $_POST['Date'];
$time = $_POST['Time'];
$notes = $_POST['notes'];
$status = $_POST['status'];

// menginput data ke database
mysqli_query($koneksi,"insert into reserve values('', '$id_cust', '$no_table', $date','$time','$notes','$status')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>