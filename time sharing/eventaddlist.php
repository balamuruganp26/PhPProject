<?php 
 $name="";
	
	$addeventlists ="";
	$myfinaldate ="";
	$myfinaltime ="";
	
	




	
	
	
	
	
	
   $addeventlists=$_POST['addnewevents'];
	
	$myfinaldate =$_POST['editdate'];
	$myfinaltime =$_POST['edittime'];
	
	$host="localhost";
	$user="root";
	$password="";
	
	$conn=mysql_connect($host,$user,$password);
	$db=mysql_select_db("facebook",$conn);
	$query="insert into eventslist(eventname,date,time)values('".$addeventlists."','". $myfinaldate."','".$myfinaltime."')";

$a=mysql_query($query,$conn);


header("location:http://localhost/project/innowellevents.php");
mysql_close();
	
	



?>