<?php
$a="";
	session_start();
	if(isset($_POST['submit2']))
	{
		
		$username=$_POST['username'];
         $passwor=$_POST['password'];
		 
		
		  $username = stripslashes($username);
           $passwor = stripslashes($passwor);
           $username = mysql_real_escape_string($username);
           $passwor = mysql_real_escape_string($passwor);
		   
		   
		   
		   
		   
		   
		
		
	$host="localhost";
	$user="root";
	$password="";
	
	$conn=mysql_connect($host,$user,$password);
	$db=mysql_select_db("facebook",$conn);
	 $query="select username,password from signup where username='".$username."' and  password='".$passwor."' ";
 
 
 

         $a=mysql_query($query,$conn);
		 $count=mysql_num_rows($a);

	 
		
if($count == 1)
{
	
	
	$_SESSION['user1']=$username;
	$_SESSION['pass1']=$passwor;
	
	
	if(($_SESSION['user1']=="guna123")&&($_SESSION['pass1']=="admin123")||($_SESSION['user1']=="sengathri123")&&($_SESSION['pass1']=="sengathri123"))
	{
	
	header("location:http://localhost/project/innowelladminpage.php");
	}
	else
	{
	header("location:http://localhost/project/innowelluseraccount.php");	
	}
exit;
//echo "validuser";
}
else
{
	//header("location:http://localhost/project/finalhome.php");
$a="invalid username and password";
}   
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
       background: url(http://localhost/project/assets/backinnnowell.jpg) no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
       background-size: cover;
	   height:100%;
	
     }
	  #loginpage
	 {
		
		 position:absolute;
		 width:100%;
	     height:100%;
		 background: rgba(0, 0, 0, 0.5);
		}
		#login{
	
		      border-style: solid;
		      border-color:white;
			  width:400px;
	          height:auto;
		      background-color:white;
			  margin-top:150px;
			   border-radius: 25px;
		
			
		}
		#logo1{
			width:200px;
			 margin-left:80px;
			  margin-top:30px;
			 
			
			
		  }
		  #loginform{
			  margin-top:30px;
			  margin-left:10px;
			  
			  
		  }
		  #loginbutton{
			  
			  width:350px;
			  
			  
		  }
		  #signinlink{
			  text-align:center;
			  
		  }
		  #invalid{
			  text-align:center;
			  color:red;
			  
		  }
.error{
color:red;		
}
#signup input.error {
border:1px solid red;
}
#loginform input.error {
border:1px solid red;
}
#signup select.error {
border:1px solid red;
}
#signup textarea.error {
border:1px solid red;
}
		
</style>
	 <script type="text/javascript"> 
	
	
	
	$(document).ready(function(){
		
		
   $("#loginform").validate({
   
   
   
		
      rules: {
		  
		  username:{
			   required: true,
			   remote: {
			   url: "usernamechecklogin.php",
			   type: "post",
			
		   }
			   
			  
		  },
		  password:{
			   required: true,
			   remote: {
			url: "passwordchecklogin.php",
			type: "post",
			
		   }
		  }
	  
	  },
	   messages: {
            username: {
			   required: "please enter your username",
			   remote:"plz enter correct username"
			  
			   },
			   
			   password: {
				   
				   required:"please enter password",
				   remote:"plz enter correct password"
				   
			   }
	   }
	   
	  
	  
   });
	});
	
	
	</script>
  </head>
      <body>
	  <div  id="loginpage">
	    <div  class="container" id="login">
	       <img class="logo" id="logo1" src="assets/logo2.png"/>
		    <form role="form" id="loginform" method="post">
          <div class="form-group">
      <label for="username">username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username"style="width: 350px">
       </div>
       <div class="form-group">
       <label for="password">Password:</label>
      <input type="password" class="form-control" id="password"  name="password" placeholder="Enter password" style="width: 350px">
    </div>
   <br>
    <button type="submit"  name="submit2" class="btn btn-primary btn-sm btn-block" id="loginbutton">Log in</button>
  </form>
  <br>
  <p id="invalid"> <?php echo $a;?> </p>
  <br>
    
  <p id="signinlink">Don't have an account? <a href="innnowelllsignup.php">Sign up</a></p>
</div>

	  
	  </div>
	
	  </div>
   
	  
 
  
  
  
     </body>
</html>