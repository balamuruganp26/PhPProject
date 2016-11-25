<?php
   
 
	session_start();
	if(isset($_POST['logout']))
	{
      
        session_unset($_SESSION['user1']); 
		 session_unset($_SESSION['pass1']); 
       session_destroy();
	     
        header("location:http://localhost/project/finalhome.php");
		
		
		
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
<?php

 
if(isset($_POST['posts']))
{
	
	$name= $_SESSION['user1'];
	
	$times=date("h:i A");
	
	$dates=date("d:m:y");
	

	
    $host="localhost";
	$user="root";
	$password="";
	
	$conn=mysql_connect($host,$user,$password);
	$db=mysql_select_db("facebook",$conn);
	$query="insert into finalupdateforum(updateedusername,updatestatus,time,date)values('".$name."','".$_POST['updatedata']."','".$times."','".$dates."')";
  
   $a=mysql_query($query,$conn);
    header("location:http://localhost/project/useraccount.php");
   mysql_close();
	

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
	      <link rel="stylesheet" href="assets/bootstrap-3.3.5/fonts/bootstrap.min.css">
	      <script src="assets/jquery/jquery-1.11.3.min.js"> </script>
	      <script src="assets/jqueryvalidation/dist/jquery.validate.js"> </script>
          <link rel="stylesheet" href="assets/socialnetwork/css/font-awesome.css">

	  
	
	
	

	<style type="text/css">
	
	
	::-webkit-input-placeholder::before { font-family: fontAwesome; content:'\f002  '; color: #69f }
::-moz-placeholder::before  { font-family: fontAwesome; content:'\f002  '; color: #69f } /* firefox 19+ */
:-ms-input-placeholder::before  { font-family: fontAwesome; content:'\f002  '; color: #69f } /* ie */
input:-moz-placeholder::before  { font-family: fontAwesome; content:'\f002  '; color: #69f }
		
		#headersection{
			
				background-color:#3366ff;
				height:45px;
				width:100%;
				margin-top:-50px;
			 position:fixed;
			
			
			
			
		}
		
		#searchbox{
		margin-top:-41px;
			
		margin-left:250px;	
		}
		#homeicon{
			
		    color:black;
			 margin-left:950px;
			 vertical-align: middle;
			margin-top:-68px;
		 text-decoration: none;
			
		}
		
		#logout{
			
			
		   margin-left:1030px;
		   margin-top:-110px;
			 text-decoration: none;
			
		}
		 #msg{
			 color:black;
			  vertical-align: middle;
			margin-top:-68px;
			  text-decoration: none;
		 }
		#notification{
			
			color:black;
			 vertical-align: middle;
			margin-top:-68px;
			 text-decoration: none; 
		}
		#friends{
			
			color:black;
			margin-top:-20px;
			 vertical-align: middle;
			margin-top:-68px;
			 text-decoration: none;
		}
		
		#imageplace{
			
			height:150px;
			width:124px;
			background-color:black;
			margin-top:10px;
			margin-left:10px;
			 position:fixed;
			 
			border-style:solid;
		       border-color:white;
			
		}
		#profile{
			margin-left:-15px;
			height:144px;
			width:118px;
			margin-top:0px;
			 position:fixed;
			 border-style:solid;
		       border-color:white;
			 
		}
		
	
	
		body {
   background: url(http://localhost/project/assets/chat.jpg) no-repeat center center fixed;
    

	 
     -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  
	
	
	
      }
	 

	  
	  
	  #chartwindow{
		  background-color:black;
		  height:100%;
		  width:230px;
		  float:right;
		  margin-top:-5px;
		  position:fixed;
		  margin-left:1136px;
		 
		  
		  
	  }
	  #searchfriends{
		  margin-top:598px;
		  margin-left:-30px;
		   position:fixed;
		  
	  }
	  #updatemind{
			
			min-height:210px;
			height:100%;
			
			width:600px;
			background-color:white;
			margin-left:249px;
			margin-top:50px;
			border-style: solid;
			
		}
	   #updatepost{
		   background-color:white;
		   height:100%;
		   width:600px;
		margin-left:250px;
		margin-top:5px;
		border-style: solid;
		
		   
		   
		   
	   }
	   
	   	
	   
	   #mind{
		   width:591px;
		   min-height:110px;
		   margin-left:-28px;
		   overflow-x:hidden;
		   overflow-y:hidden;
		   border: none;
		   margin-top:-130px;
		
		   
		   
		   
	   }
	   #post{
		    margin-left:450px; 
			margin-top:140px;
		   
		   
	   }
	   #updateicon{
		   font-size:20px;
		   
		   
	   }
	   
       #commendicon{
		   
		   margin-top:130px;
		   color:black;
		    text-decoration: none;
		   
		   
	   }
	   #commendstatus{
		   
		   	height:60px;
			
			border-style: solid;
			
			  border-width: 3px;
			width:600px;
			background-color:white;
			margin-left:250px;
			margin-top:0px;
		<!--	display:none;-->
		   
		   
	   }
	   #commendtext
	   {
		     width:535px;
		     height:40px;
			 margin-top:-45px;
			 margin-left:20px;
			 overflow-x:hidden;
		   overflow-y:hidden;
			
		 
		   
	   }
	   #commendprofile{
		   
		  
			min-height:40px;
			width:40px;
			margin-left:-10px;
			margin-top:10px;
			
			
		   
	   }
	   #updatestatsprofile{
		   
		   height:40px;
			width:40px;
			margin-left:-10px;
			
			margin-top:5px;
		   
		   
	   }
		#updateminduser{
		 margin-left:50px;
		margin-top:-30px;	
			
			
		}
		#likeicon{
			
			color:black;
			 text-decoration: none;
			
		}
		#usernamedisplay
		{
			font-size:20px;
			margin-top:10px;
			
			
		}
		#removeprofile{
			font-size:20px;
			
		}
		
		#subcommendicon{
			margin-left:40px;
			color:black;
			
		}
		#sublikeicon{
			color:black;
			
		}
		#cameraimage{
			
			margin-right:-70px;
			
			
		}
		
		
</style>

	
<!--script type="text/javascript">
	$(document).ready(function(){
		
	$("#postbt").click(function(){
		
		
		if(!$('#mind').val())
		{
			
			
			alert("Please fill the status");
		
		}
		
		
		/*$.ajax({
			
			url:postdata.php,
			type:post,
			 data=$("#sendinfo:input").serializeArray();
			   success: function (result) {
           
                }
			
			
			
			
		});*/
		
		//var data=$("#sendinfo:input").serializeArray();
		//$.post($("#sendinfo").attr("action"),data);
		
		
		




	});
	});
	</script-->
	
	
	<script type="text/javascript">
	
	$(document).ready(function(){
	
	$("#postbt").click(function(){
		
	var abc=$.trim($("#mind").val());
	

	
	if(abc==0)
	{
		
	 alert("plz update forms after post");
	 return false;
	
	
	}
	
	
	
	
	
	});
	
	
		});
	
	</script>
	
	<script type="text/javascript">
	$(document).ready(function(){
	$('#mind').on('keyup',function(){
		$(this).css('height','auto');
		$(this).height(this.scrollHeight);
	});
	});
	</script>
	
	
	
	
	
	
	
	<!--script type="text/javascript">
	$(document).ready(function(){
	$('#commendtext').on('keyup',function(){
		$(this).css('height','auto');
		$(this).height(this.scrollHeight);
	});
	});
	</script-->
	<!--script type="text/javascript">
	jQuery(document).ready(function(){
	jQuery("#commendicon").click(function(){
		
    jQuery('[id=commendstatus]'). css({"display":"inherit"}).show();
	
            });





	});
	</script-->
		<script type="text/javascript">
	jQuery(document).ready(function(){

		jQuery('[id=commendicon]').on('click',function(){
		  var eq=$(this).index();
		    jQuery('[id=commendstatus]').removeClass('show');
			 jQuery('[id=commendstatus]').eq(eq).addClass('show');
		  
          
  
	
            });





	});
	</script>
			<!--script type="text/javascript">
	
	$('[id=commendicon]').click(function() {
  $('[id=commendstatus]').hide();
  $(this).next('[id=commendstatus]').show('slow');

	
	      });
</script-->
	
	
	
	
	
	
	
</head>

<body>

<div  id="headersection"  class="container-fluid">
<form name="userhead" id="userhead" method="post" >

<p id="usernamedisplay"> <?php  echo $_SESSION['user1']; ?><p>

      <div class="col-xs-6"  id="searchbox">
    <div class="right-inner-addon">
       
        <input type="text"
               class="form-control" 
               placeholder="Search for friends" style="width: 400px"> 
			   
			  
    </div>
</div>


  
<a href="#" data-toggle="tooltip" data-placement="bottom" title="Home"> <span class="fa fa-home fa-2x" id="homeicon"> </span> </a> &nbsp; 
 <a href="#"data-toggle="tooltip" data-placement="bottom" title="Message"> <span class="fa fa-envelope  fa-2x"  id="msg"> </span> </i> </a> &nbsp; 
 <a href="#" data-toggle="tooltip" data-placement="bottom" title="Notification"> <span class="fa fa-bell fa-2x" id="notification"> </span> </i></a>  &nbsp; 
  <a href="#" data-toggle="tooltip" data-placement="bottom" title="Friends" > <span class="fa fa-user  fa-2x"  id="friends"> </span> </i> </a> &nbsp; 
  
  
    
	<div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default"  name="logout" value="logout" id="logout" >logout</button>
    </div>
  
 
 
  
  
  </div>
   </form>

</div>


<div  id="imageplace" class="container"> 

<a href="http://localhost/project/imagehtml.php"> 








<img id="profile"  src="assets/image/<?php echo $image; ?>"> 
    

	</a>
  
<p id="removeprofile">bala murugan</p>
</div>



<!--div  id="chartwindow" class="container"> 


 <div class="col-xs-6"  id="searchfriends" >
    <div class="right-inner-addon" id="searchtext">
       
        <input type="text"
               class="form-control" 
               placeholder="Search for friends" style="width:230px"> 
			   
			  
    </div>
</div>

</div-->


<div id="updatemind" class="container">
<p id="updateicon"><i class="fa fa-pencil-square-o"  style="margin-top:3px;"></i>
updatestatus</p>
<form action="" method="post" name="sendinfo" id="statusupdatemind" >
<div class="form-group">
  <div class="col-sm-10">
    <textarea class="form-control" id="mind" name="updatedata"> </textarea>
	</div>
</div>


<div class="form-group" id="post"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary" name="posts" value="post" id="postbt" >POST</button>
    </div>
  
 
 <!--a href="#" data-toggle="tooltip" data-placement="bottom" title="Friends" > <span class="fa fa-picture-o  fa-2x"  id ="cameraimage"> </span> </i> </a--> 
  
  
  </div>

</form>




</div>

<?php
	
	
	
   
	$host="localhost";
	$user="root";
	$password="";
	
	$conn=mysql_connect($host,$user,$password);
	$db=mysql_select_db("facebook",$conn);
	
 $querye="SELECT DISTINCT signup.username ,signup.imagename ,finalupdateforum.updatestatus,finalupdateforum.time,finalupdateforum.date FROM signup INNER JOIN finalupdateforum ON signup.username=finalupdateforum.updateedusername ORDER BY username DESC";
	
	
	
	$a=mysql_query($querye,$conn);
	//if($a === FALSE) { 
    //die(mysql_error()); 
//}

  while($row=mysql_fetch_array($a))
		
{ 
	
	
	$name=$row['username'];
	$image=$row['imagename'];
	$updatestatus1=$row['updatestatus'];
	$time=$row['time'];
	$date=$row['date'];
	
	
	?>
	
	<div id="updatepost" class="container">
    <span>
    <img id="updatestatsprofile" src="assets/image/<?php echo $image ?>"/>
    <span>
<p id="updateminduser">
   <?php echo $name; ?><br>
   <?php echo $time; ?> <?php echo $date; ?> <br>
   
   
   </p>
	<br>
	<p>
	<?php echo nl2br($updatestatus1,TRUE);?>
	<!--//$updatestatus1=nl2br($updatestatus1);
	//echo $updatestatus1;
	//echo wordwrap($updatestatus1,45,"<br>\n",TRUE)-->
	
	
	</p>
	<a href="#" data-toggle="tooltip" data-placement="bottom" title="commends">
    <span class="fa fa-comment" id="commendicon">
	commends
    </span>
    </a>
	&nbsp;
	<a href="#" data-toggle="tooltip" data-placement="bottom" title="Like">
    <span class="fa fa-thumbs-up" id="likeicon">
     like
    </span>
    </a>
	
	
	<p>bala</b>
</div>
	
   <div id="commendstatus" class="container">
<span> <img id="commendprofile" src="assets/image/default.png"/> </span>
<div class="form-group">
  
    
	<div class="col-sm-10">
    <textarea class="form-control" id="commendtext" > </textarea>
	</div>
</div>
 <!--a href="#" data-toggle="tooltip" data-placement="bottom" title="commends"> <span class="fa fa-comment" id="subcommendicon"> commends </span> </a>&nbsp;
<a href="#" data-toggle="tooltip" data-placement="bottom" title="Like"> <span class="fa fa-thumbs-up" id="sublikeicon"> like </span> </a-->



</div>
	
	
	<!--echo '<div id="updatepost" class="container">';
    echo '<span>';
    echo '<img id="updatestatsprofile" src="assets/image/'.$image.'"/>';
    echo '<span>';	
	echo '<p id="updateminduser">';
    echo $name;
    echo '</p>';
	echo '<br>';
	echo '<p>';
	echo nl2br($updatestatus1,TRUE);
	//$updatestatus1=nl2br($updatestatus1);
	//echo $updatestatus1;
	//echo wordwrap($updatestatus1,45,"<br>\n",TRUE);
	
	
	echo '</p>';
	echo '<a href="#" data-toggle="tooltip" data-placement="bottom" title="commends">';
    echo '<span class="fa fa-comment" id="commendicon">';
	echo "commends";
    echo '</span>';
    echo '</a>';
	echo "&nbsp;";
	echo '<a href="#" data-toggle="tooltip" data-placement="bottom" title="Like">';
    echo '<span class="fa fa-thumbs-up" id="likeicon">';
	echo "like";
    echo '</span>';
    echo '</a>';
	echo '</div>';*/-->
	
   
	
	
		 
	<?php }
 mysql_close($conn);	 
		
?>

<div id="updatepost" class="container">


<span> <img id="updatestatsprofile" src="assets/image/default.png"/> </span> 

<p id="updateminduser">username</p><br>
<P> 
	<?php $timess=date("h:i A"); 
	
	echo $timess; 
	?>
	</P>




  




 <a href="#" data-toggle="tooltip" data-placement="bottom" title="commends"> <span class="fa fa-comment" id="commendicon"> commends </span> </a>&nbsp;
<a href="#" data-toggle="tooltip" data-placement="bottom" title="Like"> <span class="fa fa-thumbs-up" id="likeicon"> like </span> </a>


</div>

	

<!--div id="commendstatus" class="container">
<span> <img id="commendprofile" src="assets/image/default.png"/> </span>
<div class="form-group">
  
    
	<div class="col-sm-10">
    <textarea class="form-control" id="commendtext" > </textarea>
	</div>
</div>
 <a href="#" data-toggle="tooltip" data-placement="bottom" title="commends"> <span class="fa fa-comment" id="subcommendicon"> commends </span> </a>&nbsp;
<a href="#" data-toggle="tooltip" data-placement="bottom" title="Like"> <span class="fa fa-thumbs-up" id="sublikeicon"> like </span> </a>



</div-->


</body>

</html>