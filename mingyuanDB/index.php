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
<link href="css/style.css" rel="stylesheet" type="text/css" />
<!-- Latest compiled and minified JavaScript -->


<script type="text/javascript" src="js/functions.js"></script>
<title>Home</title>
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <h3>Account type: Member</h3>
            <h3> Name: <?php echo $_SESSION["ValidUser"]?></h3>
            <h3> ID: <?php echo $_SESSION["UserId"]?></h3>
            <?php echo "<div class='alert alert-success' role='alert' id='success'>Welcome </div>"; ?>
            <a href="logout.php"><button type="button" class="btn btn-default">Log out</button></a>

            <hr />
            <form action="changepasswd.php" method="post">
                <div class="form-group">
                    <label for="exampleInputPassword">Change Password Here</label>
                    <input type="password" class="form-control" id="newpassword" placeholder="New password" name="newpassword" required="true" />
                    <button type="submit" class="btn btn-default">Submit new password</button>
                </div>
            </form>
            <hr />
            <form action="search.php" method="post">
                <div class="form-group">
                    <label for="exampleInputType">Search Books by Category</label>
                    <select class="form-control" name="searchtype">
                        <option value="1">Author</option>
                        <option value="2">Title</option>
                        <option value="3">Publisher</option>
                        <option value="4">Subject</option>
                        <option value="5">Keyword</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="keyword" placeholder="Type your keyword here" name="keyword" required="true" />
                    <button type="submit" class="btn btn-default">Search</button>
                </div>

            </form>


            <?php
/*** execute the query*/
require 'database/connect.php';
  $member_id = $_SESSION["UserId"];
  $sql = "select * from check_outs,copy,book where member_id ='$member_id' and book.book_id = copy.book_id and copy.serial_number = check_outs.serial_number";
    $result = mysqli_query($conn,$sql);
    if (!$result)
         die("Query Failed.");
    if (mysqli_num_rows($result) == 0){
    echo "<p>No checkouts</p>";
    mysqli_free_result($result);
     //*** close this connection
        mysqli_close($conn);
  }
  else{
   //*** start a new session
	  echo "<h3>Checkout List</h3>";
      echo "<table class='table'>";
      echo        "<tr><td>ISBN</td><td>Book Title</td><td>Checkout Date</td><td>Due Date</td></tr>";
      while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["book_id"]. " </td><td> " . $row["title"]. "</td><td>". $row["check_out_date"]. "</td><td>" . $row["due_date"]. "</td><tr>";
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