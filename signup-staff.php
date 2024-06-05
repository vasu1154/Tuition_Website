<?php  
	$id = 0;
	$name = $_POST['stname'];
	$pass = $_POST['stpass'];
	$category = $_POST['stcateogry'];
	$email = $_POST['stemail'];
	$address = $_POST['staddress'];
	$phone = $_POST['stphone'];
	$sex = $_POST['stgender'];
	$sub=$_POST['stsub'];

	include "dbconnect.php";

	$sql = "INSERT INTO `temp_teacher`(`tcr_id`,`tcr_password`, `tcr_name`, `tcr_sex`,  `tcr_address`, `tcr_telnum`, `tcr_email`,`tcr_cat`,`tcr_sub`) VALUES ('$id', '$pass', '$name', '$sex', '$address', '$phone', '$email','$category','$sub')";

	$result = mysqli_query($db,$sql);

	$sql2 = "SELECT * FROM `temp_teacher` ORDER BY `tcr_id` DESC LIMIT 1";

	$result2 = mysqli_query($db,$sql2);

	$row = mysqli_fetch_assoc($result2)	;
	

	if ($result && $result2) {
		mysqli_commit($db);
		print '<script>alert("Wait Some Time ! Your Request sebnd to be admin ");</script>';
		print '<script>window.location.assign("index.html");</script>';
		// print '<script>
		// 			if('.$category.' == "Teacher")
		// 				window.location.assign("login-teacher.php?id='.$row['tcr_id'].'");
		// 			else
		// 				window.location.assign("signup-admin.php?id='.$row['tcr_id'].'");
		// 	   </script>';
		}
		else{
		
			mysqli_rollback($db);
			print '<script>alert("Error! There some issue during registration");</script>';
			print '<script>window.location.assign("signup-teacher.html");</script>';
			}

	
?>