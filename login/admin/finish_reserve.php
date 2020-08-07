<?php 
// koneksi database
include '../../config.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"update bookinglapangan, tablelapangan set bookinglapangan.status='Completed', tablelapangan.status='Available' where bookinglapangan.nomorLapangan=tablelapangan.id AND bookinglapangan.id='$id'");

 
// mengalihkan halaman kembali ke index.php
header("location:data_reserve.php");
 
?>