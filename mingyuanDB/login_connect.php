<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login connect</title>
</head>

<body>
	<?php
	$accounttype=$_POST['accounttype'];
	$userid = $_POST['userid'];
	$passwd = $_POST['passwd'];
	//*** create a connection object
    require 'database/connect.php';


    //*** execute the query
	$sql1 = "select * from member where member_id ='$userid' and password = '$passwd'";
	$sql2 = "select * from employee where employee_id ='$userid' and password = '$passwd'";
	if($accounttype==1)
		$result = mysqli_query($conn,$sql1);
	else $result = mysqli_query($conn,$sql2);
	 //*** die if no result
    if (!$result)
         die("Query Failed.");

    if (mysqli_num_rows($result) == 0){
		session_start();
    	$_SESSION["InvalidUser"] ="yes";
		header("Location: login.php");
		mysqli_free_result($result);

 	   //*** close this connection
  		  mysqli_close($conn);
		exit;
	}
	else{
	 //*** start a new session

         session_start();
		 if($accounttype==1){
			 $row = mysqli_fetch_assoc($result);
			 //*** set a session variable
			 $_SESSION["ValidUser"] = $row['first_name'];
			 $_SESSION["UserId"] = $row['member_id'];
			 $_SESSION['accounttype']=$accounttype;
			 //*** redirect when all is well; otherwise, loop here

			 header("Location: index.php");
		 }
		 else{
			 $row = mysqli_fetch_assoc($result);
			 //*** set a session variable
			 $_SESSION["ValidUser"] = $row['name'];
			 $_SESSION["UserId"] = $row['employee_id'];
			 $_SESSION['accounttype']=$accounttype;
			 header("Location: employeeIndex.php");
		 }


		//*** Free the resources associated with the result
   		mysqli_free_result($result);

 	   //*** close this connection
  		  mysqli_close($conn);
		 exit;}


	?>
</body>
</html>
