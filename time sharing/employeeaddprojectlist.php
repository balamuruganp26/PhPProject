<?php
$currentdate="";
$currenttime="";	
$rowid="";
$employeeusernames="";	
$rowid=$_POST['rowid'];
$employeeusernames=$_POST['employeeusername'];
$currentdate= date("d/m/y");
$currenttime=date("h:ia");
 
 
	$host="localhost";
	$user="root";
	$password="";
	
	  $conn=mysql_connect($host,$user,$password);
	  $db=mysql_select_db("facebook",$conn);
	  
	 
	  
	  
      $query="select adminid ,employeeusername from  employeeworkingproject where adminid='".$rowid."' and 	employeeusername='".$employeeusernames."' "; 
	   $a=mysql_query($query,$conn);
	   $count=mysql_num_rows($a);
	  if($count==1)
	  {
	  echo "This project already add yor list ";
	  }
	  else{
		  
		    $query="insert into employeeworkingproject (employeeusername,employeename,addprojectname,addcompanyname,addcompanylocation,addsubmissondate,addsubmissontime,addteamname,adminid)select signup.username,signup.name,adminaddprojectlist.projectname,adminaddprojectlist.companyname,adminaddprojectlist.projectlocation,'".$currentdate."','".$currenttime."',adminaddprojectlist.teamname ,adminaddprojectlist.id from signup,adminaddprojectlist where signup.username='".$employeeusernames."' and  adminaddprojectlist.id='".$rowid."'";
			  $a=mysql_query($query,$conn);
			  echo "The project was add your list";
		
	  }
	?>
	
	
	
	