<?php
session_start();
if(isset($_POST['getLastContentId']))
	
	{

$getid=$_POST['getLastContentId'];
$name=$_SESSION['user1'];

    $c="";
 	$host="localhost";
	$user="root";
	$password="";
	
	$conn=mysql_connect($host,$user,$password);
	$db=mysql_select_db("facebook",$conn);
	
 $querye="select  DISTINCT id,time,date,workstatusmind,projectname,worktype from workstatus where name='".$name."' AND 
    id < ".$getid." ORDER BY id DESC LIMIT 2";
	

	
	$a=mysql_query($querye,$conn);
	$count=mysql_num_rows($a);
	
		
		if($count>0)
		{
	
	
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
<form method="POST" name="deleteform" role="form" accept-charset="utf-8" >
<button type="submit" id="delete" name="delete" data-id=<?php echo $id;?> class="btn btn-default">
         <span class="glyphicon glyphicon-trash" > </span>
        </button>
		<p>project name:<?php echo $projectname;?></p>
		<p>date:<?php echo $time;?> </p>	<p>time:<?php echo $date;?></p>
		<p> select option:<?php echo $options;?></p><br>
		<p> working status :<br>  <?php echo $updatestatus;?> </p>
		
		
		</form>
</div>



	




<?php

 }
?>
 
 

<a href="#"> <div id="load_more_<?php echo $id;?>" class="more_tab"> <div class="more_button" id="<?php echo $id;?>">Load More Content start</div></div>  </a>
 


 <?php
}
 else
 {
 echo "<div class='all_loaded'> No More Content to Load</div>";
 }
}
?>
