<?php 
 $name="";
	
	$myfinaldate ="";
	$myfinaltime ="";
	$companyname="";
	$projectname="";
	$projectlocation="";
	$monthname="";
	$year="";
	$team="";
	$adminusername="";




	
	
	
	
	
	
    $name=$_POST['name'];
	
	$myfinaldate =$_POST['editdate'];
	$myfinaltime =$_POST['edittime'];
	$companyname=$_POST['companyname'];
	$projectname=$_POST['projectname'];
	$projectlocation=$_POST['projectlocation'];
	$monthname=$_POST['monthname'];
	$year=$_POST['edityear'];
	$team=$_POST['team'];
	$adminusername=$_POST['adminusername'];
	$host="localhost";
	$user="root";
	$password="";
	
	$conn=mysql_connect($host,$user,$password);
	$db=mysql_select_db("facebook",$conn);
	$query="insert into adminaddprojectlist(adminusername,name,companyname,	projectname,projectlocation,lastdate,lasttime,	lastmonth,lastyear,teamname)values('".$adminusername."','". $name."','".$companyname."','".$projectname."',
	     '".$projectlocation."','".$myfinaldate."','".$myfinaltime."','".$monthname."','".$year."','".$team."')";

$a=mysql_query($query,$conn);

header("location:http://localhost/project/innowelluseraccount.php");
	   mysql_close();
	
	



?>