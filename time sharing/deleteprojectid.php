<?php
	
	
	

 
	$host="localhost";
	$user="root";
	$password="";
	
	  $conn=mysql_connect($host,$user,$password);
	  $db=mysql_select_db("facebook",$conn);
      $query="delete from adminaddprojectlist where id='".$_POST['rowid']."'";
      $a=mysql_query($query,$conn);
		
	?>