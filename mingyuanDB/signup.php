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

<body>\


<div class="container">
  <div class="jumbotron">
    <form action="register_connect.php" method="post" onsubmit="return errorcheck();">
    <h2>Signup as a New Member</h2>
      <div class="form-group">
        <label for="exampleInputEmail1">Email Address</label>
        <input type="email" class="form-control" id="email" placeholder="Email" name="email" required="true">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="passwd" placeholder="Password" name="passwd" required="true">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">First Name</label>
        <input type="text" class="form-control" id="firstname" placeholder="Firstname" name="firstname" required="true"> 
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Last Name</label>
        <input type="text" class="form-control" id="lastname" placeholder="Lastname" name="lastname" required="true">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Address</label>
        <input type="text" class="form-control" id="address" placeholder="Address" name="address">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Phone (no space or dashes)</label>
        <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone">
      </div>
     
      <div class="alert alert-danger" role="alert" id="errormsg">You entered something wrong</div>      
      
      <button type="submit" class="btn btn-default">Submit</button>
      <button type="reset" class="btn btn-default">Reset</button>
      <br />
      <hr />
      <a href="index.php">Already have and account? Login</a>
    </form>
  </div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> 
<script type="text/javascript" src="js/errcheck.js"></script> 
<script src="https://code.jquery.com/jquery-2.2.1.js" integrity="sha256-eNcUzO3jsv0XlJLveFEkbB8bA7/CroNpNVk3XpmnwHc=" crossorigin="anonymous"></script>
</body>
</html>