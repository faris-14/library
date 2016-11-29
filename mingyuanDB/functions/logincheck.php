<?php
//*** start a new session
       session_start();

       //*** do this when form is submitted
       if (!isset($_SESSION["ValidUser"])) 

         header("Location: login.php");
?>