<?php
 session_start();
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
	 
	
	  
     
      

			
			
			<style>
			html, body {
   height: 100%;
  }
			#home{
				
				margin-left:800px;
				border-color:white;
				
			}
			#record{
				
				border-color:white;
			}
			#projectlist{
				
				border-color:white;
				
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
					margin-left:800px;
					border-color:white;
					
				}
				#getmonthrecord{
					
					display:none;
					position: absolute;
					height:auto;
					  width:auto;
					
					
				}
				#monthlist{
					border-color:black;
					margin-left:400px;
					
					
				}
				#getyearrecord{
					height:auto;
					  width:auto;
					display:none;
					position: absolute;
					
					
				}
				#yearlist{
					border-color:black;
					margin-left:400px;
					
					
				}
				#recordfinal{
					
					border-color:white;
				}
				#projectlistfilter{
					display:none;
					
					height:auto;
					  width:auto;
					 
				}
				#projectlisttitle{
					
					text-align:center;
				}
				
				#monthtitle{
				text-align:center;	
					
					
				}
				#reartitle{
					text-align:center;	
				}
				#todaytitle{
					text-align:center;	
				}
			</style>
			
			<script type="text/javascript">
			
			$(document).ready(function(){
			$("#recordfinal").click(function(){
				$("#projectlistfilter").hide(1000);
				$("#recordlist").show(1000);
				   });
				   $('#close').click(function(){
				  
				   $("#recordlist").hide(1000);
				   });
						
			            $("#yearrecord").click(function(){
				
				            $("#getyearrecord").show(1000);
							 $("#getmonthrecord").hide(1000);

				         });
						 
						 
						 
			              $("#monthrecord").click(function(){
							   $("#getyearrecord").hide(1000);
				
				            $("#getmonthrecord").show(1000);
							  $("#projectlistfilter").hide(1000);
							
				         });
						      $("#todayrecord").click(function(){
							   $("#getyearrecord").hide(1000);
				
				               $("#getmonthrecord").hide(1000);
							   $("#projectlistfilter").hide(1000);
							
				         });
						     $("#projectlist").click(function(){
								 
							  $("#getmonthrecord").hide(1000);
					          $("#recordlist").hide(1000);
							  $("#projectlistfilter").show(1000);
							  
                              $("#monthrecordlist").hide(1000);
							   
							    
							
				         });
						  
						 
						
						 
						 
						 
						 
				   
						
						
			});
			
			
		
			</script>
			
			<script type="text/javascript">
			
			$(document).ready(function(){
			$("#monthrecordsubmit").click(function(){
					var monthlist =$('#monthlist').val();
			
				if(monthlist == 0)
	            {
		
	         alert("plz select your month");
	         return false;
	
	
	             }
				
				
		      });
		
			   
			  
			  
			  
		
			});
			
			
		
			</script>
			
			
			
			<script type="text/javascript">
			
			$(document).ready(function(){
			$("#submit1").click(function(){
					 
				var yearlist =$('#yearlist').val();
			
				if(yearlist == 0)
	            {
		
	         alert("plz select your year");
	         return false;
	
	
	             }
				
				
		      });
		
			   
					
		
			   
			  
			  
			  
			  
			  
		
			});
			
			
		
			</script>
			<script type="text/javascript">
			
			$(document).ready(function(){
				
				
			  
		
			});
			
			
		
			</script>
			
			
			<!--script type="text/javascript">
			
			$(document).ready(function(){
			$('button[id="addsubmit"]').click(function(){
				var projectid =$(this).attr('data-id');
				//$('button[id="addsubmit"]').hide(1000);
				$('button[data-id="'+projectid+'"]').show(1000);
				$('button[data-id="'+projectid+'"]').show(1000);
				 //$('button[id="addsubmit"]').css("visibility","hidden");
				
				alert(projectid);
				return false;
                 });
				  });
            </script-->
			
			
			<script type="text/javascript">
			
			$(document).ready(function(){
				
				
					$(".addproject").click(function(){
						
						var rowid=$(this).attr('data-id');
						var employeeusername='<?php echo $_SESSION['user1']?>';
						
	                   
						

        $.ajax({
                   type: "POST",
                   url: "employeeaddprojectlist.php",
		         data: {'rowid':rowid,'employeeusername':employeeusername}, 
                    
                   success: function(data)
                            {
								 
                                
								
								//$('button[data-id='+rowid+']').attr("disabled", true);
								//$('button[data-id="'+rowid+'"]').remove();
						
								alert(data);
                                     
                                
                            }

                         });
		
			 

				

		
				
		      });
			  $(".completeproject").click(function(){
						
						var rowid=$(this).attr('data-id');
						var employeeusername='<?php echo $_SESSION['user1']?>';
						
	                 	

        $.ajax({
                   type: "POST",
                   url: "employeecompleteprojectlist.php",
		         data: {'rowid':rowid,'employeeusername':employeeusername}, 
                    
                   success: function(data)
                            {
								 
                               
								
								alert(data);
                                     
                                
                            }

                         });
		
			 alert ("congratulations for you complete project");


		
				
		      });
		
			   
			  
			  
			  
		
			});
			
			
		
			</script>
		
			</head>
			
			<body>
			
	
			
		
			
			
		<div class="container">
    <h1>

         <button type="button"  class="btn btn-default" id="projectlist" >
         <span class="glyphicon glyphicon-book" > </span>
       PROJECT LIST</button>
		
		   <button type="button"  class="btn btn-default" id="recordfinal" >
         <span class="glyphicon glyphicon-book" > </span>
        record</button>
		
             <!--button type="button" id="home" class="btn btn-default"  >
         <span class="glyphicon glyphicon-home" > </span>
        HOME</button-->

         <a href="innowelluseraccount.php"> <button type="button" id="home" class="btn btn-default"  >
         <span class="glyphicon glyphicon-home" > </span>
        HOME</button></a>

		</h1>
	
  	<hr>
	
	
	
	<div class="row" id="recordlist">
	    <h4 align="center"> EMPLOYEE RECORD </h4>
	<form method="POST">
	   <button type="button"  class="btn btn-default" id="yearrecord" >
         <span class="glyphicon glyphicon-hand-right " > </span>
       YEAR</button> &nbsp &nbsp 
		
		   <button type="button"  class="btn btn-default" id="monthrecord" >
         <span class="glyphicon glyphicon-hand-right " > </span>
        MONTH</button> &nbsp&nbsp 
		 <button type="submit"  class="btn btn-default"  name="submit3" id="todayrecord" >
         <span class="glyphicon glyphicon-hand-right " > </span>
        TODAY</button>
		 <button type="button"  class="btn btn-default" id="close" >
         <span class="glyphicon glyphicon-remove-circle gi-2x" > </span>
        </button>
		</form>
		<br><br>
		
		
		
		 <form class="form-inline" role="form" method="POST"id="getmonthrecord">
		<div  class="form-group">
        <div class="col-sm-10">
       <select class="form-control" style="width:150px" id="monthlist" name="monthlist">
        <option value=" ">select option</option>
   
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
    <button type="submit"  id="monthrecordsubmit" class="btn btn-primary"  name="submit2">search month</button>
	</form>
	
	 <form class="form-inline" role="form" method="POST"id="getyearrecord">
		<div  class="form-group">
        <div class="col-sm-10">
       <select class="form-control" style="width:150px" id="yearlist" name="yearlist">
        <option value=" ">select option</option>
   
       <option value="2016">2016</option>
       <option value="2015">2015</option>
	   <option value="2014">2014</option>
       <option value="2013">2013</option>

     </select>
     </div>
    </div>
	&nbsp &nbsp &nbsp
    <button type="submit" class="btn btn-primary"  id="submit1" name="submit1">search year</button>
	</form>
		
      
        </div>
		
    
      
     
      <div class="row" id="monthrecordlist">
	  
	  
	  
	  
	  
	     <!--table class="table" id="tablemonth">
   
         <tbody>
	    <th>date</th>
        <th>Time</th>
        <th>work</th>
		 <th>projectname</th>
		 <th>worktype</th>
		 <th>month</th-->
  
<?php
  
 
  $monthnam="";
  if(isset($_POST['submit2']))
  { 

  
  $monthname=$_POST['monthlist'];
   $yearlist=date("Y");


  

 
 $host="localhost";
	$user="root";
	$password="";
	
	$conn=mysql_connect($host,$user,$password);
	$db=mysql_select_db("facebook",$conn);
	 $query=" select name,date,time,workstatusmind,projectname,worktype, monthname from workstatus where 
	   name='".$_SESSION['user1']."' AND monthname='".$monthname."'  AND year='".$yearlist."'";
	   $a=mysql_query($query,$conn);
	    $count=mysql_num_rows($a);
		 
		
if($count>0)
{
	   echo "<h3 id=\"monthtitle\"><b>MONTHWISE RECORD</b></h3>";
	   echo "<br>";
	   echo  "<table class=\"table\" id=\"tablemonth\">";
   
        echo  "<tbody>";
	   echo "<th>date</th>";
       echo "<th>Time</th>";
        echo "<th>work</th>";
		echo  "<th>projectname</th>";
		echo "<th>worktype</th>";
		 echo "<th>month</th>";
	
	
	while($row=mysql_fetch_array($a))
		
  { 
	  
	  $date=$row['date'];
	  $time=$row['time'];
	  $workstatusmind=$row['workstatusmind'];
	  $projectname=$row['projectname'];
	  $worktype=$row['worktype'];
      $monthname=$row['monthname'];  
  
  
  
  
  
  ?>
		
	  
		 
		 
      
      <tr>
       
        <td> <?php echo $date;?> </td>
        <td> <?php echo $time;?> </td>
		 <td> <?php echo $workstatusmind;?> </td>
		  <td> <?php echo $projectname;?> </td>
		   <td> <?php echo $worktype;?> </td>
		    <td> <?php echo $monthname;?> </td>
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
  if(isset($_POST['submit1']))
  { 

  
  $yearlist=$_POST['yearlist'];
  

  

 
 $host="localhost";
	$user="root";
	$password="";
	
	$conn=mysql_connect($host,$user,$password);
	$db=mysql_select_db("facebook",$conn);
	 $query=" select name,date,time,workstatusmind,projectname,worktype, monthname from workstatus where 
	   name='".$_SESSION['user1']."'  AND year='".$yearlist."'";
	   $a=mysql_query($query,$conn);
	   
	   
	   
	    $count=mysql_num_rows($a);
		 
		
if($count>0)
{
	   echo "<h3 id=\"reartitle\"> <b>YEARWISE RECORD </b> </h3>";
	   echo "<br>";
	   echo  "<table class=\"table\" id=\"tablemonth\">";
   
        echo  "<tbody>";
	   echo "<th>date</th>";
       echo "<th>Time</th>";
        echo "<th>work</th>";
		echo  "<th>projectname</th>";
		echo "<th>worktype</th>";
		 echo "<th>month</th>";
	
	
	while($row=mysql_fetch_array($a))
		
  { 
	  
	  $date=$row['date'];
	  $time=$row['time'];
	  $workstatusmind=$row['workstatusmind'];
	  $projectname=$row['projectname'];
	  $worktype=$row['worktype'];
      $monthname=$row['monthname'];  
  
  
  
  
  
  ?>
		
	  
		 
		 
      
      <tr>
       
        <td> <?php echo $date;?> </td>
        <td> <?php echo $time;?> </td>
		 <td> <?php echo $workstatusmind;?> </td>
		  <td> <?php echo $projectname;?> </td>
		   <td> <?php echo $worktype;?> </td>
		    <td> <?php echo $monthname;?> </td>
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
  if(isset($_POST['submit3']))
  { 

  
  $datelist=date("m/d/Y") ;
  

  

 
 $host="localhost";
	$user="root";
	$password="";
	
	$conn=mysql_connect($host,$user,$password);
	$db=mysql_select_db("facebook",$conn);
	 $query=" select name,date,time,workstatusmind,projectname,worktype from workstatus where 
	   name='".$_SESSION['user1']."'  AND date='".$datelist."'";
	   $a=mysql_query($query,$conn);
	   
	   
	   
	    $count=mysql_num_rows($a);
		 
		
if($count>0)
{
	   echo "<h3 id=\"todaytitle\"><b>TODAY WORKS </b></h3>";
	    echo "<br>";
	   echo  "<table class=\"table\" id=\"tablemonth\">";
      
        echo  "<tbody>";
	   echo "<th>date</th>";
       echo "<th>Time</th>";
        echo "<th>work</th>";
		echo  "<th>projectname</th>";
		echo "<th>worktype</th>";
		 
	
	
	while($row=mysql_fetch_array($a))
		
  { 
	  
	  $date=$row['date'];
	  $time=$row['time'];
	  $workstatusmind=$row['workstatusmind'];
	  $projectname=$row['projectname'];
	  $worktype=$row['worktype'];
      
  
  
  
  
  
  ?>
		
	  
		 
		 
      
      <tr>
       
        <td> <?php echo $date;?> </td>
        <td> <?php echo $time;?> </td>
		 <td> <?php echo $workstatusmind;?> </td>
		  <td> <?php echo $projectname;?> </td>
		   <td> <?php echo $worktype;?> </td>
		    
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
	  
	  
	  
	  <div class="row" id="projectlistfilter">
	
	  
	<?php
   
 
  $monthnam="";
 

 
 $host="localhost";
	$user="root";
	$password="";
	
	$conn=mysql_connect($host,$user,$password);
	$db=mysql_select_db("facebook",$conn);
	 $query="select id,companyname,projectname,projectlocation,lastdate,lasttime from adminaddprojectlist where teamname=(SELECT teamname FROM signup where  username='".$_SESSION['user1']."' )";
	   $a=mysql_query($query,$conn);
	   
	   
	   
	    $count=mysql_num_rows($a);
		 
		
if($count>0)
{       
	   echo "<h3 id=\"projectlisttitle\"> <b>PROJECT LIST </b></h3>";
	   echo "<br>";
	   echo  "<table class=\"table\" id=\"tablemonth\">";
   
        echo  "<tbody>";
	  
       echo "<th> company name</th>";
        echo "<th>project name</th>";
		echo  "<th>project location </th>";
		
		 echo "<th>submission date</th>";
		  echo "<th>submission time</th>";
		   echo "<th></th>";
	
	
	
	
	
	
	while($row=mysql_fetch_array($a))
		
  { 
	  
	 
	  $companyname=$row['companyname'];
	  $projectname=$row['projectname'];
	  $projectlocation=$row['projectlocation'];
	  $lastdate=$row['lastdate'];
     
	  $lasttime=$row['lasttime'];
      $id=$row['id'];
  
  
  
  
  ?>
		
	     <form  role="form" method="POST" id="addprojectform">
		 
		 
      
      <tr>
       
       
        <td> <?php echo $companyname;?> </td>
		 <td> <?php echo $projectname;?> </td>
		  <td> <?php echo $projectlocation;?> </td>
		 
		    <td> <?php echo $lastdate;?> </td>
			<td> <?php echo $lasttime;?> </td>
			<td><button type="button" id="add" name="add" data-id=<?php echo $id;?> class="btn btn-default addproject">
         <span class="glyphicon glyphicon-plus" > </span> ADD
        </button> <button type="submit" id="complete" name="complete" data-id=<?php echo $id;?> class="btn btn-default completeproject">
         <span class="glyphicon glyphicon-ok" > </span> Complete
        </button></td>
      </tr>
	   
        
		 </form>
		
<?php
 
  }
 echo  "</tbody>";
 echo   "</table>";
  
}
   
	
  
  else{
	   $monthnam="no record list";
	
	  
	  
  }
  
?>

  <p align="center"> <?php echo $monthnam; ?> </p>




	</div>
	  
  </div>
  
 
  
  
  

 
      
        	
		
