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

<body>
    <?php
	//*** start a new session
    session_start();

	require 'database/connect.php';
    //*** execute the query

    $serial_number = $_REQUEST['serial_number'];
    ?>
    <div class="container">
        <div class="jumbotron">
            <h2>Check out to whom?</h2>
            <hr />
            <form action="confirmcheckout.php" method="post">
                <div class="form-group">                    
                    <input type='text' name='serial_number' style='display:none;' value="<?php echo $serial_number?>" />
                    <label for="exampleInputUserId">Member ID</label>
                    <input type="text" class="form-control" id="member_id" placeholder="" name="member_id" required="true" />
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </form>
        </div>
    </div>
           
</body>
</html>