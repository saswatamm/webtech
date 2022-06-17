<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Prect Student Management</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="./style.css">


</head>
<body>

<div class="box-form">
	<div class="left" style="background-image: url('books.jpeg');">
		<div class="overlay">
		<p style="font-size: 98px;">Welcome to <br>Prect.</p>
		<p style="font-size: 28px;">Online Exams made easy by Prect</p>
		<span style="margin-top: 40px;">
			
			<a href="#" id="studentLogin" style="text-decoration: none;" onclick="StudentLogin()"><i class="" aria-hidden="true"></i>Student Login</a>
			<a href="#" id="facultyLogin"style="text-decoration: none;"onclick="FacultyLogin()" ><i class="" aria-hidden="true"></i> Faculty Login</a>
		</span>
		</div>
	</div>
	
	
		<div class="right">
		<h5 style="font-size: 60px;margin-top:220px"  id="loginName">Student Login</h5>
		<p>Don't have an account? <a href="#">Create Your Account</a> it takes less than a minute</p>
		<div class="inputs">
			<input type="text" id="username" placeholder="username" style="font-size: 20px;" name="name">
			<br>
			<input type="password" id="password" placeholder="password" style="font-size: 20px;">
			
			<button id="loginBtn" onclick="login();" style="margin-top:20px;margin-left:20px;margin-bottom:20px;">Login</button>
         </div>
			
			
			
		
	</div>
	
</div>




  
</body>








<script>
	
    var loginName = document.getElementById("loginName");
	var f=1;
	var username;
	var password;
	var userName = "Saswata";
	var passWord = "123456";
	var facUser = "Faculty1"
	var facPass = "1234";
		 
	function StudentLogin()
	{
		loginName.innerHTML = "Student Login";
		f=1;
		
	}
	function FacultyLogin()
	{
		loginName.innerHTML = "Faculty Login";
		f=2;
	}

	function login()
	{
		username = document.getElementById("username").value;
	    password = document.getElementById("password").value;
		
		console.log(username + " " + password);
		

		if(f==1)
	   {
		   
		if(username== userName && password== passWord)
		 {
			
		    console.log(f);
			window.location.href = "stHome.html";
		   
		   
		 }
	   
	   else
	     {
		   console.log(username + " " + password);
		   alert("Please enter correct password");
		   
	      }
	   }
	
	   if(f==2)
	   {
		  if(username== facUser && password== facPass)
		  {
		   window.location.href = "facultyHome.php";
		  }
		   else{
		   alert("Please enter correct credentials");
		   }
		   
	   }
	}

</script>       
</html>


