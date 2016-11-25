<?php
	
	$host="localhost";
	$user="root";
	$password="";
	
	$conn=mysql_connect($host,$user,$password);
	$db=mysql_select_db("facebook",$conn);
	 $query="select email from signup  where email ='".$_POST['email']."' ";
 
 
 

         $a=mysql_query($query,$conn);
		  $count=mysql_num_rows($a);

  

    if(   $count == 0 ){
        echo 'true';
    }
    else{
        echo 'false';
    }


?>