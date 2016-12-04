<?php
      //*** start a new session
       session_start();

       //*** do this when form is submitted
       if (isset($_SESSION["ValidUser"])) 

         $uname = $_SESSION["ValidUser"];
       else header("Location: login.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->


<script type="text/javascript" src="js/functions.js"></script>
<title>Search Results</title>
</head>

<body>
    <div class="container">
        <div class="jumbotron">
                   
            <?php
/*** execute the query*/
	require 'database/connect.php';
	$keyword = $_REQUEST["keyword"];
	$searchtype = $_REQUEST["searchtype"];
	if($searchtype==1)
		$sql = "select book.book_id as book_id,title,year,publisher.name as p_name,first_name,last_name,subject.name as s_name, parent, available,serial_number
                from book,publisher,author,subject,copy where book.book_id=copy.book_id and book.subject_id=subject.subject_id and book.Author_id=author.Author_id and book.publisher_id=publisher.publisher_id
                and (author.first_name like '%$keyword%' or last_name like '%$keyword%')";
	else if($searchtype==2)
		$sql = "select book.book_id as book_id,title,year,publisher.name as p_name,first_name,last_name,subject.name as s_name, parent, available,serial_number
                from book,publisher,author,subject,copy where book.book_id=copy.book_id and book.subject_id=subject.subject_id and book.Author_id=author.Author_id and book.publisher_id=publisher.publisher_id
                and title like '%$keyword%'";
	else if($searchtype==3)
		$sql = "select book.book_id as book_id,title,year,publisher.name as p_name,first_name,last_name,subject.name as s_name, parent, available,serial_number
                from book,publisher,author,subject,copy where book.book_id=copy.book_id and book.subject_id=subject.subject_id and book.Author_id=author.Author_id and book.publisher_id=publisher.publisher_id
                and publisher.name like '%$keyword%'";
	else if($searchtype==4)
		$sql = "select book.book_id as book_id,title,year,publisher.name as p_name,first_name,last_name,subject.name as s_name, parent, available,serial_number
                from book,publisher,author,subject,copy where book.book_id=copy.book_id and book.subject_id=subject.subject_id and book.Author_id=author.Author_id and book.publisher_id=publisher.publisher_id
                and (subject.name like '%$keyword%' or subject.parent like '%$keyword%')";
	else if($searchtype==5)
		$sql = "select book.book_id as book_id,title,year,publisher.name as p_name,first_name,last_name,subject.name as s_name, parent, available,serial_number
                from book,publisher,author,subject,copy where book.book_id=copy.book_id and book.subject_id=subject.subject_id and book.Author_id=author.Author_id and book.publisher_id=publisher.publisher_id
                and (subject.name like '%$keyword%' or author.first_name like '%$keyword%' or author.last_name like '%$keyword%' or title like '%$keyword%' or publisher.name like '%$keyword%')";
    $result = mysqli_query($conn,$sql);
    if (!$result)
         die("Query Failed.");
    if($_SESSION['accounttype']==1)
        echo "<a href='index.php'><button class='btn btn-default'>Back</button></a>";
    else echo "<a href='employeeIndex.php'><button class='btn btn-default'>Back</button></a>";
    if (mysqli_num_rows($result) == 0){
    echo "<p>No results</p>";
    mysqli_free_result($result);
     //*** close this connection
        mysqli_close($conn);
  }
  else{

	  echo "<h3>Search Result</h3>";
      echo "<table class='table'>";
      echo "<tr><td>Book Id</td><td>Book Title</td><td>Year</td><td>Publisher</td><td>Author</td><td>Subject</td><td>Parent</td><td>Available<td></td></td></tr>";
      while($row = $result->fetch_assoc()) {
        echo "<form action='checkoutbook.php' method='GET'><input type='text' name='serial_number' style='display:none;' id=".$row["serial_number"]." value=".$row["serial_number"]." />";
        echo "<tr><td>" .
                    $row["book_id"]. " </td><td> " .
                    $row["title"]. "</td><td>" .
                    $row["year"]. "</td><td>".
                    $row["p_name"]."</td><td>".
                    $row["first_name"]." ".$row["last_name"]."</td><td>".
                    $row["s_name"]."</td><td>".
                    $row["parent"]."</td><td>".
                    $row["available"]."</td><td>";
        if($row["available"]=="Yes")
            echo "<button type='submit' class='btn btn-default'>Check out</button>";
        echo "</td></tr>";
		echo "</form>";
    }
    echo  "</table>";
      mysqli_free_result($result);
     //*** close this connection
        mysqli_close($conn);
     }
            ?>
    
     
        </div>
    </div>
</body>
</html>