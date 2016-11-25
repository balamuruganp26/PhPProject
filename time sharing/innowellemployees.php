<?php
 session_start();
?>		
<?php

if(isset($_POST['submit1']))
  { 


$name=$_POST['name'];
$team=$_POST['team'];
$username=$_POST['username'];
$passwords=$_POST['password'];


	$host="localhost";
	$user="root";
	$password="";
	
	
	
	
	
	
	
	  $conn=mysql_connect($host,$user,$password);
	  $db=mysql_select_db("facebook",$conn);
      $query="insert into signup(name,teamname,username,password)values('".$name."','".$team."','".$username."','".$passwords."')";
	
      $a=mysql_query($query,$conn);

header("location:http://localhost/project/innowellemployees.php");
  }

?>			





<!DOCTYPE html>
<html lang="en">
  <head>
     <meta charset="utf-8"> 
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <title>Innowell Engineering International Pvt Ltd</title>
	 <link rel="stylesheet" href="assets/bootstrap-3.3.5/dist/css/bootstrap.min.css">
	  <link rel="stylesheet" href="assets/scrollbar/jquery.mCustomScrollbar.css">
	 <script src="assets/bootstrap-3.3.5/js/tests/vendor/jquery.min.js"> </script>
	 <script src="assets/bootstrap-3.3.5-dist/js/bootstrap.min.js"> </script>
     <script src="assets/jquery/jquery-1.11.3.min.js"> </script>
	 <script src="assets/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	 <script src="assets/jqueryvalidation/dist/jquery.validate.js"></script>
	  <script src="assets/datepicker/js/bootstrap-datepicker.js"></script>
	 <link rel="stylesheet" href="assets/socialnetwork/css/font-awesome.css">
     <link rel="stylesheet" href="assets/bootstrap-3.3.5/fonts/bootstrap.min.css">
	
	  
     
        <link href="assets/datepicker/css/bootstrap-datetimepicker.css" rel="stylesheet">

        
		
			<script src="assets/datepicker/js/moment.js"></script>
			<script src="assets/datepicker/js/bootstrap-datetimepicker.js"></script>
			 <link href="assets/selectbox/dist/css/bootstrap-select.min.css" rel="stylesheet">

			<script src="assets/selectbox/dist/js/bootstrap-select.min.js"></script>
			<script src="assets/selectbox/dist/js/i18n/defaults-*.min.js"></script>
	  
     
      

			
			
			<style>
			html, body {
   height: 100%;
  }
			#home{
				
				margin-left:500px;
				border-color:rgba(51, 102, 255, 1);
					background-color: rgba(51, 102, 255, 1);
				
				
			}
			#completeproject{
				border-color:rgba(51, 102, 255, 1);
					background-color: rgba(51, 102, 255, 1);
				
				
			}
			
			#currenteproject{
				border-color:rgba(51, 102, 255, 1);
					background-color: rgba(51, 102, 255, 1);
				
			}
			#deleteproject{
			border-color:rgba(51, 102, 255, 1);
					background-color: rgba(51, 102, 255, 1);
			}
			#record{
				border-color:rgba(51, 102, 255, 1);
					background-color: rgba(51, 102, 255, 1);
			}
			#projectlist{
				
				border-color:rgba(51, 102, 255, 1);
					background-color: rgba(51, 102, 255, 1);
				
			}
			#yearrecord{
				border-color:white;
				
			}
			#monthrecord{
				border-color:white;
				
			}
			#todayrecord{
				border-color:white;
				
			}
			#recordlist{
				
				background-color:white;
				display:none;
				height:200px;
			
				
				
			}
			.gi-2x{
				font-size: 2em;
				}
				
				
				
				
				
				#close{
					margin-left:850px;
					border-color:white;
					
				}
				#getmonthrecord{
					
					display:none;
					position: absolute;
					
					
				}
				#monthlist{
					border-color:black;
					margin-left:400px;
					
					
				}
				#getyearrecord{
					
					display:none;
					position: absolute;
					
					
				}
				#yearlist{
					border-color:black;
					margin-left:400px;
					
					
				}
				#recordfinal{
					
					border-color:rgba(51, 102, 255, 1);
					background-color: rgba(51, 102, 255, 1);
				}
				#projectlistfilter{
					
					display:none;
					
				}
				#headerlist{
					background-color: rgba(51, 102, 255, 1);
					
				}
				#addnewemployee{
					
					margin-left:100px;
					
					
					
				}
				#addnewemployeeform{
					
					width:80%;
					background-color:white;
					height:auto;
					margin-left:200px;
					margin-top:10px;
					display:none;
					
					
					
				}
				#projecttitle{
					
					margin-left:230px;
					 font-family:Stencil Std;
				}
			 mark{
				 background-color:#3366ff;
				 color:black;
				 
			 }
			 
          #addprojectimag{
			  width:500px;
			  height:400px;
			  margin-left:450px;
			  margin-top:-400px;
			  
			  
		  }

        #projectviewform{
			
			        width:90%;
					background-color:white;
					height:auto;
					margin-left:50px;
					margin-top:10px;
					display:none;
			
		}
		#total{
			text-align:center;
			
		}
		#employeeeprojectlistselect
		{
			
			
			
			height:250px;
			width:90%;
			background-color:white;
			margin-left:60px;
			margin-top:10px;
			display:none;
			
			
			
		}
		#employeeprojectrecord{
			
			margin-top:50px;
			margin-left:300px;
			display:none;
			
			
			
		}
		
		#monthprojectrecord{
			margin-top:50px;
			margin-left:300px;
			display:none;
			
			}
			#employeeprojectrecordtoday{
				
				margin-top:50px;
			margin-left:400px;
			display:none;
				
				
				
			}
	#completeprojecttitle{
		
		text-align:center;
		margin-right:100px;
	}
	#completetable{
		width:90%;
		margin-left:50px;
	}
	#completetableyear{
		width:90%;
		margin-left:50px;
		
	}
	
	#finalcompletetitle{
		
		
		text-align:center;
	}
	#finalcompletetitleyear{
		
		
		text-align:center;
	}
	
	
	
	
	#currentprojectlistselect{
			height:200px;
			width:90%;
			background-color:white;
			margin-left:60px;
			margin-top:10px;
			display:none;
		
		
	}
	#currentprojecttitle{
			
		text-align:center;
		margin-right:100px;
		
		
	}
	#currentprojectrecord{
		margin-top:50px;
		margin-left:350px;
			
		
		
	}
	#currenttable{
		width:90%;
		margin-left:50px;
		
	}
	#finalcurrenttitle{
		text-align:center;
		
		
	}
				
				
				
				
				#finaldeletetitle{
		
		
		text-align:center;
	}
	#deleteprojectlistselect{
			height:200px;
			width:90%;
			background-color:white;
			margin-left:60px;
			margin-top:10px;
			display:none;
			
		
		
	}
	
	#deleteprojecttitle{
			
		text-align:center;
		margin-right:100px;
		
		
	}
	#deleteprojectrecord{
		margin-top:50px;
		margin-left:430px;
			
		
		
	}
	
	#finaldeletetitle{
		text-align:center;
		
		
	}
	.deletelogo{
		
		height:500px;
		width:500px;
		
		
	}
	#nolist{
		
		
		margin-top:100px;
		font-size:30px;
		text-align:center;
	}
				
				.error{
color:red;		
}
#addnewemployee input.error {
border:1px solid red;
}
#addnewemployee input.error {
border:1px solid red;
}
#addnewemployee select.error {
border:1px solid red;
}
#addnewemployee textarea.error {
border:1px solid red;
}

			</style>
			
			<script type="text/javascript">
			
			$(document).ready(function(){
			$("#projectlist").click(function(){
				$("#projectviewform").hide(1000);
				$("#addnewemployeeform").show(1000);
				$("#employeeeprojectlistselect").hide(1000);
				$("#completeprojectlistresult").hide(1000);
				$("#completeprojectlistyearresult").hide(1000);
				  $("#currentprojectlistselect").hide(1000);
				   $("#currentprojectlistresult").hide(1000);
				    $("#deleteprojectlistselect").hide(1000);
					 $("#deleteprojectlistresult").hide(1000);
				   
				  
				   });
				   $('#recordfinal').click(function(){
				  
				$("#projectviewform").show(1000);
				$("#addnewemployeeform").hide(1000);
				$("#employeeeprojectlistselect").hide(1000);
				$("#completeprojectlistresult").hide(1000);
				$("#completeprojectlistyearresult").hide(1000);
				  $("#currentprojectlistselect").hide(1000);
				   $("#currentprojectlistresult").hide(1000);
				    $("#deleteprojectlistselect").hide(1000);
					 $("#deleteprojectlistresult").hide(1000);
				   });
						
			            $("#completeproject").click(function(){
				
				            $("#employeeeprojectlistselect").show(1000);
							 $("#addnewemployeeform").hide(1000);
							 $("#projectviewform").hide(1000);
							 $("#completeprojectlistresult").hide(1000);
							 $("#completeprojectlistyearresult").hide(1000);
							  $("#currentprojectlistselect").hide(1000);
							   $("#currentprojectlistresult").hide(1000);
							    $("#deleteprojectlistselect").hide(1000);
								 $("#deleteprojectlistresult").hide(1000);
                                      
				         });
						 
						  $("#currenteproject").click(function(){
				
				            $("#employeeeprojectlistselect").hide(1000);
							 $("#addnewemployeeform").hide(1000);
							 $("#projectviewform").hide(1000);
							 $("#completeprojectlistresult").hide(1000);
							 $("#completeprojectlistyearresult").hide(1000);
							 $("#currentprojectlistselect").show(1000);
							 $("#currentprojectlistresult").hide(1000);
							  $("#deleteprojectlistselect").hide(1000);
							   $("#deleteprojectlistresult").hide(1000);

				         });
						 $("#deleteproject").click(function(){
				
				            $("#employeeeprojectlistselect").hide(1000);
							 $("#addnewemployeeform").hide(1000);
							 $("#projectviewform").hide(1000);
							 $("#completeprojectlistresult").hide(1000);
							 $("#completeprojectlistyearresult").hide(1000);
							 $("#currentprojectlistselect").hide(1000);
							 $("#currentprojectlistresult").hide(1000);
							  $("#deleteprojectlistselect").show(1000);

				         });
						
						 
						
						 $("#yearrecord").click(function(){
							 
							 $("#employeeprojectrecord").show(1000);
							  $("#monthprojectrecord").hide(1000);
							 $("#employeeprojectrecordtoday").hide(1000);
							
							 
							 
						 });
						 
						  $("#monthrecord").click(function(){
							 
							 $("#employeeprojectrecord").hide(1000);
							  $("#monthprojectrecord").show(1000);
							  $("#employeeprojectrecordtoday").hide(1000);
							
							 
							 
						 });
						  

						  $("#todayrecord").click(function(){
							 
							 $("#employeeprojectrecord").hide(1000);
							  $("#monthprojectrecord").hide(1000);
							  $("#employeeprojectrecordtoday").show(1000);
							
							 
							 
						 });
						  $("#close").click(function(){
							 
							$("#employeeeprojectlistselect").hide(1000);
							 
							 
						 });
						
						 
						 
						 
						 
						 
						 
						 /* $("#completebutton").click(function(){
				
				            //$("#employeeeprojectlistselect").show(1000);
							 $("#projectform").hide(1000);
							 $("#projectviewform").hide(1000);
							 $("#completeprojectlistresult").show(1000);

				         });*/
						 
						 
			            
						     
						 
						
						 
						 
						 
						 
				   
						
						
			});
			
			
		
			</script>
			
			
	<script type="text/javascript">
		
		$(document).ready(function() {	
		$(".delete").click(function(){
			var rowid =$(this).attr('data-id');
			alert("bla");
			
			
			 $.ajax({
        type: "POST",
        url: "deleteemployee.php",
		data: {'rowid':rowid},
       
       success: function(html)
{
 location.reload();
}

});
			
         });
						  
						 
						
						 
						 
						 
						 
				   
						
						
			});
			
		</script>	
			
			<script type="text/javascript">
			
			$(document).ready(function(){
			$("#addnewemployee").validate({
					  rules: {
	  name: {
            required: true,
			
               },
			   
	
	  
	   team: {
		    required: true,
			
		   
		   
		   
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
			   
			 
			  
			   team: {
				   required:"please enter mobilenumber ",
				   
				   
				   
				   
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
			
			
			
			
			

			
			
			
			
			
			
			
			
				<script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker({
			       
					 
					
				});
            });
        </script>
		
			<script type="text/javascript">
			
			$(document).ready(function(){
			$("#yearbutton").click(function(){
					var name =$('#namelist').val();
					var yearname =$('#yearlistrecord').val();
			
				if(name == 0)
	            {
		
	         alert("plz select name");
	         return false;
	
	
	             }
				 if(yearname == 0)
	            {
		
	         alert("plz select year");
	         return false;
	
	
	             }
				
				
		      });
		$("#monthbutton").click(function(){
					var namelistrecords =$('#finalmonthnamelist').val();
					var monthnamelist =$('#monthlistrecord').val();
			
			
			
			
			
			if(namelistrecords == 0)
	            {
		
	         alert("plz select name");
	         return false;
	
	
	             }
				
			
			
			 if(monthnamelist == 0)
	            {
		
	         alert("plz select month");
	         return false;
	
	
	             }
			
			
			
			
			
			
			
			
			
			
			
			
				
				

				
				
			   
			  
			});
			  
			  $("#todaybutton").click(function(){
					var namelists =$('#namelists').val();
					
			
			
			
			
			
			if(namelists == 0)
	            {
		
	         alert("plz select name");
	         return false;
	
	
	             }
				
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
				
				

				
				
			   
			  
			});
		
			});
			
			
		
			</script>
			
			<script type="text/javascript">
			
			$(document).ready(function(){
			
				
		      });
		
			   
			  
			  
			  
		
			});
			
			
		
			</script>
			
			
			
			
			
			
			
			
			
				<script type="text/javascript">
			
			$(document).ready(function(){
			$("#currentbutton").click(function(){
					var teamname =$('#employeeteamnamelist').val();
					var projectname =$('#employeeprojectlist').val();
					
			
				if(teamname == 0)
	            {
		
	         alert("plz select teamname");
	         return false;
	
	
	             }
				 if(projectname == 0)
	            {
		
	         alert("plz select projectname");
	         return false;
	
	
	             }
				
				
		      });
		
			   
			  
			  
			  
		
			});
			
			
		
			</script>
			<script type="text/javascript">
			
			$(document).ready(function(){
			$("#deletebutton").click(function(){
				
					var deletenames =$('#namelistss').val();
					
			
			
				 if(deletenames == 0)
	            {
		
	         alert("plz select names"); 
	         return false;
	
	
	             }
				
				
		      });
		
			   
			  
			  
			  
		
			});
			
			
		
			</script>
			</head>
			
			<body>
			
	
			
		
			
			
		<div class="container-fluid" id="headerlist">
    <h1>

         <button type="button"  class="btn btn-default" id="projectlist" >
         <span class="glyphicon glyphicon-plus-sign"> </span>
       ADD NEW EMPLOYEE</button>
		
		   <button type="button"  class="btn btn-default" id="recordfinal" >
         <span class="glyphicon glyphicon-book" > </span>
        EMPLOYEE LIST</button>
		
		
		<button type="button"  class="btn btn-default" id="completeproject" >
         <span class="glyphicon glyphicon-th-list" > </span>
        EMPLOYEE RECORD</button>
		
		
		<button type="button"  class="btn btn-default" id="deleteproject" >
         <span class="glyphicon glyphicon-trash" > </span>
        DELETE RECORD</button>
		
             <!--button type="button" id="home" class="btn btn-default"  >
         <span class="glyphicon glyphicon-home" > </span>
        HOME</button-->

         <a href="innowelladminpage.php"> <button type="button" id="home" class="btn btn-default"  >
         <span class="glyphicon glyphicon-home" > </span>
        HOME</button></a>

		</h1>
	
  
	
	
	
  </div>
  <div class="row" id="addnewemployeeform">
  
   <form class="form-horizontal" role="form" method="POST" id="addnewemployee">
      <h3 id="projecttitle">  ADD NEW EMPLOYEE </h3>
	  <br>
   <div class="form-group">
      <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name"style="width: 350px">
       </div>
	   <div class="form-group">
	   <label for="TEAM">Team:</label>
       <select class="form-control" style="width:350px" id="team" name="team">
        <option value="">select option</option>
   
       <option value="Electrical">Electrical</option>
       <option value="Green building">Green building</option>
	   <option value="power safety ">power safety </option>
       <option value="software development">software development</option>

     </select>
    </div>
	     <div class="form-group">
       <label for="project name">username:</label>
      <input type="text" class="form-control" id="username"  name="username" placeholder="Enter your username" style="width: 350px">
    </div>
       <div class="form-group">
       <label for="company name">password:</label>
      <input type="text" class="form-control" id="password" name="password" placeholder="Enter your password" style="width: 350px">
    </div>
	 
	  
	 
   <br>
    <button type="submit" name="submit1" class="btn btn-primary" id="addprojectbutton">submit</button>
   
    <br>
   
   
   <img id="addprojectimag" class="img-circle" alt="Cinque Terre" src="assets/newemployee.jpg"/>
   
   
   </form>
  
  </div>
  

 <div class="row" id="projectviewform">
<?php
  
 
  $monthnam="";
 

 
    $host="localhost";
	$user="root";
	$password="";
	
	$conn=mysql_connect($host,$user,$password);
	$db=mysql_select_db("facebook",$conn);
	 $query="select id,name,email,mobilenumber,teamname,username,password from signup";
	   $a=mysql_query($query,$conn);
	   
	   
	   
	    $count=mysql_num_rows($a);
		 
		
if($count>0)
{
	   echo "<h3 id=\"total\"> <b> EMPLOYEE LIST <b> </h3>";
	   echo "<br>";
	   echo  "<table class=\"table\" id=\"tablemonth\">";
   
        echo  "<tbody>";
	   echo "<th>Name</th>";
       echo "<th>Email</th>";
        echo "<th>Mobilenumber</th>";
		echo  "<th>Team name</th>";
		echo "<th>usernamename</th>";
		 echo "<th>password</th>";
		  echo "<th></th>";
		 
	
	while($row=mysql_fetch_array($a))
		
  { 
	  
	  $name=$row['name'];
	  $email=$row['email'];
	  $mobilenumber=$row['mobilenumber'];
	  $teamname=$row['teamname'];
	  $username=$row['username'];
      $password=$row['password'];  
	  
      $id=$row['id'];
  
  
  
  
  ?>
		
	  
		 
		 
      
      <tr>
       
        <td> <?php echo $name;?> </td>
        <td> <?php echo $email;?> </td>
		 <td> <?php echo $mobilenumber;?> </td>
		  <td> <?php echo $teamname;?> </td>
		   <td> <?php echo $username;?> </td>
		    <td> <?php echo $password;?> </td>
			
			<td><button type="submit" id="delete" name="delete" data-id=<?php echo $id;?> class="btn btn-default delete">
         <span class="glyphicon glyphicon-trash" > </span>
        </button> </td>
      </tr>
	   
        
		
		
<?php
 
  }
 echo  "</tbody>";
 echo   "</table>";	
}
   
	
  
  else{
	   $monthnam="no record list";
	
	  
	  
  }
  
?>

  <p align="center" id="nolist"> <?php echo $monthnam; ?> </p>






 
 </div>
 <div class="row" id="employeeeprojectlistselect">
 <h3 id="completeprojecttitle" > <b> VIEW EMPLOYEE RECORD </b> </h3>
 <form method="POST">
	  <button type="button"  class="btn btn-default" id="yearrecord" >
         <span class="glyphicon glyphicon-hand-right " > </span>
       <b>YEAR</b></button> &nbsp &nbsp 
		
		   <button type="button"  class="btn btn-default" id="monthrecord" >
         <span class="glyphicon glyphicon-hand-right " > </span>
        <b>MONTH</b></button> &nbsp&nbsp 
		 <button type="button"  class="btn btn-default"  name="submit3" id="todayrecord" >
         <span class="glyphicon glyphicon-hand-right " > </span>
        <b>TODAY</b></button>
		 <button type="button"  class="btn btn-default" id="close" >
         <span class="glyphicon glyphicon-remove-circle gi-2x" > </span>
        </button>
		</form>
		<br><br>
  <form class="form-inline" role="form" method="POST" id="employeeprojectrecord">
		<div  class="form-group">
        <div class="col-sm-10">
       <select class="form-control" style="width:150px" id="namelist" name="namelist">
        <option value=" ">select name</option>
   
       
     <?php
    $host="localhost";
	$user="root";
	$password="";
	
	$conn=mysql_connect($host,$user,$password);
	$db=mysql_select_db("facebook",$conn);
	 $query="select name from signup";
	 $a=mysql_query($query,$conn);
	  $count=mysql_num_rows($a);
		 
		


	while($row=mysql_fetch_array($a))
		
  { 
	  $name=$row[name];
	  
?>	   
  <option value="<?php echo $name ?>"> <?php echo $name ?> </option>
<?php
  }

?>

     </select>
     </div>
    </div>
	<div  class="form-group">
        <div class="col-sm-10">
       <select class="form-control" style="width:150px" id="yearlistrecord" name="yearlistrecord">
        <option value=" ">select year</option>
   
       <option value="2016">2016</option>
       <option value="2015">2015</option>
	   <option value="2014">2014</option>
       <option value="2013">2013</option>

     </select>
     </div>
    </div>
	&nbsp &nbsp &nbsp
    <button type="submit" class="btn btn-primary"  id="yearbutton" name="yearbutton">search list</button>
	</form>
	
<!--month--->
<form class="form-inline" role="form" method="POST" id="monthprojectrecord">
		<div  class="form-group">
        <div class="col-sm-10">
       <select class="form-control" style="width:150px" id="finalmonthnamelist" name="finalmonthnamelist">
        <option value=" ">select name</option>
   
       
     <?php
    $host="localhost";
	$user="root";
	$password="";
	
	$conn=mysql_connect($host,$user,$password);
	$db=mysql_select_db("facebook",$conn);
	 $query="select name from signup";
	 $a=mysql_query($query,$conn);
	  $count=mysql_num_rows($a);
		 
		


	while($row=mysql_fetch_array($a))
		
  { 
	  $name=$row[name];
	  
?>	   
  <option value="<?php echo $name ?>"> <?php echo $name ?> </option>
<?php
  }

?>

     </select>
     </div>
    </div>
	<div  class="form-group">
        <div class="col-sm-10">
       <select class="form-control" style="width:150px" id="monthlistrecord" name="monthlistrecord">
        <option value=" ">select month</option>
   
      
   
       <option value="January">January</option>
       <option value="February">February</option>
	     <option value="March">March</option>
		   <option value="April">April</option>
		     <option value="May">May</option>
			  <option value="June">June</option>
		     <option value="July">July</option>

			  <option value="August">August</option>
		     <option value="September">September</option>

			  <option value="October">October</option>
		     <option value="November">November</option>
			 <option value="December">December</option>
     </select>
     </div>
    </div>
	&nbsp &nbsp &nbsp
    <button type="submit" class="btn btn-primary"  id="monthbutton" name="monthbutton">search list</button>
	</form>

<!--today-->

 <form class="form-inline" role="form" method="POST" id="employeeprojectrecordtoday">
		<div  class="form-group">
        <div class="col-sm-10">
       <select class="form-control" style="width:150px" id="namelists" name="namelists">
        <option value=" ">select name</option>
   
       
     <?php
    $host="localhost";
	$user="root";
	$password="";
	
	$conn=mysql_connect($host,$user,$password);
	$db=mysql_select_db("facebook",$conn);
	 $query="select name from signup";
	 $a=mysql_query($query,$conn);
	  $count=mysql_num_rows($a);
		 
		


	while($row=mysql_fetch_array($a))
		
  { 
	  $name=$row[name];
	  
?>	   
  <option value="<?php echo $name ?>"> <?php echo $name ?> </option>
<?php
  }

?>

     </select>
     </div>
    </div>
	
	&nbsp &nbsp &nbsp
    <button type="submit" class="btn btn-primary"  id="todaybutton" name="todaybutton">search list</button>
	</form>

<!--today-->

	
 
 </div>
 


 <div class="row" id="completeprojectlistyearresult">
 
<?php
  $monthnam="";
  if(isset($_POST['monthbutton']))
  { 


      $date="";
	  $time="";
	  $worktype="";
	  $projectname="";
	  $workstatusmind="";
	 $monthname="";
	 
	 
	  $selectnamelist="";
	 $selectmonthlist="";
	 
	 
	 
	 
     $selectnamelist=$_POST['finalmonthnamelist'];
	 $selectmonthlist=$_POST['monthlistrecord'];

 
 $host="localhost";
	$user="root";
	$password="";
	
	$conn=mysql_connect($host,$user,$password);
	$db=mysql_select_db("facebook",$conn);
	 $query="select date,time,workstatusmind,projectname,worktype from workstatus where updatename='".$selectnamelist."' and monthname='".$selectmonthlist."'";
	 
	   $a=mysql_query($query,$conn);
	    $count=mysql_num_rows($a);
		 
		
if($count>0)
{
	   echo "<h3 id=\"finalcompletetitle\"><b>COMPLETE PROJECT  TEAM </b></h3>";
	   echo "<br>";
	   echo  "<table class=\"table\" id=\"completetable\">";
   
        echo  "<tbody>";
	  
       echo "<th>Date</th>";
        echo "<th>Time</th>";
		 echo "<th>worktype</th>";
			echo "<th>projectname</th>";
		echo  "<th>workstatus</th>";
	
		
		
		
		
	
	while($row=mysql_fetch_array($a))
		
  { 
  
	  
	  $date=$row['date'];
	  $time=$row['time'];
	  $worktype=$row['worktype'];
	  $projectname=$row['projectname'];
	  $workstatusmind=$row['workstatusmind'];
	 

	  
	  
     
  
  
  
  
  ?>
		
	
		 
		 
      
      <tr>
       
        <td> <?php echo $date;?> </td>
        <td> <?php echo  $time;?> </td>
		 <td> <?php echo  $worktype;?> </td>
		  <td> <?php echo  $projectname;?> </td>
		   <td> <?php echo  $workstatusmind?> </td>
		  
		   
      </tr>
	   
        
		
		
<?php
 
  }
 echo  "</tbody>";
 echo   "</table>";	
}
   
	
  
  else{
	   $monthnam="no record list";
	
	  
	  
  }
  }
?>	
  <p align="center"> <?php echo $monthnam; ?> </p>



 <?php
  $monthnam="";
  if(isset($_POST['yearbutton']))
  { 


      $date="";
	  $time="";
	  $worktype="";
	  $projectname="";
	  $workstatusmind="";
	 $monthname="";
	 
	 
	  $selectnamelist="";
	 $selectyearlist="";
	 
	 
	 
	 
     $selectnamelist=$_POST['namelist'];
	 $selectyearlist=$_POST['yearlistrecord'];

 
 $host="localhost";
	$user="root";
	$password="";
	
	$conn=mysql_connect($host,$user,$password);
	$db=mysql_select_db("facebook",$conn);
	 $query="select date,time,workstatusmind,projectname,worktype,monthname from workstatus where updatename='".$selectnamelist."' and year='".$selectyearlist."'";
	 
	   $a=mysql_query($query,$conn);
	    $count=mysql_num_rows($a);
		 
		
if($count>0)
{
	   echo "<h3 id=\"finalcompletetitle\"><b>COMPLETE PROJECT  TEAM </b></h3>";
	   echo "<br>";
	   echo  "<table class=\"table\" id=\"completetable\">";
   
        echo  "<tbody>";
	  
       echo "<th>Date</th>";
        echo "<th>Time</th>";
		 echo "<th>worktype</th>";
			echo "<th>projectname</th>";
		echo  "<th>workstatus</th>";
		echo  "<th>month</th>";
	
		
		
		
		
	
	while($row=mysql_fetch_array($a))
		
  { 
  
	  
	  $date=$row['date'];
	  $time=$row['time'];
	  $worktype=$row['worktype'];
	  $projectname=$row['projectname'];
	  $workstatusmind=$row['workstatusmind'];
	  $month=$row['monthname'];
	 

	  
	  
     
  
  
  
  
  ?>
		
	
		 
		 
      
      <tr>
       
        <td> <?php echo $date;?> </td>
        <td> <?php echo  $time;?> </td>
		 <td> <?php echo  $worktype;?> </td>
		  <td> <?php echo  $projectname;?> </td>
		   <td> <?php echo  $workstatusmind?> </td>
		   <td> <?php echo  $month?> </td>
		  
		   
      </tr>
	   
        
		
		
<?php
 
  }
 echo  "</tbody>";
 echo   "</table>";	
}
   
	
  
  else{
	   $monthnam="no record list";
	
	  
	  
  }
  }
?>	
  <p align="center"> <?php echo $monthnam; ?> </p>
  
  
  
  
  
  
  <?php
  $monthnam="";
  if(isset($_POST['todaybutton']))
  { 


      $date="";
	  $time="";
	  $worktype="";
	  $projectname="";
	  $workstatusmind="";
	 $monthname="";
	 
	 
	  $selectnamelist="";
	 $selectdatelist="";
	 
	 
	 
	 
     $selectnamelist=$_POST['namelists'];
	 $selectdatelist=date("m/d/Y");

 
 $host="localhost";
	$user="root";
	$password="";
	
	$conn=mysql_connect($host,$user,$password);
	$db=mysql_select_db("facebook",$conn);
	 $query="select time,workstatusmind,projectname,worktype from workstatus where updatename='".$selectnamelist."' and date='".$selectdatelist."'";
	
	 
	   $a=mysql_query($query,$conn);
	    $count=mysql_num_rows($a);
		 
		
if($count>0)
{
	   echo "<h3 id=\"finalcompletetitle\"><b>COMPLETE PROJECT  TEAM </b></h3>";
	   echo "<br>";
	   echo  "<table class=\"table\" id=\"completetable\">";
   
        echo  "<tbody>";
	  
       echo "<th>Date</th>";
       
		 echo "<th>worktype</th>";
			echo "<th>projectname</th>";
		echo  "<th>workstatus</th>";
		
	
		
		
		
		
	
	while($row=mysql_fetch_array($a))
		
  { 
  
	  
	 
	  $time=$row['time'];
	  $worktype=$row['worktype'];
	  $projectname=$row['projectname'];
	  $workstatusmind=$row['workstatusmind'];
	 

	  
	  
     
  
  
  
  
  ?>
		
	
		 
		 
      
      <tr>
       
      
        <td> <?php echo  $time;?> </td>
		 <td> <?php echo  $worktype;?> </td>
		  <td> <?php echo  $projectname;?> </td>
		   <td> <?php echo  $workstatusmind?> </td>
		  
		   
      </tr>
	   
        
		
		
<?php
 
  }
 echo  "</tbody>";
 echo   "</table>";	
}
   
	
  
  else{
	   $monthnam="no record list";
	
	  
	  
  }
  }
?>	
  <p align="center"> <?php echo $monthnam; ?> </p>
 </div>
 


  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <!---BALA-->
  <div class="row" id="deleteprojectlistselect">
 <h3 id="deleteprojecttitle" > <b> DELETE EMPLOYEE RECORD </b> </h3>
  <form class="form-inline" role="form" method="POST" id="deleteprojectrecord">
			<div  class="form-group">
        <div class="col-sm-10">
       <select class="form-control" style="width:150px" id="namelistss" name="namelistss">
        <option value=" ">select name</option>
   
       
     <?php
    $host="localhost";
	$user="root";
	$password="";
	
	$conn=mysql_connect($host,$user,$password);
	$db=mysql_select_db("facebook",$conn);
	 $query="select name from signup";
	 $a=mysql_query($query,$conn);
	  $count=mysql_num_rows($a);
		 
		


	while($row=mysql_fetch_array($a))
		
  { 
	  $name=$row[name];
	  
?>	   
  <option value="<?php echo $name ?>"> <?php echo $name ?> </option>
<?php
  }

?>

     </select>
     </div>
    </div>
	  <button type="submit" class="btn btn-primary"  id="deletebutton" name="deletebutton">delete project</button>
	</form>
	
</div>	
 <div class="row" id="deleteprojectlistresult">
<?php
  $monthnam="";
  if(isset($_POST['deletebutton']))
  { 


      
	     $selectnames="";

     $selectnames=$_POST['namelistss'];
	 
 
 $host="localhost";
	$user="root";
	$password="";
	
	$conn=mysql_connect($host,$user,$password);
	$db=mysql_select_db("facebook",$conn);
	 $query="delete  from workstatus where  updatename='".$selectnames."'";
	   $a=mysql_query($query,$conn);
	 
		 
		

	  
	   $monthnam="<img class=\"deletelogo\" id=\"logo1\" src=\"assets/delete1.jpg\">";
	  
	

	   	

  
  }
 
?>	
  <p align="center"> <?php echo $monthnam; ?> </p>



 
 </div>
  
 
 


  
 
</body>
</html>
 
      
        	
		
