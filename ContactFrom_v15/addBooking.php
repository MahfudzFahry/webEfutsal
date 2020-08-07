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
$status =  $_POST['status'];


// menginput data ke database
mysqli_query($koneksi,"insert into bookinglapangan values('','$name','$field','$bookingDate','$startTime','$endTime','$phone','$status')");
mysqli_query($koneksi,"update tablelapangan set status='Active' where id='$field'");

// mengalihkan halaman kembali ke index.php
header("location:../index.php");

?>