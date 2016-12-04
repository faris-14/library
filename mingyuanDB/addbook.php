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
    $book_id = $_REQUEST['book_id'];
    $author = explode(" ", $_REQUEST['author']);
    $author_firstname= $author[0];
    $author_lastname= $author[1];
    $title = $_REQUEST['title'];
    $publisher = $_REQUEST['publisher'];
    $subject = $_REQUEST['subject'];
    $parent = $_REQUEST['parent'];
    $city = $_REQUEST['city'];
    $year = $_REQUEST['year'];
    $copy_number = $_REQUEST['copy_number'];

	require 'database/connect.php';
    //*** execute the query

    $book_id = $_REQUEST['book_id'];
    $sql0 = "select * from book where book_id ='$book_id'";
    $sql1 = "select * from author where first_name ='$author_firstname' and last_name = '$author_lastname'";
    $sql2 = "select * from publisher where name='$publisher'";
    $sql3 = "select * from subject where name='$subject'";
	$sql4 = "select max(copy_seq_id) from copy where book_id = '$book_id'";

    //************************************
    //check the book if it exists
    $result = mysqli_query($conn,$sql0);
    //*** die if no result
    if (!$result)
        die("Search book query Failed.");
    if (mysqli_num_rows($result) > 0){
		//Add Copies 
		$result = mysqli_query($conn,$sql4);
		$num = $result ->fetch_assoc();
		$num = (int)$num + 1;
		$stop = ((int) $num + (int) $copy_number);
		for($i = $num; $i< $stop; $i++){
			$j = $num +1;
			$sql = "insert into copy (book_id,copy_seq_id,available) values ('$book_id',$j,'Yes')";
			$result = mysqli_query($conn,$sql);
			//*** die if no result
			if (!$result)
				die("Insert copy query Failed.");
			//echo "insert copy:".$book_id."<br/>";
		}
			echo "<script>alert('Copies added successfully!');location.href='javascript:history.back(-1)';</script>";
			exit;
    }

    //************************************
    //check the author if it exists
	$result = mysqli_query($conn,$sql1);
    //*** die if no result
    if (!$result)
         die("Search author query Failed.");
    if (mysqli_num_rows($result) > 0){
		$row =$result->fetch_assoc();
        $author_id = $row["Author_ID"];
        //echo "find author:".$author_id."<br/>";
    }
    else{
        $sql = "insert into author (first_name,last_name) values ('$author_firstname','$author_lastname')";
        $result = mysqli_query($conn,$sql);
        //*** die if no result
        if (!$result)
            die("Insert author query Failed.");
        $result = mysqli_query($conn,$sql1);
        if (!$result)
            die("Search author again query Failed.");
        if (mysqli_num_rows($result) > 0){
		    $row =$result->fetch_assoc();
            $author_id = $row["Author_ID"];
            //echo "insert author:".$author_id."<br/>";
        }
    }

    //************************************
    //check the publisher if it exists
    $result = mysqli_query($conn,$sql2);
    if (!$result)
        die("search publisher query Failed.");
    if (mysqli_num_rows($result) > 0){
		$row =$result->fetch_assoc();
        $publisher_id = $row["publisher_id"];
        //echo "find publisher:".$publisher_id."<br/>";
    }
    else{
        $sql = "insert into publisher (name,city) values ('$publisher','$city')";
        $result = mysqli_query($conn,$sql);
        //*** die if no result
        if (!$result)
            die("Insert publisher query Failed.");
        $result = mysqli_query($conn,$sql2);
        if (!$result)
         die("Search publisher again query Failed.");
        if (mysqli_num_rows($result) > 0){
		    $row =$result->fetch_assoc();
            $publisher_id = $row["publisher_id"];
            //echo "insert publisher:".$publisher_id."<br/>";
        }
    }

    //************************************
    //check the subject if it exists
    $result = mysqli_query($conn,$sql3);
    if (!$result)
        die("search subject query Failed.");
    if (mysqli_num_rows($result) > 0){
		$row =$result->fetch_assoc();
        $subject_id = $row["subject_id"];
        //echo "find subject:".$subject_id."<br/>";
    }
    else{
        $sql = "insert into subject (name,parent) values ('$subject','$parent')";
        $result = mysqli_query($conn,$sql);
        //*** die if no result
        if (!$result)
            die("Insert subject query Failed.");
        $result = mysqli_query($conn,$sql3);
        if (!$result)
         die("Search subject again query Failed.");
        if (mysqli_num_rows($result) > 0){
		    $row =$result->fetch_assoc();
            $subject_id = $row["subject_id"];
            //echo "insert subject:".$subject_id."<br/>";
        }
    }

    //************************************
    //start insert book
    $sql = "insert into book (book_id,author_id,publisher_id,subject_id,title,year) values ('$book_id','$author_id','$publisher_id','$subject_id','$title','$year')";
    $result = mysqli_query($conn,$sql);
    //*** die if no result
    if (!$result)
        die("Insert book query Failed.");
    //echo "insert book:".$book_id."<br/>";
    //****************************************
    //start insert copies
    for($i =1; $i<=$copy_number;$i++){
        $sql = "insert into copy (book_id,copy_seq_id,available) values ('$book_id',$i,'Yes')";
        $result = mysqli_query($conn,$sql);
        //*** die if no result
        if (!$result)
            die("Insert copy query Failed.");
        //echo "insert copy:".$book_id."<br/>";
    }
    
	echo "<script>alert('Book has been inserted successfully');location.href='employeeIndex.php';</script>";
	mysqli_free_result($result);

 	   //*** close this connection
  	mysqli_close($conn);
	exit;
    




    ?>
</body>
</html>