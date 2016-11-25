<?php
$a="";
	session_start();
	if(isset($_POST['submit2']))
	{
		
		$username=$_POST['usernam'];
         $passwor=$_POST['passwor'];
		 
		
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
	
	//echo "<script type='text/javascript'>document.location.href='useraccount.php';<script>"; 
header("location:http://localhost/project/useraccount.php");
exit;
//echo "validuser";
}
else
{
	//header("location:http://localhost/project/finalhome.php");
$a="invaliduser";
}   
}
?>
 




 

<!DOCTYPE HTML>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>How to create a resizing menu bar | Webdesigner Depot</title>
	<meta name="author" content="Antonio Pratas">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
  
	 
	  <link rel="stylesheet" href="assets/bootstrap-3.3.5/dist/css/bootstrap.min.css">
	<script src="assets/bootstrap-3.3.5/js/tests/vendor/jquery.min.js"> </script>
	<script src="assets/bootstrap-3.3.5-dist/js/bootstrap.min.js"> </script>
	
	 <script src="assets/jquery/jquery-1.11.3.min.js"> </script>
	 <script src="assets/jqueryvalidation/dist/jquery.validate.js"></script>
	  <link rel="stylesheet" href="assets/socialnetwork/css/font-awesome.css">

	  <link rel="stylesheet" href="assets/bootstrap-3.3.5/fonts/bootstrap.min.css">
	
	 <!--link rel="stylesheet" href="assets/bootstrap-3.3.5/dist/css/bootstrap.min.css">
	<script src="assets/bootstrap-3.3.5/js/tests/vendor/jquery.min.js"> </script>
	<script src="assets/bootstrap-3.3.5-dist/js/bootstrap.min.js" </script>
	
	 <script src="assets/jquery/jquery-1.11.3.min.js"> </script>
	 <script src="assets/jqueryvalidation/dist/jquery.validate.js"></script>
	  <link rel="stylesheet" href="assets/socialnetwork/css/font-awesome.css">

	  <link rel="stylesheet" href="assets/bootstrap-3.3.5/fonts/bootstrap.min.css"-->
	<script>
	
	</script>
	<style type="text/css">
		
		
		/* Importing Amaranth Font for menu text */
		@import url(http://fonts.googleapis.com/css?family=Amaranth);

		   #custom-bootstrap-menu.navbar-default .navbar-brand {
    color: rgba(119, 119, 119, 1);
	height:100px
	
}
#custom-bootstrap-menu.navbar-default {
    font-size: 20px;
    background-color: rgba(255, 255, 255, 1);
    border-width: 1px;
    border-radius: 4px;
	height:100px;
}
#custom-bootstrap-menu.navbar-default .navbar-nav>li>a {
    color: rgba(0, 0, 0, 1);
    background-color: rgba(255, 255, 255, 1);
}
#custom-bootstrap-menu.navbar-default .navbar-nav>li>a:hover,
#custom-bootstrap-menu.navbar-default .navbar-nav>li>a:focus {
    color: rgba(51, 51, 51, 1);
    background-color:white;
}
#custom-bootstrap-menu.navbar-default .navbar-nav>.active>a,
#custom-bootstrap-menu.navbar-default .navbar-nav>.active>a:hover,
#custom-bootstrap-menu.navbar-default .navbar-nav>.active>a:focus {
    color: rgba(85, 85, 85, 1);
    background-color: rgba(231, 231, 231, 1);
}
#custom-bootstrap-menu.navbar-default .navbar-toggle {
    border-color: #ddd;
}
#custom-bootstrap-menu.navbar-default .navbar-toggle:hover,
#custom-bootstrap-menu.navbar-default .navbar-toggle:focus {
    background-color: #ddd;
}
#custom-bootstrap-menu.navbar-default .navbar-toggle .icon-bar {
    background-color: #888;
}
#custom-bootstrap-menu.navbar-default .navbar-toggle:hover .icon-bar,
#custom-bootstrap-menu.navbar-default .navbar-toggle:focus .icon-bar {
    background-color: #ffffff;
}
.navbar-right{
margin-top:20px;


}
.logo{
height:90px;
width:120px;
margin-top:-10px;
}
		


			
			#first{
			
			height:570px;
			width:100%;
		background-color:rgb(255, 179, 102);
			 margin-top:100px;
            	left:0px; 
			
  
			}
			#first h1{
			
			color:white;
			font-size:80px;
			
			}
			#heading{
			
			color:black;
			text-align:center;
			}
			#second{
			background-color:white;
			margin-top:0px;
			
			
			   
			}
			#hee{
			
	    text-align:center;
			
			}
			#u{
			
			background-color:white;
			height:400px;
			width:450px;
			margin-top:-500px;
			margin-right:100px;
			
			
			}
			
			
			
			
			
			#j{
			
			
			background-color:white;
			height:600px;
			width:100%;
			margin-top:0px;
			
			}
			.networkid{
    overflow: auto;
	margin-right:550px;
}
 
.networkid> li {
    list-style-type: none;
    float:right;
	margin-top:10px;
	
}
 
.networkid > li > a >i {
    background: #205D7A;
    color: #fff;
    width: 40px;
    height: 40px;
    border-radius: 20px;
    font-size: 25px;
    text-align: center;
    margin-right: 10px;
    padding-top: 15%;
    transition: all 0.2s ease-in-out;

}

 .fa-facebook {
    background:#3b5998
} 
 .fa-linkedin {
    background:#007bb5
}
 .fa-twitter {
    background:#00aced
}
 .fa-google-plus {
	background:#dd4b39
}
 .fa-youtube{
background-color:#bb0000;

}

.networkid>li >a> i:hover {
    opacity: .7;
}
#bottom{
background-color:black;

height:200px;


}
#social{
color:white;
margin-top:100px;
margin-left:560px;
font-size:20px;
font-family:Bodoni MT Black;

}
#copyright{
color:white;
background-color:black;
height:50px;
text-align:center;



}
#copyrise{
margin-top:15px;
font-size:15px;
margin-right:25px;
}
.error{
	
	color:red;
	
	
}
#signup input.error {
border:1px solid red;
}
#login input.error {
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
		
		
   $("#signup").validate({
   
   
   
		
      rules: {
	  name: {
            required: true,
			
               },
			   
			   
	   gender:{
		   required: true
		   
		   
	   },
	   occupation:{
		   required: true
		   
	   },
	   email: {
		   
		   required: true,
		   remote: {
			url: "emailvalidation.php",
			type: "post",
			
		   }
		  
		   
		   
	   },
	   country: {
		   
		   
		   required: true
		   
	   },
	   companyname: {
		   
		   
		   required: true
		   
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
	   designation:{
		    required: true
		   
		   
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
			   
			   gender: {
				   
				   required:"please select the genter"
				   
				   
			   },
			   
			   email: {
				   
				    required:"please enter email id",
					remote: " This Email already used."
					
				   
			   },
			   country: {
				   
				   required:"please select country name "
				  
				   
			   },
			   mobilenumber: {
				   required:"please enter mobilenumber ",
				    minlength: "minnumm length 10"
				   
				   
				   
			   },
			   occupation: {
				    required:"please enter occupation "
				   
				   
				   
			   },
			   username: {
				   
				   required:"please enter username ",
				   remote: " This name already used.",
				    minlength: "minnumm length 10",
					maxlength: "maxnumm length 15"
					
				   
				   
			   },
	
	    designation: {
			
			required:"please enter designation"
			
			
		},
		
	   companyname: {
		   
		   required:"please enter companyname"
		   
		   
		   
		   
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
	
	
	
	<script type="text/javascript"> 
	
	
	
	$(document).ready(function(){
		
		
   $("#login").validate({
   
   
   
		
      rules: {
		  
		  usernam:{
			   required: true,
			   remote: {
			url: "usernamechecklogin.php",
			type: "post",
			
		   }
			   
			  
		  },
		  passwor:{
			   required: true,
			   remote: {
			url: "passwordchecklogin.php",
			type: "post",
			
		   }
		  }
	  
	  },
	   messages: {
            usernam: {
			   required: "please enter your username",
			   remote:"plz enter correct username"
			  
			   },
			   
			   passwor: {
				   
				   required:"please enter password",
				   remote:"plz enter correct password"
				   
			   }
	   }
	   
	  
	  
   });
	});
	
	
	</script>
	
	<style>
	
	
	

	</style>

</head>

<body>




<div id="custom-bootstrap-menu" class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header"><a class="navbar-brand" href="#"><img class="logo" src="assets/logo1.jpg"/></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav navbar-right">
               <li><a class="active" href="#">HOME</a></li>
				<li><a  href="#">FORUM</a></li>
				<li><a href="#"> NEWS&ARTICLES </a></li>
				<li><a  href="#second">JOBS</a></li>
				
				<li><a  href="#second"><span class="glyphicon glyphicon-user"></span> SIGNUP</a></li>
                <li><a  href="#j"><span class="glyphicon glyphicon-log-in"></span> LOGIN</a></li>
            </ul>
        </div>
    </div>
</div>
<div id="first" class="container-fluid">

   <br>  <br> <br> <br> <br> <br> <br>  <br>
 <h1 id="heading" class="text-vertical-center"> &nbsp    Innovation Beyond Imagination</h1><br> <br> 
	  <a href="#second"> <button type="submit" class="btn btn-primary   btn-lg center-block" style="width:100px;" >  Join</button> </a>

</div>
	
<div class="container-fluid fill-height" id="second">
<br><br><br><br><br><br>
<h1 id ="hee"><mark style="background-color:#6666ff;color:white;">Create New Account </mark></h1><br><br>




<form role="form" class="form-horizontal" id="signup"  method="post" action="" name="signup">




<div class="form-group">
 
    <label for="name" class="control-label col-sm-2" > Name:</label>
	<div class="col-sm-10">
    <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" style="width: 200px">
	</div>
</div>


<div class="form-group">
  
    <label for="gender"class="control-label col-sm-2" >gender:</label></td>
	<div class="col-sm-10">
    <select class="form-control" id="gender" style="width: 200px" name="gender">
	    <option value="">---select gender---<option>
		<option value="male">male</option>
		<option value="female">female</option>
		<option value="other">other</option>
				
      </select>
	 </div>
  </div>
   
    
  
  <div class="form-group">
  
    <label for="Email" class="control-label col-sm-2" > Email:</label>
	<div class="col-sm-10">
    <input type="email" class="form-control" id="email" placeholder="Enter your Email Id" style="width: 200px" name="email">
	</div>
</div>
  
 <div class="form-group">
  
    <label for="sel1"class="control-label col-sm-2" >Country:</label></td>
	<div class="col-sm-10">
    <select class="form-control" id="sel1" style="width: 200px" name="country" id="country">
	    <option value="">---select country---<option>
		<option value="indian"> indian </option>
		<option value="usa"> usa </option>
				
      </select>
	 </div>
  </div>
   <div class="form-group">
  
    <label for="mobile number:" class="control-label col-sm-2" >mobile number:</label>
	<div class="col-sm-10">
    <input type="text" class="form-control" id="mobilenumber" placeholder="Enter your mobile number" style="width: 200px" name="mobilenumber">
	</div>
</div>
<div class="form-group">
  
    <label for="occupation" class="control-label col-sm-2" > Occupation:</label>
	<div class="col-sm-10">
    <input type="text" class="form-control" id="occupation" placeholder="Enter your Occupation" style="width: 200px" name="occupation">
	</div>
</div>

 <div class="form-group">
  
    <label for="companyname:" class="control-label col-sm-2" >company name:</label>
	<div class="col-sm-10">
    <input type="text" class="form-control" id="companyname" placeholder="Enter your company name" style="width: 200px" name="companyname">
	</div>
</div>
<div class="form-group">
  
    <label for="designation" class="control-label col-sm-2" > Designation:</label>
	<div class="col-sm-10">
    <input type="text" class="form-control" id="designation" placeholder="Enter your Designation" style="width: 200px" name="designation">
	</div>
</div>


	 <div class="form-group">
  
    <label for="username:" class="control-label col-sm-2" > user name:</label>
	<div class="col-sm-10">
    <input type="text" class="form-control" placeholder="Enter your user name" style="width: 200px" name="username" id="username">
	<span id="usernamevalue"><span>
	</div>
</div>
   <div class="form-group">
  
    <label for="password:" class="control-label col-sm-2" >password:</label>
	<div class="col-sm-10">
    <input type="password" class="form-control" id="password" placeholder="Enter your password" style="width: 200px" name="password">
	</div>
</div>
   <div class="form-group">
  
    <label for="conform password:" class="control-label col-sm-2" >conform password:</label>
	<div class="col-sm-10">
    <input type="password" class="form-control" id="conformpassword" placeholder="Enter your conform password" style="width: 200px" name="conformpassword">
	</div>
</div><br>
    
	<div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary" name="submit1" value="Submit1" >Submit</button>
    </div>
  
  </form>
 <?php


if(isset($_POST['submit1']))
{
	$host="localhost";
	$user="root";
	$password="";
	
	$conn=mysql_connect($host,$user,$password);
	$db=mysql_select_db("facebook",$conn);
	$query="insert into signup(name,gender,	email,country,mobilenumber,occupation,companyname,designation,	username,password,conformpassword)values('".$_POST['name']."','".$_POST['gender']."','".$_POST['email']."','".$_POST['country']."','".$_POST['mobilenumber']."','".$_POST['occupation']."','".$_POST['companyname']."','".$_POST['designation']."','".$_POST['username']."','".$_POST['password']."','".$_POST['conformpassword']."')";

$a=mysql_query($query,$conn);

$result="succes";
}


?>

  
  
  </div>
  </div>	
	<div class="container-fluid fill-height" id="j">
   </div>
	
	
	
	
	<div class="container-fluid" id="u" class="pull-right">

	<p style="margin-left:100px;font-family:Arial;font-size:25px;margin-top:25px;" id="o"> <b> <mark style="background-color:#6666ff;color:white;"> LogIn </mark><b> </p>

	
	

	
	<form role="form" class="form-horizontal" id="login" method="POST">


	 <div class="form-group" id="h">
  
    <label for="username:" class="control-label col-sm-2" >username</label>
	<div class="col-sm-10">
    <input type="text" class="form-control" id="usernam" name="usernam" placeholder="Enter your username" style="width: 200px">
	</div>
</div>
   <div class="form-group">
  
    <label for="password:" class="control-label col-sm-2" >password</label>
	<div class="col-sm-10">
    <input type="password" class="form-control" id="passwor" placeholder="Enter your password" style="width: 200px" name="passwor">
	</div>
</div> 

<span> <?php echo $a; ?> </span>

<!--a> <p style="text-align:right;color:black;"> forget password<p> </a-->
   
   
	<div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary center-block" align="center" name="submit2">SigIn>></button>
    </div>
   
	
  </form>
    </div>
   </div>
   </div>




  
   <footer>
<div class="container-fluid" id="bottom">
  <div class="row">
   <p id="social">AROUND THE WEB</p>
    <div class="col-md-12 text-center">
     
<ul class="networkid">
 <li><a href="#"><i class="fa fa-youtube" style="background-color:#bb0000;"></i> </a></li>
 <li><a href="#"><i class="fa fa-google-plus"style="background:#dd4b39;"></i> </a></li>
    <li><a href="#"><i class="fa fa-twitter" style="background:#00aced;"></i></a></li>
     <li><a href="#"><i class="fa fa-linkedin" style="  background:#007bb5;"></i></a></li>
 
    <li><a href="#"><i class="fa fa-facebook" style=" background:#3b5998;"></i></a></li>
   
	 
	
</ul>
    </div>
  </div>
</div>
<div class="container-fluid" id="copyright">
<p id="copyrise">Copyright © 2015 Innowellgroup.com</p>
</div>
</footer>
</body>

</html>