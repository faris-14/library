<?php
function email_exsits($email){
	$email = sanitize($email);
	$query = mysql_query("select count(*) from 'user_info' where email = '$email'");
	return (mysql_result($query,0)==1)?true:false;
}
?>