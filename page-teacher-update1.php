<?php  
	$id = $_GET['id'];
	$name = $_POST['tcrname'];
	$sex = $_POST['tcrgender'];
	$category = $_POST['stcateogry'];
	$email = $_POST['tcremail'];
	$address = $_POST['tcraddress'];
	$phone = $_POST['tcrphone'];
	$sub=$_POST['stsub'];
	include "dbconnect.php";

	$sql = "UPDATE `teacher` SET `tcr_name`='$name',`tcr_sex`='$sex',`tcr_sub`='$sub',`tcr_address`='$address',`tcr_telnum`='$phone',`tcr_email`='$email',`tcr_cat`='$category' WHERE `tcr_id`='$id'";

	$result = mysqli_query($db,$sql);
	if ($result) {
		mysqli_commit($db);
		print '<script>alert("Your details sucessfully updated!");</script>';
		print '<script>window.location.assign("page-teacher-details.php?id='.$id.'");</script>';
		}
		else{
		
			mysqli_rollback($db);
			print '<script>alert("Error! There some issue during updating details");</script>';
			print '<script>window.location.assign("page-teacher-details.php?id='.$id.'");</script>';
			}

	
?>