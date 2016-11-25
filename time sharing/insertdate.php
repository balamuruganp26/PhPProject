<?php 
$name="";
$timeing="";
$myfinaltime="";
$myfinaldate="";
$status="";
$projectname="";
$option="";
$b="";
$c="";



	
	
	
	
	
	
   $name=$_POST['name'];
	
	$myfinaldate =$_POST['editdate'];
	$myfinaltime =$_POST['edittime'];;
	$status=$_POST['workingstatus'];
	$projectname=$_POST['projectlist'];
	$option=$_POST['sublist'];
	$monthname=$_POST['monthname'];
	$year=$_POST['edityear'];
	
	$host="localhost";
	$user="root";
	$password="";
	
	$conn=mysql_connect($host,$user,$password);
	$db=mysql_select_db("facebook",$conn);
	$query="insert into workstatus(	updatename,name,date,time,workstatusmind,projectname,worktype,monthname,year) select name ,'".$name."','".$myfinaldate."','".$myfinaltime."','".$status."','".$projectname."','".$option."','".$monthname."','".$year."' from signup where username='".$name."'";

$a=mysql_query($query,$conn);

header("location:http://localhost/project/innowelluseraccount.php");
	   mysql_close();
	
	



?>