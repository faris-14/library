<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>delete book connect</title>
</head>

<body>
    <?php
	//*** start a new session
    session_start();

	require 'database/connect.php';
    //*** execute the query

    $serial_number = $_POST['serial_number'];
    $member_id = $_POST['member_id'];

    $startdate=strtotime("Saturday");
    $enddate=strtotime("+6 weeks", $startdate);

    while ($startdate < $enddate) {
        $due_date=date("M/d/y", $startdate);
        $startdate = strtotime("+1 week", $startdate);
    }

    
    $check_out_date = date("M/d/y");   
    $due_date;
    $sql1 = "select * from member where member_id='$member_id'";
    $sql2 = "insert into check_outs (serial_number,member_id,check_out_date,due_date) values ('$serial_number','$member_id','$check_out_date','$due_date')";
    $sql3 = "update copy set available = 'No' where serial_number = '$serial_number'";

    $result = mysqli_query($conn,$sql1);
	 //*** die if no result
    if (!$result)
         die("Search member Query Failed.");
    if (mysqli_num_rows($result) == 0)
		echo "<script>alert('No such user!');location.href='javascript:history.go(-1)';</script>";
    else {
        $result = mysqli_query($conn,$sql2);
        if (!$result)
            die("Insert check outs Failed.");
        $result = mysqli_query($conn,$sql3);
        if (!$result)
            die("Update copy Failed.");
        echo "<script>alert('Check out succesfully!!');location.href='employeeIndex.php';</script>";
    }
		mysqli_free_result($result);

 	   //*** close this connection
  		mysqli_close($conn);
		exit;




    ?>
</body>
</html>