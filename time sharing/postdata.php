<?php
session_start();
 
if(isset($_POST['post']))
{
	$name= $_SESSION['user1'];
    $host="localhost";
	$user="root";
	$password="";
	
	$conn=mysql_connect($host,$user,$password);
	$db=mysql_select_db("facebook",$conn);
	$query="insert into updateforum(updateedusername,updatestatus)values('".$name."','".$_POST['updatedata']."')";
    echo $query;
   $a=mysql_query($query,$conn);


}




?>

	
	
	