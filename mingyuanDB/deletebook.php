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

    $book_id = $_REQUEST['book_id'];
    $sql0 = "select * from book where book_id ='$book_id'";
    $sql1 = "select * from copy where book_id ='$book_id' and available = 'No'";
    $sql2 = "delete from copy where book_id='$book_id'";
    $sql3 = "delete from book where book_id='$book_id'";



    $result = mysqli_query($conn,$sql0);
    //*** die if no result
    if (!$result)
        die("Search book query Failed.");
    if (mysqli_num_rows($result) == 0){
		echo "<script>alert('No such book!');location.href='employeeIndex.php';</script>";
        exit;
    }
	$result = mysqli_query($conn,$sql1);
    //*** die if no result
    if (!$result)
         die("Search copy query Failed.");
    if (mysqli_num_rows($result) > 0){
		echo "<script>alert('Some book has been borrowed out, can not be deleted!');location.href='employeeIndex.php';</script>";
        exit;
    }
    $result = mysqli_query($conn,$sql2);
    if (!$result)
        die("delete copy query Failed.");
    $result = mysqli_query($conn,$sql3);
    if (!$result)
        die("delete book query Failed.");
	echo "<script>alert('Book has been deleted');location.href='employeeIndex.php';</script>";
	mysqli_free_result($result);

 	   //*** close this connection
  	mysqli_close($conn);
	exit;




    ?>
</body>
</html>