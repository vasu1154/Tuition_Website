<?php  
	
	$id = $_GET['id'];
	$sname = $_GET['subname'];

	include "dbconnect.php";

	$sql = "DELETE FROM `learn` WHERE stu_id='$id' AND sub_name='$sname'";

	$result = mysqli_query($db,$sql);

	if ($result) {
		mysqli_commit($db);
		print '<script>alert("Successfully drop the subject!");</script>';
		//header("location: index.html");}
		print '<script>window.location.assign("page-student-subject-reg.php?id='.$id.'");</script>';}
		else{
		
			mysqli_rollback($db);
			print '<script>alert("Error! There some issue during drop the subject");</script>';
			print '<script>window.location.assign("page-student-subject-reg.php?id='.$id.'");</script>';
			}

	
?>