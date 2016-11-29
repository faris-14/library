<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>try regester</title>
</head>

<body>
<?php 
	$email = $_POST['email'];
	$passwd = $_POST['passwd'];
	$firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
	//*** create a connection object
    require 'database/connect.php';


	
    //*** execute the query
	$sql="insert into member (password,phone,first_name,last_name,email,address) values('$passwd','$phone','$firstname','$lastname','$email','$address')";
    $result = mysqli_query($conn,$sql);


    //*** die if no result
    if (!$result)
         echo "Error: ". $conn->error;
	else{ 
	 //*** start a new session
         session_start();

         //*** set a session variable
         $_SESSION["ValidUser"] = $email;
		 
         //*** redirect when all is well; otherwise, loop here
        
       //*** redirect somewhere
       header("Location: index.php");
		//*** Free the resources associated with the result
   		mysqli_free_result($result);

 	   //*** close this connection
  		  mysqli_close($conn);
		 exit;
	}
?>
</body>
</html>