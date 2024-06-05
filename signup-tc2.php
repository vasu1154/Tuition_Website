<?php  
	$id = $_GET['id'];
	$sub_name = $_POST['tcr_sub_name'];

	include "dbconnect.php";

	$sql = "INSERT INTO `temp_teach`(`sub_name`, `tmp_tcr_id`) VALUES ('$sub_name', '$id')";

	$result = mysqli_query($db,$sql);

	if ($result ) {
		mysqli_commit($db);
		print '<script>alert("One Subject has been registered");</script>';
		print '<script>window.location.assign("signup-teacher2.php?id='.$id.'");</script>';
		}
		else{
		
			mysqli_rollback($db);
			print '<script>alert("Error! There some issue during registration");</script>';
			print '<script>window.location.assign("signup-teacher2.php?id='.$id.'");</script>';
			}

	
?>