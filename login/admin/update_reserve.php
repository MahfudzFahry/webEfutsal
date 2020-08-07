<?php 
// koneksi database
include '../../config.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$field = $_POST['field'];
$date = $_POST['date'];
$starttime = $_POST['starttime'];
$endtime = $_POST['endtime'];
$status = $_POST['status'];
 
// update data ke database
mysqli_query($koneksi,"update bookinglapangan set namaCustomer='$name', telephone='$phone', nomorLapangan='$field', tanggal='$date' , jam_mulai='$starttime', jam_selesai='$endtime', status='$status' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:data_reserve.php");
 
?>