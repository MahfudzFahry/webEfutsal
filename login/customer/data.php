<?php 
	include "../config.php";

	$departid = $_POST['depart'];   // department id

	$sql = "SELECT id,no_table FROM tables WHERE no_type=".$departid;

	$result = mysqli_query($koneksi,$sql);

	$users_arr = array();

	while( $row = mysqli_fetch_array($result) ){
	    $userid = $row['id'];
	    $name = $row['no_table'];

	    $users_arr[] = array("id" => $userid, "name" => $name);
	}

	// encoding array to json format
	echo json_encode($users_arr);

 ?>