<?php  
	
	$sname = $_POST['subname'];
	$sprice = $_POST['subprice'];

	include "dbconnect.php";

	$sql = "INSERT INTO `sub`(`sub_name`, `sub_price`) VALUES ('$sname', '$sprice')";

	$result = mysqli_query($db,$sql);

	if ($result) {
		mysqli_commit($db);
		print '<script>alert("Successfully adding new subject!");</script>';
		print '<script>window.location.assign("index.html");</script>';
	}else{		
		mysqli_rollback($db);
		print '<script>alert("Error! There some issue during adding new subject");</script>';
		print '<script>window.location.assign("admin-login.html");</script>';
	}
	
?>