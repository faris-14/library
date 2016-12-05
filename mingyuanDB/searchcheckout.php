<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" />

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous" />

    <!-- Latest compiled and minified JavaScript -->
    <title>Check out book</title>
</head>
<div class="container">
    <div class="jumbotron">
        <?php
/*** execute the query*/
        
require 'database/connect.php';
$member_id = $_REQUEST['member_id'];
$sql = "select * from check_outs,copy,book where book.book_id = copy.book_id and copy.serial_number = check_outs.serial_number and member_id = '$member_id'";
$result = mysqli_query($conn,$sql);
echo "<h3>Member ID ".$member_id." Checkout List</h3>";
echo "<a href='employeeIndex.php'><button class='btn btn-default'>Back</button></a>";
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
    echo "<table class='table'>";
    echo        "<tr><td>ISBN</td><td>Book Title</td><td>Borrower</td><td>Checkout Date</td><td>Due Date</td><td></td></tr>";
    while($row = $result->fetch_assoc()) {
		echo "<form action='returnbook.php' method='post'><input type='text' name='serial_number' style='display:none;' value=".$row["serial_number"]." />";
        echo "<tr><td>" .
        $row["book_id"]. " </td><td> " .
        $row["title"]. "</td><td>".
        $row["member_id"]. "</td><td>".
        $row["check_out_date"]. "</td><td>" .
        $row["due_date"].  "</td><td>".
        "<button type='submit' class='btn btn-default'>Return book</button>"."</td><tr>";
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
</html>