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
				
				margin-left:850px;
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
			#eventlist{
				
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
				
				
				
				#recordfinal{
					
					border-color:rgba(51, 102, 255, 1);
					background-color: rgba(51, 102, 255, 1);
				}
				
				#headerlist{
					background-color: rgba(51, 102, 255, 1);
					
				}
				#addnewemployee{
					
					margin-left:100px;
					
					
					
				}
				#addneweventform{
					
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
			
			 
          #eventimag{
			  width:500px;
			  height:400px;
			  margin-left:450px;
			  margin-top:-250px;
			  
			  
		  }

        #eventsviewform{
			
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
		
	
	
	#finalcompletetitle{
		
		
		text-align:center;
	}
	#finalcompletetitleyear{
		
		
		text-align:center;
	}
	
	
	
	
				
				
				
	#nolist{
		
		
		margin-top:100px;
		font-size:30px;
		text-align:center;
	}
				


			</style>
			
			<script type="text/javascript">
			
			$(document).ready(function(){
			$("#eventlist").click(function(){
				$("#eventsviewform").hide(1000);
				$("#addneweventform").show(1000);
				$("#employeeeprojectlistselect").hide(1000);
				$("#completeprojectlistresult").hide(1000);
				$("#completeprojectlistyearresult").hide(1000);
				  $("#currentprojectlistselect").hide(1000);
				   $("#currentprojectlistresult").hide(1000);
				    $("#deleteprojectlistselect").hide(1000);
					 $("#deleteprojectlistresult").hide(1000);
				   
				  
				   });
				   $('#recordfinal').click(function(){
				  
				$("#eventsviewform").show(1000);
				$("#addneweventform").hide(1000);
				
				   });
						
			            
						
						  

						 
						
						 
						 
						 
						 
						 
			            
						     
						 
						
						 
						 
						 
						 
				   
						
						
			});
			
			
		
			</script>
			
			
	<script type="text/javascript">
		
		$(document).ready(function() {	
		$(".delete").click(function(){
			var rowid =$(this).attr('data-id');
			
			
			 $.ajax({
        type: "POST",
        url: "deleteevents.php",
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
            $(function () {
                $('#datetimepicker1').datetimepicker({
			       
					 
					
				});
            });
        </script>
		
						<script type="text/javascript">
			
			$(document).ready(function(){
				$("#addeventsbutton").click(function(){
					
					 var addnewevents=$('#events').val();
					   var lastdateandtime=$('#lastdateandtime').val();
						var editdate=lastdateandtime.substring(0,10);
			          
			
			          var edittime=lastdateandtime.substring(10,19);
					  if(addnewevents == 0)
	                  {
		
	                    alert("plz enter events");
	                        return false;
	
	
	                  }
				   if(lastdateandtime == 0)
	                  {
		
	                    alert("plz enter date and time");
	                        return false;
	
	
	                   }
					   
					   
					   $.ajax({
                   type: "POST",
                   url: "eventaddlist.php",
		           data: 'addnewevents='+addnewevents+'&editdate='+editdate+'&edittime='+edittime,
                    cache: false,
                   success: function()
                            {
								
								location.reload();
                                    
                                
                            }

});
			
				             
		      });
		
			   
			  
			  
			  
		
			});
			
			
		
			</script>
			
			
			
			
			
			
			
			
			
						</head>
			
			<body>
			
	
			
		
			
			
		<div class="container-fluid" id="headerlist">
    <h1>

         <button type="button"  class="btn btn-default" id="eventlist" >
         <span class="glyphicon glyphicon-plus-sign"> </span>
       ADD NEW EVENTS</button>
		
		   <button type="button"  class="btn btn-default" id="recordfinal" >
         <span class="glyphicon glyphicon-book" > </span>
       EVENTS LIST</button>
		
		
		
             <!--button type="button" id="home" class="btn btn-default"  >
         <span class="glyphicon glyphicon-home" > </span>
        HOME</button-->

         <a href="innowelladminpage.php"> <button type="button" id="home" class="btn btn-default"  >
         <span class="glyphicon glyphicon-home" > </span>
        HOME</button></a>

		</h1>
	
  
	
	
	
  </div>
  <div class="row" id="addneweventform">
  
   <form class="form-horizontal" role="form" method="POST" id="addnewemployee">
      <h3 id="projecttitle">  ADD NEW EVENTS </h3>
	  <br>

   <div class="form-group">
      <label for="EnterEvents">Enter Events</label>
       <textarea class="form-control" id="events" name="events" style="width:350px"></textarea>
       </div>
	    <div class="form-group">
	  <label for="date">Eventdate and Time:</label>
	  
	  
	  
                <div class='input-group date' id='datetimepicker1'>
				<span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    <input type='text' class="form-control" placeholder= "date and time"  id="lastdateandtime"  
					name="lastdateandtime" style="width: 310px"/>
                    
                </div>
            </div>
	
	 
	  
	 
   <br>
    <button type="submit" name="addeventsbutton" class="btn btn-primary" id="addeventsbutton">submit</button>
   
    <br>
   
   
   <img id="eventimag" class="img-circle" alt="Cinque Terre" src="assets/envents.jpg"/>
   
   
   </form>
  
  </div>
  

 <div class="row" id="eventsviewform">
<?php
  
 
  $monthnam="";
 

 
    $host="localhost";
	$user="root";
	$password="";
	
	$conn=mysql_connect($host,$user,$password);
	$db=mysql_select_db("facebook",$conn);
	 $query="select id,eventname,date,time from eventslist";
	   $a=mysql_query($query,$conn);
	   
	   
	   
	    $count=mysql_num_rows($a);
		 
		
if($count>0)
{
	   echo "<h3 id=\"total\"> <b> EVENTS LIST <b> </h3>";
	   echo "<br>";
	   echo  "<table class=\"table\" id=\"tablemonth\">";
   
        echo  "<tbody>";
	   echo "<th>Eventname</th>";
       echo "<th>Date</th>";
        echo "<th>Time</th>";
		
		  echo "<th></th>";
		 
	
	while($row=mysql_fetch_array($a))
		
  { 
	  
	  $eventlist=$row['eventname'];
	  $date=$row['date'];
	  $time=$row['time'];
	  
	  
      $id=$row['id'];
  
  
  
  
  ?>
		
	  
		 
		 
      
      <tr>
       
        <td> <?php echo  $eventlist;?> </td>
        <td> <?php echo $date;?> </td>
		 <td> <?php echo  $time;?> </td>
		 
			
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
 
</body>
</html>
 
      
        	
		
