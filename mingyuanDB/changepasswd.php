<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>changepassword connect</title>
</head>

<body>
	<?php
	//*** start a new session
    session_start();

	require 'database/connect.php';
    //*** execute the query
    $UserId = $_SESSION["UserId"];
    $newpasswd = $_POST['newpassword'];
    $sql1 = "update member set password='$newpasswd' where member_id='$UserId'";
	$sql2 = "update employee set password='$newpasswd' where employee_id='$UserId'";
	if($_SESSION["accounttype"]==1)
		$result = mysqli_query($conn,$sql1);
	else $result = mysqli_query($conn,$sql2);
	 //*** die if no result
    if (!$result)
         die("Query Failed.");


		if($_SESSION["accounttype"]==1)
			echo "<script>alert('Password has been changed');location.href='index.php';</script>";
		else echo "<script>alert('Password has been changed');location.href='employeeIndex.php';</script>";
		mysqli_free_result($result);

 	   //*** close this connection
  		mysqli_close($conn);
		exit;




	?>
</body>
</html>