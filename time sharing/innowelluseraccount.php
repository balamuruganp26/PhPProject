
<?php
   session_start();

	
	if(isset($_POST['logout']))
	{
      
        session_unset($_SESSION['user1']); 
		 session_unset($_SESSION['pass1']); 
       session_destroy();
	     
        header("location:http://localhost/project/innnowelllogin.php");
		
		
		
	}
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
   background-color:#e9eaed;
   
}
#logout{
	 background-color: rgba(51, 102, 255, 1);
	 color:black;
	 border-color: rgba(51, 102, 255, 1);
	 font-size: 20px;
}

#custom-bootstrap-menu.navbar-default .navbar-brand {
    color: rgba(18, 17, 17, 1);
	
	
	
}
#custom-bootstrap-menu.navbar-default {
    font-size: 20px;
    background-color: rgba(51, 102, 255, 1);
    background: -webkit-linear-gradient(top, rgba(51, 102, 255, 1) 0%, rgba(51, 102, 255, 1) 100%);
    background: linear-gradient(to bottom, rgba(51, 102, 255, 1) 0%, rgba(51, 102, 255, 1) 100%);
    border-width: 1px;
    
}
#custom-bootstrap-menu.navbar-default .navbar-nav>li>a {
    color: rgba(5, 5, 5, 1);
    background-color: rgba(248, 248, 248, 0);
}
#custom-bootstrap-menu.navbar-default .navbar-nav>li>a:hover,
#custom-bootstrap-menu.navbar-default .navbar-nav>li>a:focus {
    color: rgba(242, 233, 233, 0.94);
    background-color: rgba(248, 248, 248, 0);
}
#custom-bootstrap-menu.navbar-default .navbar-nav>.active>a,
#custom-bootstrap-menu.navbar-default .navbar-nav>.active>a:hover,
#custom-bootstrap-menu.navbar-default .navbar-nav>.active>a:focus {
    color: rgba(85, 85, 85, 1);
    background-color: rgba(10, 9, 9, 1);
}
#custom-bootstrap-menu.navbar-default .navbar-toggle {
    border-color: #0a0909;
}
#custom-bootstrap-menu.navbar-default .navbar-toggle:hover,
#custom-bootstrap-menu.navbar-default .navbar-toggle:focus {
    background-color: #0a0909;
}
#custom-bootstrap-menu.navbar-default .navbar-toggle .icon-bar {
    background-color: #0a0909;
}
#custom-bootstrap-menu.navbar-default .navbar-toggle:hover .icon-bar,
#custom-bootstrap-menu.navbar-default .navbar-toggle:focus .icon-bar {
    background-color: #3366ff;
}
 #projectdetails{
		   background-color:white;
		     width:20%;
		     height:91.7%;
		     float:right;
			 right:0px;
			
			  border-left:5px solid;
			 border-color:black;
			 margin-right:0px;
			 margin-top:55px;
			 position:fixed;
			 right:0;
			 bottom:0;
		 
	 }	
	#report{
		 
		 background-color:white;
		 height:90%;
		 width:30%;
		 margin-left:670px;
		 margin-top:-2px;
		 border:5px solid;
		border-color:white;
		position:fixed;
		 border-radius:25px;
		 
	 }
	
#attendance{
	     background-color:white;
		     width:30%;
		     height:45.5%;
			 margin-top:300px;
             margin-left:670px;
	         border:5px solid;
			 border-color:white;
			 position:fixed;
			
			 	
	
}
#updatemind
{
	        background-color:white;
		     width:48%;
		     height:auto;
			 margin-top:65px;
			 margin-right:695px;
			 border:5px solid;
			 border-color:white;
			 
			border-radius: 25px;
	
}

	 
	
	#dateandtime{
		 background-color:white;
		margin-left:150px;
		margin-top:-40px;
	}
	#updateicon{
		
		margin-top:10px;
		font-size:20px;
		
		
	}
	#satausmind{
		 background-color:white;
		width:635px;
		margin-left:-29px;
		height:115px;
		overflow-x:hidden;
		overflow-y:hidden;
		margin-top:-7px;
		border-color:white;
		
	}
	#postbt{
		margin-left:405px;
		margin-top:-55px;
		
		}
		
#projectlist
   {
	  
		
          margin-top:15px;	
           margin-left:-25px;		  
	}
	#sublist{
		
		  margin-top:-35px;	
		  margin-left:150px;		
	}
	
	.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display:block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}
.eventsimgicons{
	width:380px;
	height:50px;
	
}

#reporthead{
	height:auto;
	width:30%;
	margin-top:-5px;
	position:fixed;
	  background-color:white;
	  
		margin-left:-20px;
		 border:10px solid;
		border-color:white;
		border-radius:25px;
}
 
.error{
color:red;
 	 float: none;
}
#getupdatestatus input.error {
border:1px solid red;
}
#getupdatestatus  select.error {
border:1px solid red;
}
#getupdatestatus textarea.error {
border:1px solid red;
}
#projectlist-error{
	
	 visibility: hidden;
}
#sublist-error{
	
	 visibility: hidden;
	
}
#getdateandtime-error{
	
	 visibility: hidden;
}
#satausmind-error{
	
	 visibility: hidden;
}


#resultstatus
{
	        background-color:white;
		     width:48%;
		     height:auto;
			 margin-top:5px;
			 margin-right:695px;
			 border:5px solid;
			 border-color:white;
			  font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
			border-radius: 25px;
	
}


#delete{
	margin-left:550px;
	margin-top:2px;
	border-color:white;
}




.more_button{
	
	background-color:white;
	margin-top:10px;
	width:40%;
	margin-left:50px;
	height:4%;
	text-align:center;
	border:1px solid;
	border-color:black;
	border-radius:25px;
	
}
#readmoreoption h4{
	
	
	margin-top:1px;
	font-family:Serif;
	
}


#readmoreoption h4 a:link,#readmoreoption h4 a:visited{
	
	
	 text-decoration: none;
	
}
.all_loaded{
	background-color:white;
	margin-top:10px;
	width:40%;
	margin-left:50px;
	height:4%;
	text-align:center;
	border:1px solid;
	border-color:black;
	border-radius:25px;
	
	}

#first{
	
	margin-top:-40px;
}

#profile{
	height:50px;
	width:50px;
	margin-top:-10px;
}
#usernameheader{
	
	
	margin-top:-40px;
	margin-left:55px;
	font-size:20px;
}
#projectlistfont{
	
	    font-family: "Comic Sans MS", cursive, sans-serif;
	
}
#projectlistfonthead{
	
	  font-family: Arial, Helvetica, sans-serif;
	
}
.newnotification{
	
	width:120px;
	height:80px;
	
}
#move{
	margin-left:200px;
	margin-top:-140px;
	
}
	 </style>
	
	 
	 
	  <script type="text/javascript"> 
	
	
	
	$(document).ready(function(){
		
		
   $("#getupdatestatus").validate({
	   
	   
	   errorPlacement: function(error, element) {
		 
    
	
   },
   
  
   
		
      rules: {
		  
		  getdateandtime:{
			   required: true,
			  
			   
			  
		  },
		  satausmind:{
			   required: true,
			  
		  },
		  projectlist:{
			   required: true,
			  
		  },
		  sublist:{
			   required: true,
			  
		  }
	  
	  },
	   messages: {
            getdateandtime: {
			   required: "please click date and time",
			  
			  
			   },
			   
			   satausmind: {
				   
				   required:"please enter password",
				   
				   
			   },
			    projectlist: {
				   
				   required:"please",
				   
				   
			   },
			     sublist:{
			  required:"please",
				   
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
		
		$(document).ready(function() {
			
		$(document).on('click','.more_button', function() { 
			
			var getId = $(this).attr("id");
			
			
			
			if(getId) 
			{
				$("#load_more_"+getId).html('<img src="assets/load_img.gif" style="padding:10px 0 0 100px;"/>');
				
		$.ajax({ 
		 type: "POST",
		 url: "more_content.php", 
		 data: "getLastContentId="+getId, 
		 cache: false, 
		 success: function(html){ 
		 $("div#load_more_ctnt").append(html);
		
		 $("#load_more_"+getId).remove();
		 
		
		
		
		

		
	      

		} 
		});
		} else 
		{ $(".more_tab").html('The End'); }
	 return false; 
	 });
	 }); 
</script>
<script type="text/javascript">
		$(document).ready(function() {
    
         $("#postbt").click(function(){
			 var now = new Date();

		 var day = ("0" + now.getDate()).slice(-2);
         var month = ("0" + (now.getMonth() + 1)).slice(-2);
         var year=("0" + (now.getFullYear())).slice(-4);
        // var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
		// var client=$(this).attr('getdateandtime');
		 var client=$('#getdateandtime').val();
		 var texmonth=client.substring(0,2);
		 var texdate=client.substring(3,5);
		  var texyear=client.substring(6,10);
		 
		 var finaldate=day-texdate;
		 var finalmonth=month-texmonth;
		 var finalyear= year-texyear;
		 
	 if(finaldate>=-3 && finaldate<=3 && finalmonth==0 && finalyear==0)
		 {
			var name='<?php echo $_SESSION['user1']?>';
			var getdate=$('#getdateandtime').val();
			var editdate=getdate.substring(0,10);
			var edityear=getdate.substring(6,10);
			
			var edittime=getdate.substring(10,19);
		    var workingstatus=$('#satausmind').val();
			var projectlist=$('#projectlist').val();
			var sublist=$('#sublist').val();
		
			 var month = new Array();
               month[0] = "January";
               month[1] = "February";
               month[2] = "March";
               month[3] = "April";
               month[4] = "May";
               month[5] = "June";
               month[6] = "July";
               month[7] = "August";
               month[8] = "September";
               month[9] = "October";
               month[10] = "November";
               month[11] = "December";

           var d = new Date();
           var monthname = month[d.getMonth()];
			
			if(workingstatus==0)
	       {
		
	         alert("plz update forms after post");
	         return false;
	
	
	        }
			if(projectlist==0)
	       {
		
	         alert("plz update forms after post");
	         return false;
	
	
	        }
			if(sublist==0)
	       {
		
	         alert("plz update forms after post");
	         return false;
	
	
	        }
		
			
			$.ajax({
                   type: "POST",
                   url: "insertdate.php",
		           data: 'name='+name+'&editdate='+editdate+'&edittime='+edittime+'&workingstatus='+workingstatus+'&projectlist='+projectlist+'&sublist='+sublist+'&monthname='+monthname+'&edityear='+edityear,
                    cache: false,
                   success: function()
                            {
								location.reload();
                                    
                                
                            }

});
			

			
		 }
		 else{
			 alert("only three days allow updatework status"); 
			 
		 }
		 
		
	

   
    
});                       
});
		
</script>
<script type="text/javascript">
		
		$(document).ready(function() {	
		$(".delete").click(function(){
			
			var rowid =$(this).attr('data-id');
		
			var dateidval =$('.datework').attr('id');
			 var now = new Date();

		 var day = ("0" + now.getDate()).slice(-2);
         var month = ("0" + (now.getMonth() + 1)).slice(-2);
         var year=("0" + (now.getFullYear())).slice(-4);
		  var texmonth=dateidval.substring(0,2);
		 var texdate=dateidval.substring(3,5);
		  var texyear=dateidval.substring(6,10);
		 
		 var finaldate=day-texdate;
		 var finalmonth=month-texmonth;
		 var finalyear= year-texyear;
		
	 if(finaldate>=-3 && finaldate<=3 && finalmonth==0 && finalyear==0)
		 {
			
			
        $.ajax({
        type: "POST",
        url: "deleteid.php",
		data: {'rowid':rowid},
       
       success: function(html)
{
 
}

});
		 }
		 
		 else{
			 
			 alert("only three days allowed");
		 }
	//alert(rowid);		
			
			
        
        });
			
			});
		
		
</script>
	<!--script type="text/javascript">
		
		$(document).ready(function() {	
		$("#readmoreoption").click(function(){
			alert("bala");
		
		

});
	});
		
		
</script-->		
		
		
	 </head>
	 <body>
	 <!-- header element (navigation bar)-->
	 <div id="custom-bootstrap-menu" class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
	<form name="userhead" id="userhead" method="post" >
        <div class="navbar-header"><a class="navbar-brand" href="#"> <img id="profile" class="img-circle" alt="Cinque Terre" src="assets/image/<?php echo $image; ?>"/> <h6 id="usernameheader"> <?php echo $_SESSION['user1']; ?> </h6>  </a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/"></a>
                </li>
                <li><a href="innnowellprofile.php"><span class="glyphicon glyphicon-user"></span>profile</a>
                </li>
                <li><a href="innowellsetting.php"><span class="glyphicon glyphicon-cog"></span>settings</a>
                </li>
                <li>
				
				<button type="submit" class="btn btn-primary navbar-btn" name="logout" id="logout"><span class="glyphicon glyphicon-off"></span> logout</button>
				
                </li>
            </ul>
        </div>
		</form>
    </div>
</div>
	 
	<!--- Project details --->

<div  class="container content mCustomScrollbar light" id="projectdetails" data-mcs-theme="minimal-dark">
<?php
  $monthnam="";
  


     $projectname="";
	  $teamname="";
	  $lastdate="";
	 
 
 $host="localhost";
	$user="root";
	$password="";
	
	$conn=mysql_connect($host,$user,$password);
	$db=mysql_select_db("facebook",$conn);
	 $query="select  projectname,teamname,lastdate  from adminaddprojectlist";
	   $a=mysql_query($query,$conn);
	    $count=mysql_num_rows($a);
		 
		
if($count>0)
{
	  
	   echo  "<table class=\"table\" id=\"currenttable\">";
   
        echo  "<tbody>";
	  
		echo "<th id=\"projectlistfonthead\"> ON GOING PROJECT</th>";
		
	
	
	while($row=mysql_fetch_array($a))
		
  { 

	  $projectname=$row['projectname'];
	  $teamname=$row['teamname'];
	  $lastdate=$row['lastdate'];
	 
     
  
  
  
  
  ?>
		
	  
		 
		 
      
      <tr>
       
        <td id="projectlistfont">  
		<b>PROJECT NAME:</b><br><?php echo  $projectname;?> <br><br>
        <b>TEAM NAME:</b><br><?php echo  $teamname;?> <br><br>
        <b>SUBMISSION DATE:</b> <br><?php echo $lastdate;?>
		</td>
       
		   
      </tr>
	   
        
		
		
<?php
 
  }
 echo  "</tbody>";
 echo   "</table>";	
}
   
	
  
  else{
	   $monthnam="No events list";
	
	  
	  
  }
  
?>	
  <p align="center"> <?php echo $monthnam; ?> </p>
</div>
<div class="container content mCustomScrollbar light" id="report" data-mcs-theme="minimal-dark">

<div id="reporthead">
<img class="eventsimgicons" id="logo1" src="assets/eventsiconss.jpg"/>

<!--ul id="recordlist">

  <li  id="recordlistsub" style="font-size:25px">Log in</li> &nbsp
  
  
</ul-->
 

</div>
<br><br><br>
  <?php
  $monthnam="";
  


       
	  $events="";
	  $date="";
	  $time="";
 
 $host="localhost";
	$user="root";
	$password="";
	
	$conn=mysql_connect($host,$user,$password);
	$db=mysql_select_db("facebook",$conn);
	 $query="select eventname,date,time from eventslist ORDER BY id DESC";
	   $a=mysql_query($query,$conn);
	    $count=mysql_num_rows($a);
		 
		
if($count>0)
{
	  
	   echo  "<table class=\"table\" id=\"currenttable\">";
   
        echo  "<tbody>";
	  
		echo "<th></th>";
		
	
	
	while($row=mysql_fetch_array($a))
		
  { 
  
	  
	  $events=$row['eventname'];
	  $date=$row['date'];
	  $time=$row['time'];
	  $currentdate= date("m/d/Y");
	  $year=substr($currentdate,0,4);
	 
	  
	if( $currentdate <= $date)
	{ 
		
		$notfication= "<img class=\"newnotification\" id=\"logo1\" src=\"assets/Newarrivals.png\"/>";
		

	}
	
	else{
		
		$notfication= "<img class=\"newnotification\" id=\"logo1\" src=\"assets/complete.jpg\"/>";
	}
	 
     
  
  
  
  
  ?>
		
	  
		 
		 
      
      <tr>
       
        <td>
       		
		<b>DATE:</b> <?php echo  $date;?><br><br> 
        <b>TIME:</b> <?php echo  $time;?> <br><br>
        <b>EVENTS:</b><br> <?php echo $events;?> <br><br>
		 <h3 id="move"> <?php echo $notfication;?></h3> <br><br> 
		
		
		
		
		</td>
       
		   
      </tr>
	   
        
		
		
<?php
 
  }
 echo  "</tbody>";
 echo   "</table>";	
}
   
	
  
  else{
	   $monthnam="No events list";
	
	  
	  
  }
  
?>	
  <p align="center"> <?php echo $monthnam; ?> </p>
 </div>
<!--div class="container content mCustomScrollbar light" id="attendance" data-mcs-theme="minimal-dark">
<div id="reporthead">

<ul id="recordlist">

  <li  id="recordlistsub" style="font-size:25px">Log in</li> &nbsp
  <li  id="recordlistsub"><a href="#">Log in</a></li>&nbsp
  <li  id="recordlistsub"><a href="#contact">Log in</a></li>&nbsp
  <li  id="recordlistsub"><a href="#about">Log in</a></li>&nbsp <br>
  
</ul>
 

</div><br><br><br>

</div-->
<div id="updatemind" class="container">
<p id="updateicon"><i class="fa fa-pencil-square-o"  style="margin-top:3px;"></i>
updatestatus</p>
<form role="form" id="getupdatestatus" method="POST" accept-charset="utf-8">
<div id="dateandtime">
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
				<span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    <input type='text' class="form-control" placeholder= "date and time"  id="getdateandtime"  
					name="getdateandtime"/>
                    
                </div>
            </div>
        </div>
        
    </div>
</div>
<div class="form-group">
  <div class="col-sm-10" >
    <textarea      placeholder="update working status ..." class="form-control" id="satausmind"  name="satausmind"> </textarea>
	</div>
</div>

<div  class="form-group">
 <div class="col-sm-10">
<select class="form-control" style="width:150px" id="projectlist" name="projectlist">
  <option value="">PROJECT LIST</option>
<?php
    $host="localhost";
	$user="root";
	$password="";
	
	$conn=mysql_connect($host,$user,$password);
	$db=mysql_select_db("facebook",$conn);
	 $query="select addprojectname from employeeworkingproject where employeeusername='".$_SESSION['user1']."'";
	 $a=mysql_query($query,$conn);
	  $count=mysql_num_rows($a);
		 
		
if($count>0)
{
	while($row=mysql_fetch_array($a))
		
  { 
	  $projectadd=$row[addprojectname];
	  
?>	   
  <option value="<?php echo $projectadd ?>"> <?php echo $projectadd ?> </option>
<?php
  }
}
?>

</select>
</div>
</div>


<div  class="form-group">

 <div class="col-sm-10">
<select class="form-control" style="width:150px" id="sublist"  name="sublist" placeholder="bala">
 <option value=""> select option</option>
  <optgroup label="office work">
    <option value="project work">project work </option>
    <option value="meeting">meeting</option>
  </optgroup>
  <optgroup label="site work">
    <option value="vist plant">vist plant</option>
    <option value="client meeting">client meeting</option>
  </optgroup>
</select>
</div>
</div>
<!--div class="form-group">
 <div class="col-sm-10">

	
       
        <div class="dropdown" id="sublist">
            <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#" href="/page.html">
                projectlist <span class="caret"></span>
            </a>
    		<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
             
             
              <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Hover me for more options</a>
                <ul class="dropdown-menu">
				
                  <li><a tabindex="-1" href="#">don</a></li>
                   <li> <a> 
 <form class="form col-sm-10">    
                      <select class="selectpicker" multiple="">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Relish</option>
                      </select>
                    </form>





				   </a></li>
                  <li><a href="#">Second level</a></li>
                  <li><a href="#">Second level</a></li>
                </ul>
              </li>
			   <li class="dropdown-submenu">
                <a tabindex="-2" href="#">options</a>
                <ul class="dropdown-menu">
                  
                  <li><a href="#">Second level</a></li>
                  <li><a href="#">Second level</a></li>
                </ul>
              </li>
            </ul>
        </div>
	</div>
</div-->

<div class="form-group" id="post"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary" name="postbt" value="post" id="postbt" >POST</button>
    </div>
  
 

  
  </div>
  
  
 
  
 
</form>

</div>
<div class='main_div'>
<div class="load_content"  id="load_more_ctnt">
<?php
	
	
	$c="";
 
 
	$host="localhost";
	$user="root";
	$password="";
	
	$conn=mysql_connect($host,$user,$password);
	$db=mysql_select_db("facebook",$conn);
	
 $querye="select  DISTINCT id,time,date,workstatusmind,projectname,worktype from workstatus where name='".$_SESSION['user1']."' ORDER BY id DESC LIMIT 5";
	
	
	
	$a=mysql_query($querye,$conn);
	
	
	while($row=mysql_fetch_array($a))
		
{ 
	
     
	$id=$row['id'];
	$time=$row['time'];
	$date=$row['date'];
	$updatestatus=$row['workstatusmind'];
	$projectname=$row['projectname'];
	$options=$row['worktype'];
	

?>

	
<div id="resultstatus" class="container">
<form method="POST" name="deleteform" role="form" accept-charset="utf-8">
<button type="submit" id="delete" name="delete" data-id=<?php echo $id;?> class="btn btn-default delete">
         <span class="glyphicon glyphicon-trash" > </span>
        </button>
		<p id="first">
		<p> <b>PROJECT NAME:</b><br><?php echo $projectname;?></p>
		<p> <b> WORK POSITION:</b> <br> <?php echo $options;?></p>
		<p><b>DATE:</b><?php echo $time;?> </p> <p class="datework" id="<?php echo $date;?>"><b>TIME:</b><?php echo $date;?></p>
		
		<p> <b>WORKING STATUS:</b><br>  <?php echo  nl2br($updatestatus,TRUE)?> </p>
		
		
		
		</p>
		</form>
</div>



	




<?php

 }
 mysql_close($conn);	
?>
</div>
 <div class="more_div"><a href="#"><div id="load_more_<?php echo $id; ?>" class="more_tab"> <div class="more_button" id="<?php echo $id;?>">Load More Content</div></a></div> </div> 
 </div>
 


	

	 
	
	 </body>
	 </html>
	 
	