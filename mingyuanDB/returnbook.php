<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>return connect</title>
</head>

<body>
    <?php
	//*** start a new session


	require 'database/connect.php';
	require 'functions/logincheck.php';
    //*** execute the query
    $serial_number = $_POST['serial_number'];
    $sql1 = "delete from check_outs where serial_number='$serial_number'";
    $sql2 = "UPDATE copy set available = 'Yes' where serial_number = '$serial_number'";


	$result = mysqli_query($conn,$sql1);

	 //*** die if no result
    if (!$result)
         die("Query1 Failed.");

    $result = mysqli_query($conn,$sql2);
    if (!$result)
        die("Query2 Failed.");

    echo "<script>alert('Returned book successfully');location.href='employeeIndex.php';</script>";

		mysqli_free_result($result);

 	   //*** close this connection
  		mysqli_close($conn);
		exit;




    ?>
</body>
</html>