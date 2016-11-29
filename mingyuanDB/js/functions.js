
function errorcheck(){
	var errmsg =true;
	
	
	var email = document.getElementById("email").value;
	//start password check
	
	//start email check
	if(email==""){
		document.getElementById("errormsg").innerHTML =  "Email address cannot be empty";
		document.getElementById("errormsg").style.color="red";
		document.getElementById("email").focus();
		errmsg=false;
	}
	else if(email.search(/^[a-z\d]+@[a-zA-Z\d]+\.[a-z]+$/)!=0){
		document.getElementById("errormsg").innerHTML = "Email must be valid email address";
		document.getElementById("errormsg").style.color="red";
		document.getElementById("email").focus();
		errmsg=false;
	}
	else{
		document.getElementById("errormsg").innerHTML ="";
	}
		
	
	
	if(errmsg){
		
		return true;
	}
	else return false;
	
	
}


// JavaScript Document