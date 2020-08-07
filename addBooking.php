<?php 
// koneksi database
include '../config.php';

// menangkap data yang di kirim dari form
$name = $_POST['name'];
$phone = $_POST['phone'];
$field = $_POST['field'];
$bookingDate = $_POST['bookingDate'];
$startTime = $_POST['startTime'];
$endTime = $_POST['endTime'];
$status = 'Active';


// menginput data ke database
mysqli_query($koneksi,"insert into bookinglapangan values('','$name','$field','$bookingDate','$startTime','$endTime,'$phone','$status')");

// mengalihkan halaman kembali ke index.php
header("location:../contact.php");

?>