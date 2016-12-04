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

<title>Database Project</title>
</head>

<body>
<?php 
session_start();
if(isset($_SESSION["InvalidUser"])&&$_SESSION["InvalidUser"] =="yes"){
  echo "<div class='alert alert-danger' role='alert' >Wrong user id or password</div>";
  $_SESSION["InvalidUser"] ="no";
}

?>

<div class="container">
  <div class="jumbotron">
    <form action="login_connect.php" method="post" onsubmit="return errorcheck();">
      <div class="form-group">
        <label for="exampleInputEmail1">User ID</label>
        <input type="text" class="form-control" id="userid" placeholder="User ID" name="userid" required="true">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="passwd" placeholder="Password" name="passwd" required="true">
      </div>
      <div class="form-group">
        <label for="exampleInputType">Account type</label>
        <select class="form-control" name="accounttype">
          <option value="1">Member</option>
          <option value="2">Employee</option>
          
</select>
      </div>
           
      
      <button type="submit" class="btn btn-default">Login</button>
      <button type="reset" class="btn btn-default">Reset</button>
      <br />
      <hr />
      <a href="signup.php">Create Account?</a>
    </form>
  </div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> 
<script type="text/javascript" src="js/errcheck.js"></script> 
<script src="https://code.jquery.com/jquery-2.2.1.js" integrity="sha256-eNcUzO3jsv0XlJLveFEkbB8bA7/CroNpNVk3XpmnwHc=" crossorigin="anonymous"></script>
</body>
</html>