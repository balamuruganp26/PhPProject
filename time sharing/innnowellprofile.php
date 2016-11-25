<?php
session_start();
	if(isset($_POST['usernamesubmit']))
		
		{
			
			$passwords=$_SESSION['pass1'];
			$username=$_POST['username'];
			
			
			
			
			$host="localhost";
	        $user="root";
	        $password="";
	
	$conn=mysql_connect($host,$user,$password);
	$db=mysql_select_db("facebook",$conn);
	 $query="update signup set username='".$username."' Where password ='".$passwords."'";
	$a=mysql_query($query,$conn);
	header("location:http://localhost/project/innnowellprofile.php");
}
?>
<?php

	if(isset($_POST['passwordchange']))
		
		{
			
			$username=$_SESSION['user1'];
			$passwords=$_POST['password'];
			
			
			
			
			$host="localhost";
	        $user="root";
	        $password="";
	
	$conn=mysql_connect($host,$user,$password);
	$db=mysql_select_db("facebook",$conn);
	 $query="update signup set password='".$passwords."' Where username ='".$username."'";
	
	$a=mysql_query($query,$conn);
		header("location:http://localhost/project/innnowellprofile.php");
}
?>
<?php

	if(isset($_POST['mobilenumberchange']))
		
		{
			
			$username=$_SESSION['user1'];
			$mobilenumber=$_POST['mobilenumber'];
			
			
			
			
			$host="localhost";
	        $user="root";
	        $password="";
	
	$conn=mysql_connect($host,$user,$password);
	$db=mysql_select_db("facebook",$conn);
	 $query="update signup set mobilenumber='".$mobilenumber."' Where username ='".$username."'";
	
	$a=mysql_query($query,$conn);
		header("location:http://localhost/project/innnowellprofile.php");
}
?>
<?php

	if(isset($_POST['emailchange']))
		
		{
			
			$username=$_SESSION['user1'];
			$email=$_POST['email'];
			
			
			
			
			$host="localhost";
	        $user="root";
	        $password="";
	
	$conn=mysql_connect($host,$user,$password);
	$db=mysql_select_db("facebook",$conn);
	 $query="update signup set email='".$email."' Where username ='".$username."'";
	 
	
	$a=mysql_query($query,$conn);
		header("location:http://localhost/project/innnowellprofile.php");
}
?>

<?php

/*if(isset($_POST['remove']))
		
		{
			
			$Image="default.png";
			$Images="default.png";
			
			echo "bala";
			
			
			
			$host="localhost";
	        $user="root";
	        $password="";
	
	    $conn=mysql_connect($host,$user,$password);
	   $db=mysql_select_db("facebook",$conn);
	    $query="update signup set image= '".  $Images."' $imagename='".$image."' Where username ='".$_SESSION['user1']."'";

	 
	
	     $a=mysql_query($query,$conn);
		header("location:http://localhost/project/innnowellprofile.php");
}*/
?>    
        		
	
	
<?php


		
	$host="localhost";
	$user="root";
	$password="";
	
	$conn=mysql_connect($host,$user,$password);
	$db=mysql_select_db("facebook",$conn);
	 $querye="select imagename from signup where username='".$_SESSION['user1']."'";
	
	
	
	$a=mysql_query($querye,$conn);

while($row=mysql_fetch_array($a))
{
	 
	
	if($row['imagename']=="")
	{
		
		$image= "default.png";
	}
	 else
	 {
		$image=$row['imagename'];
		 
		 
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
	 
	
	  
     
      

			
			
			<style>
			html, body {
   height: 100%;
  }
			#profile{
				 background-color:white;
				 height:90%;
	             width:60%;
				 margin-top:100px;
				
			}
			.table>tbody>tr>th, .table>tbody>tr>td {
    border-top: none;
}

#game{
	display:none;
}
#games{
	display:none;
}
#gamesend{
display:none;	
	
}
#gamesend1{
	
	display:none;	
	
}

	#home{
		
		margin-left:800px;
		border-color:white;
		font-size:20px;
		
	}		
	
	.btn-default{
		
		border-color:white;
		
	}
	
	.error{
color:red;		
}
#editprofile input.error {
border:1px solid red;
}
#editprofilepass input.error {
border:1px solid red;
}
#editprofileemail input.error {
border:1px solid red;
}
#editprofilemobile input.error {
border:1px solid red;
}
	
	
	
			</style>
			<!--script type="text/javascript">
			
			$(document).ready(function(){
              $('[data-toggle="tooltip"]').tooltip(); 
               });
			</script-->
			<script type="text/javascript">
			
			$(document).ready(function(){
              $('#nameclick').click(function(){
				  
				   $("#game").show(1000);
				   });
				    $('#close').click(function(){
				  
				   $("#game").hide(1000);
				   });
				   
              $('#emailsclick').click(function(){
				  
				   $("#games").show(1000);
				   });
				    $('#closes').click(function(){
				  
				   $("#games").hide(1000);
				   });
				   
				   
				   $('#passwordsclick').click(function(){
				  
				   $("#gamesend").show(1000);
				   });
				    $('#closeend').click(function(){
				  
				   $("#gamesend").hide(1000);
				   });
				   
				   
				   
				   $('#mobileclick').click(function(){
				  
				   $("#gamesend1").show(1000);
				   });
				    $('#mobileclickclose').click(function(){
				  
				   $("#gamesend1").hide(1000);
				   });
				   
              
				   
               });
			</script>
			<script type="text/javascript">
			$(document).ready(function(){
		
		
   $("#editprofile").validate({
   
   
   
		
      rules: {
	 
	
	   
	   username: {
		   required: true,
			 
			  remote: {
			     url: "usernamecheck.php",
			     type: "post",
			
		   }
		   
		   
		   
		   
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
			}
	     }
	   });
			});
</script>
			<script type="text/javascript">
			$(document).ready(function(){
$("#editprofileemail").validate({
     rules: {
	 email: {
		   
		   required: true,
		   remote: {
			url: "emailvalidation.php",
			type: "post",
			
		   }
		 }
	   },
	 messages: {
           email: {
				   
				    required:"please enter email id",
					remote: " This Email already used."
					
				   
			   }
			   }
});
});
</script>
			<script type="text/javascript">
			$(document).ready(function(){
	$("#editprofilemobile").validate({
   rules: {
 mobilenumber: {
		    required: true,
			minlength:10 
}
},
	  messages: {
            mobilenumber: {
				   required:"please enter mobilenumber ",
				    minlength: "minnumm length 10"
				  }    
	   }
	   });
			});
</script>
			<script type="text/javascript">
			$(document).ready(function(){		
   $("#editprofilepass").validate({
   
     rules: {
	password: {
		    required: true,
			
			minlength:5, 
			maxlength:10,
			  remote: {
			url: "passwordcheck.php",
			type: "post",
			
}
}
},
	  
	  messages: {
           password: {
		            required:"please enter password ",
				    minlength: "minnumm length 5",
					maxlength: "maxnumm length 10",
					remote: " This password already used."
					}
	     
}
});			
});
			
</script>
			
			</head>
			
			<body>
			
	
			
		
			
			
		<div class="container">
    <h1>Edit Profile <a href="innowelluseraccount.php"> <button type="button" id="home" class="btn btn-default"  >
         <span class="glyphicon glyphicon-home" > </span>
        HOME</button></a> </h1>
	
  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="assets/image/<?php echo $image; ?>" class="avatar img-circle" alt="avatar"width="200px" id="profileposition" height="200px">
          <h6>
        <a href=" http://localhost/project/imagehtml.php">  <button type="button"  class="btn btn-default">  
         Edit Profile
        </button> </a>
		<!--form method="POST" role="form">
		 <button type="submit"  class="btn btn-default" name="remove"> 
         remove profile
        </button>
		</form-->
		
		</h6>
          <!--input type="file" class="form-control"-->
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <!--div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
        </div-->
        <h3>Personal information</h3>
        
        <!--form class="form-horizontal" role="form"-->
		
		<?php
	
	
	$c="";
 
 
	$host="localhost";
	$user="root";
	$password="";
	
	$conn=mysql_connect($host,$user,$password);
	$db=mysql_select_db("facebook",$conn);
	$querye="select  DISTINCT name,email,mobilenumber,teamname,password,username from signup where username='".$_SESSION['user1']."' ";
	
	
	$a=mysql_query($querye,$conn);
	
	
	while($row=mysql_fetch_array($a))
		
   { 
	      $name=$row['name'];
		  $email=$row['email'];
		  $mobilenumber=$row['mobilenumber'];
		  
		  $teamname=$row['teamname'];
		  $username=$row['username'];
		  $password=$row['password'];
		  
     
	?>
		
		
          <table class="table">
   
    <tbody>
      
      <tr>
        <td>name</td>
        <td><?php echo $name;?></td>
        <td>  </td>
      </tr>
	   <tr>
        <td></td>
        <td></td>
        <td>  </td>
      </tr>
	   
	  <tr>
        <td></td>
        <td></td>
        <td>  </td>
      </tr>
	   <tr>
        <td>team name</td>
        <td><?php echo $teamname;?></td>
        <td>  </td>
      </tr>
	  <tr>
        <td></td>
        <td></td>
        <td>  </td>
      </tr>
	  <tr>
	   <td>username</td>
        <td><?php echo $username;?></td>
        <td> <a href="#" data-toggle="tooltip" data-placement="top" title="EditName"> <button type="button" class="btn btn-default" id="nameclick">
          <span class="glyphicon glyphicon-pencil"></span> 
        </button> </a> </td>
      </tr>
	  <tr>
	   <tr id="game">
        <td>username</td>
        <td> <div> <form role="form" id="editprofile" method="POST">  <div class="form-group">
      
        <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username"style="width: 350px">
       </div></td>
        <td>  <button type="submit" class="btn btn-default" id="usernamesubmit" name="usernamesubmit">
          <span class="glyphicon glyphicon-ok"> 
        </button> </button> </a> <button type="button" id="close" class="btn btn-default">
         <span class="glyphicon glyphicon-remove"> </span>
        </button> </form> </div> </td>
      </tr>
	   
      <tr>
        <td>password</td>
        <td><?php echo $password;?></td>
        <td> <a href="#" data-toggle="tooltip" data-placement="top" title="EditName"> <button type="button" class="btn btn-default" id="emailsclick">
          <span class="glyphicon glyphicon-pencil"></span> 
        </button> </a> </td>
      </tr>
	  
	   <tr id="games">
        <td>password</td>
        <td> <div><form role="form" id="editprofilepass" method="POST">  <div class="form-group">
      
        <input type="text" class="form-control" id="password" name="password" placeholder="Enter your password"style="width: 350px">
       </div></td>
        <td>  <button type="submit" class="btn btn-default" name="passwordchange" id="passwordchange">
              <span class="glyphicon glyphicon-ok"> 
        </button> </button> </a> <button type="button" id="closes" class="btn btn-default">
         <span class="glyphicon glyphicon-remove"> </span>
        </button> </form> </div> </td>
      </tr>
	  
	  
	   
	   
	   
	   <tr>
        <td>mobile number</td>
        <td><?php echo $mobilenumber;?></td>
        <td> <a href="#" data-toggle="tooltip" data-placement="top" title="EditName"> <button type="button" class="btn btn-default" id="passwordsclick">
          <span class="glyphicon glyphicon-pencil"></span> 
        </button> </a> </td>
      </tr>
	  
	   <tr id="gamesend">
        <td>mobile number</td>
        <td> <div><form role="form" id="editprofilemobile" method="POST">  <div class="form-group">
      
        <input type="text" class="form-control" id="mobilenumber" name="mobilenumber" placeholder="Enter your mobilenumber"style="width: 350px">
       </div></td>
        <td>  <button type="submit" class="btn btn-default" name="mobilenumberchange" id="mobilenumberchange">
          <span class="glyphicon glyphicon-ok"> 
        </button> </button> </a> <button type="button" id="closeend" class="btn btn-default">
         <span class="glyphicon glyphicon-remove"> </span>
        </button> </form> </div> </td>
      </tr>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  <tr>
        <td>email</td>
        <td><?php echo $email;?></td>
        <td> <a href="#" data-toggle="tooltip" data-placement="top" title="EditName"> <button type="button" class="btn btn-default" id="mobileclick">
          <span class="glyphicon glyphicon-pencil"></span> 
        </button> </a> </td>
      </tr>
	  
	   <tr id="gamesend1">
        <td>email</td>
        <td> <div><form role="form" id="editprofileemail" method="POST">  <div class="form-group">
      
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"style="width: 350px">
       </div></td>
        <td>  <button type="submit" class="btn btn-default" id="emailchange" name="emailchange">
          <span class="glyphicon glyphicon-ok"> 
        </button> </button> </a> <button type="button" id="mobileclickclose" class="btn btn-default">
         <span class="glyphicon glyphicon-remove"> </span>
        </button> </form> </div> </td>
      </tr>
	   
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
    </tbody>
    </table>
    </form>
<?php
   }
?>
    </div>
  </div>
</div>
 

		
</body>
			</html>