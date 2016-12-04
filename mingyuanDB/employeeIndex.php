<?php
      //*** start a new session
       session_start();

       //*** do this when form is submitted
       if (isset($_SESSION["ValidUser"])&&$_SESSION['accounttype']==2) 

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
<title>Library System</title>
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <h3>Account type: Emplyoee</h3>
            <h3>Name: <?php echo $_SESSION["ValidUser"]?></h3>
            <h3>User ID: <?php echo $_SESSION["UserId"]?></h3>
            <?php echo "<div class='alert alert-success' role='alert' id='success'>Welcome </div>"; ?>
            <a href="logout.php"><button type="button" class="btn btn-default">Log out</button></a>

            <hr />
            <h3>Change Password Here</h3>
            <form action="changepasswd.php" method="post">
                <div class="form-group">
                    <label for="exampleInputPassword"></label>
                    <input type="password" class="form-control" id="newpassword" placeholder="New password" name="newpassword" required="true" />                    
                </div>
                <div class="form-group">                    
                    <button type="submit" class="btn btn-default">Submit new password</button>
                </div>
            </form>
            <hr />
            <h3>Search Books by Category</h3>
            <form action="employeeSearch.php" method="get">
                <div class="form-group">
                    <label for="exampleInputType"></label>
                    <select class="form-control" name="searchtype">
                        <option value="2">Title</option>
                        <option value="1">Author</option>                        
                        <option value="3">Publisher</option>
                        <option value="4">Subject</option>
                        <option value="5">Keyword</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="keyword" placeholder="Type your keyword here" name="keyword" required="true" />                    
                </div>
                <div class="form-group">                    
                    <button type="submit" class="btn btn-default">Search</button>
                </div>

            </form>

            <hr />

            <h3>Checkout List</h3>              
            <a href='checkoutlist.php'><button class='btn btn-default'>See all users' checkouts</button></a>               
            <form action="searchcheckout.php" method="get">
                <div class="form-group">
                    <label for="exampleInputUserId">Search for books checked out by a particular user</label>
                    <input type="text" class="form-control" placeholder="Member ID" name="member_id" required="true" />
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Search</button>
                </div>
            </form>
                <hr />


                <h3>Add a Book to Circulation</h3>
                <form action="addbook.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputType">ISBN</label>
                        <input type="text" class="form-control" placeholder="" name="book_id" required="true" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputType">Book Title</label>
                        <input type="text" class="form-control" id="title" placeholder="" name="title" required="true" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputType">Author</label>
                        <input type="text" class="form-control" placeholder="" name="author" required="true" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputType">Publisher</label>
                        <input type="text" class="form-control" id="publisher" placeholder="" name="publisher" required="true" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputType">Publisher's City</label>
                        <input type="text" class="form-control" placeholder="" name="city" required="true" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputType">Year</label>
                        <input type="text" class="form-control" placeholder="" name="year" required="true" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputType">Subject</label>
                        <input type="text" class="form-control" placeholder="" name="subject" required="true" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputType">Parent Subject</label>
                        <input type="text" class="form-control" placeholder="" name="parent" required="true" />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputType">Number of Copies</label>
                        <input type="text" class="form-control" placeholder="" name="copy_number" required="true" />
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default">Add</button>
                    </div>

                </form>
                <h3>Take a Book Out of Circulation</h3>
                <form action="deletebook.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputType">Serial Number</label>
                        <input type="text" class="form-control" placeholder="" name="book_id" required="true" />
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default">Delete</button>
                    </div>

                </form>
            </div>
    </div>
</body>
</html>