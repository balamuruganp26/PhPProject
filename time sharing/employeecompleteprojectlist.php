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
	  
	  $query="delete from  employeeworkingproject where adminid='".$rowid."' and employeeusername='".$employeeusernames."'";
	  $b=mysql_query($query,$conn);
	 
      
$query="select completeid ,finalusername from  employeecompleteproject where completeid='".$rowid."' and finalusername='".$employeeusernames."' ";
	   $a=mysql_query($query,$conn);
	   $count=mysql_num_rows($a);
	  if($count==1)
	  {
	  echo "This project already add yor list ";
	  }
	  else{
		 
		    $query="insert into employeecompleteproject(finalusername,	completeemployeename,completeprojectname,completecompanyname,completecompanylocation,	completeteamname,completeid,completesubmissondate,completesubmissontime)select signup.username,signup.name,adminaddprojectlist.projectname,adminaddprojectlist.companyname,adminaddprojectlist.projectlocation,adminaddprojectlist.teamname,adminaddprojectlist.id,'".$currentdate."','".$currenttime."'from signup,adminaddprojectlist where signup.username='".$employeeusernames."' and  adminaddprojectlist.id='".$rowid."'";
			
		
			
			  $a=mysql_query($query,$conn);
			  echo "This project add your complete list";
			  
		
	  }
	?>
	
	
	
	