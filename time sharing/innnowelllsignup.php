<?php


if(isset($_POST['submit1']))
{
	$host="localhost";
	$user="root";
	$password="";
	
	$conn=mysql_connect($host,$user,$password);
	$db=mysql_select_db("facebook",$conn);
	$query="insert into signup(name,email,mobilenumber,username,password)values('".$_POST['name']."','".$_POST['email']."','".$_POST['mobilenumber']."','".$_POST['username']."','".$_POST['password']."')";

$a=mysql_query($query,$conn);
header("location:http://localhost/project/innnowelllogin.php");

}


?>






<!DOCTYPE html>
<html lang="en">
  <head>
     <meta charset="utf-8"> 
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <title>Innowell Engineering International Pvt Ltd</title>
	 <link rel="stylesheet" href="assets/bootstrap-3.3.5/dist/css/bootstrap.min.css">
	 <script src="assets/bootstrap-3.3.5/js/tests/vendor/jquery.min.js"> </script>
	 <script src="assets/bootstrap-3.3.5-dist/js/bootstrap.min.js"> </script>
     <script src="assets/jquery/jquery-1.11.3.min.js"> </script>
	 <script src="assets/jqueryvalidation/dist/jquery.validate.js"></script>
	 <link rel="stylesheet" href="assets/socialnetwork/css/font-awesome.css">
     <link rel="stylesheet" href="assets/bootstrap-3.3.5/fonts/bootstrap.min.css">
	 <style>
	 body {
       background: url(http://localhost/project/assets/signupback.jpg) no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
       background-size: cover;
	   height:100%;
	
     }
	  #signuppage
	 {
		
		 
		 position:fixed;
		 width:100%;
	    height:100%;
		background: rgba(0, 0, 0, 0.5);
		}
		#signup{
	
		border-style: solid;
		 border-color:white;
			  width:400px;
	          height:auto;
		     background-color:white;
			 margin-top:50px;
			   border-radius: 25px;
		
			
		}
		#logo1{
			width:100px;
			 margin-left:120px;
			  margin-top:15px;
			 
			
			
		  }
		  #signupform{
			  margin-top:10px;
			  margin-left:10px;
			  
			  
		  }
		  #signupbutton{
			  
			  width:350px;
			  margin-top:-10px;
			  
		  }
		  #signinlink{
			  text-align:center;
			  
		  }
.error{
color:red;		
}
#signupform input.error {
border:1px solid red;
}
#loginform input.error {
border:1px solid red;
}
#signupform select.error {
border:1px solid red;
}
#signupform textarea.error {
border:1px solid red;
}
		
</style>

<script type="text/javascript">
	
	
	$(document).ready(function(){
		
		
   $("#signupform").validate({
   
   
   
		
      rules: {
	  name: {
            required: true,
			
               },
			   
	
	   email: {
		   
		   required: true,
		   remote: {
			url: "emailvalidation.php",
			type: "post",
			
		   }
		  
		   
		   
	   },
	  
	   mobilenumber: {
		    required: true,
			minlength:10 
		   
		   
		   
	   },
	   username: {
		   required: true,
			 
			  remote: {
			     url: "usernamecheck.php",
			     type: "post",
			
		   }
		   
		   
		   
		   
	   },
	  
	   password: {
		    required: true,
			
			minlength:5, 
			maxlength:10,
			  remote: {
			url: "passwordcheck.php",
			type: "post",
			
		   }
		   
			
		   
		   
	   },
	   conformpassword: {
		   
		   required: true,
			minlength:5, 
			maxlength:10,
		   equalTo:"#password"
		   
	   }
	 


	   
	  },
	  
	  
	  
	  
	   messages: {
            name: {
			   required: "please enter your name",
			  
			   },
			   
			 
			   email: {
				   
				    required:"please enter email id",
					remote: " This Email already used."
					
				   
			   },
			  
			   mobilenumber: {
				   required:"please enter mobilenumber ",
				    minlength: "minnumm length 10"
				   
				   
				   
			   },
			  
			   username: {
				   
				   required:"please enter username ",
				   remote: " This name already used.",
				    minlength: "minnumm length 10",
					maxlength: "maxnumm length 15"
					
				   
				   
			   },
	
	   
		
	  
	   password: {
		            required:"please enter password ",
				    minlength: "minnumm length 5",
					maxlength: "maxnumm length 10",
					remote: " This password already used."
				   
		   
		   
	   },
	     
		 conformpassword: {
		            required:"please enter password ",
				    minlength: "minnumm length 5",
					maxlength: "maxnumm length 10",
				   equalTo: "plz enter the same password"
		   
		   
	   }
			    
	   }
	   
	   
   
	   
	   
	        });
			
			
			
			
			
});
		
	</script> 
	
	 
  </head>
      <body>
	  <div  id="signuppage">
	    <div  class="container" id="signup">
	       <img class="logo" id="logo1" src="assets/logo2.png"/>
		    <form role="form" id="signupform" method="post">
          <div class="form-group">
      <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name"style="width: 350px">
       </div>
	     <div class="form-group">
       <label for="email">Email:</label>
      <input type="email" class="form-control" id="email"  name="email" placeholder="Enter your email" style="width: 350px">
    </div>
       <div class="form-group">
       <label for="moblienumber">moblienumber:</label>
      <input type="text" class="form-control" id="mobilenumber"  name="mobilenumber" placeholder="Enter your mobilenumber" style="width: 350px">
    </div>
	 
	  <div class="form-group">
       <label for="username">username</label>
      <input type="text" class="form-control" id="username"  name="username" placeholder="Enter your username" style="width: 350px">
    </div>
	 <div class="form-group">
       <label for="password">Password:</label>
      <input type="password" class="form-control" id="password"  name="password" placeholder="Enter your password" style="width: 350px">
    </div>
	
   <br>
    <button type="submit" name="submit1" class="btn btn-primary btn-sm btn-block" id="signupbutton">Join Now</button>
  </form>
  <br>
 
  
  <p id="signinlink">Have an account? <a href="innnowelllogin.php">Log in</a></p>
</div>

	  
	  </div>
	
   
	  
 
  
  
  
     </body>
</html>