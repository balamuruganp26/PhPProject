
<?php
   session_start();

	
	if(isset($_POST['logout']))
	{
      
        session_unset($_SESSION['user1']); 
		 session_unset($_SESSION['pass1']); 
       session_destroy();
	     
        header("location:http://localhost/project/innnowelllogin.php");
		
		
		
	}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
     <meta charset="utf-8"> 
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <title>Innowell Engineering International Pvt Ltd</title>
	 <link rel="stylesheet" href="assets/bootstrap-3.3.5/dist/css/bootstrap.min.css">
	 
	 <script src="assets/bootstrap-3.3.5/js/tests/vendor/jquery.min.js"> </script>
	 <script src="assets/bootstrap-3.3.5-dist/js/bootstrap.min.js"> </script>
     <script src="assets/jquery/jquery-1.11.3.min.js"> </script>
	 <script src="assets/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	 <script src="assets/jqueryvalidation/dist/jquery.validate.js"></script>
	  <script src="assets/datepicker/js/bootstrap-datepicker.js"></script>
	 <link rel="stylesheet" href="assets/socialnetwork/css/font-awesome.css">
     <link rel="stylesheet" href="assets/bootstrap-3.3.5/fonts/bootstrap.min.css">
	
	  
     
        <link href="assets/datepicker/css/bootstrap-datetimepicker.css" rel="stylesheet">
<script src="assets/datepicker/js/moment.js"></script>
<script src="assets/datepicker/js/bootstrap-datetimepicker.js"></script>
<link href="assets/selectbox/dist/css/bootstrap-select.min.css" rel="stylesheet">

			<script src="assets/selectbox/dist/js/bootstrap-select.min.js"></script>
			<script src="assets/selectbox/dist/js/i18n/defaults-*.min.js"></script>
<style>
html, body {
   height: 100%;
   background-color:white;
   
}
#logout{
	 background-color: rgba(51, 102, 255, 1);
	 color:black;
	 border-color: rgba(51, 102, 255, 1);
	 font-size: 20px;
}

#custom-bootstrap-menu.navbar-default .navbar-brand {
    color: rgba(18, 17, 17, 1);
	
	
	
}
#custom-bootstrap-menu.navbar-default {
    font-size: 20px;
    background-color: rgba(51, 102, 255, 1);
    background: -webkit-linear-gradient(top, rgba(51, 102, 255, 1) 0%, rgba(51, 102, 255, 1) 100%);
    background: linear-gradient(to bottom, rgba(51, 102, 255, 1) 0%, rgba(51, 102, 255, 1) 100%);
    border-width: 1px;
    
}
#custom-bootstrap-menu.navbar-default .navbar-nav>li>a {
    color: rgba(5, 5, 5, 1);
    background-color: rgba(248, 248, 248, 0);
}
#custom-bootstrap-menu.navbar-default .navbar-nav>li>a:hover,
#custom-bootstrap-menu.navbar-default .navbar-nav>li>a:focus {
    color: rgba(242, 233, 233, 0.94);
    background-color: rgba(248, 248, 248, 0);
}
#custom-bootstrap-menu.navbar-default .navbar-nav>.active>a,
#custom-bootstrap-menu.navbar-default .navbar-nav>.active>a:hover,
#custom-bootstrap-menu.navbar-default .navbar-nav>.active>a:focus {
    color: rgba(85, 85, 85, 1);
    background-color: rgba(10, 9, 9, 1);
}
#custom-bootstrap-menu.navbar-default .navbar-toggle {
    border-color: #0a0909;
}
#custom-bootstrap-menu.navbar-default .navbar-toggle:hover,
#custom-bootstrap-menu.navbar-default .navbar-toggle:focus {
    background-color: #0a0909;
}
#custom-bootstrap-menu.navbar-default .navbar-toggle .icon-bar {
    background-color: #0a0909;
}
#custom-bootstrap-menu.navbar-default .navbar-toggle:hover .icon-bar,
#custom-bootstrap-menu.navbar-default .navbar-toggle:focus .icon-bar {
    background-color: #3366ff;
}
#project{
	width:300px;
    height:300px;

	margin-top:200px;
	 	background: rgba(0,0,0,.5);   

}

#events{
	width:300px;
    height:300px;

	margin-top:200px;
	
	
	
}
#employee{
	width:300px;
    height:300px;

	margin-top:200px;
	
	
}
#projectletter{
	margin-top:10px;
	margin-left:210px;
	
}
#employeeletter{
	margin-top:-40px;
	margin-left:630px;
	
}
#eventsletter{
	margin-top:-30px;
	margin-left:1060px;
	
}

 
</style>
<body>

	 <div id="custom-bootstrap-menu" class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
	<form name="userhead" id="userhead" method="post" >
        <div class="navbar-header"><a class="navbar-brand" href="#">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/"></a>
                </li>
                <li>
                </li>
                <li>
                </li>
                <li>
				
				<button type="submit" class="btn btn-primary navbar-btn" name="logout" id="logout"><span class="glyphicon glyphicon-off"></span> logout</button>
				
                </li>
            </ul>
        </div>
		</form>
    </div>
</div>


<div class="container-fluid">


&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href="innowelladminproject.php"> <img id="project" class="img-circle" alt="Cinque Terre" src="assets/projects.jpg" / > </a>

&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
<a href="innowellemployees.php"> <img id="employee" class="img-circle" alt="Cinque Terre" src="assets/employee.jpg"/> </a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
<a href="innowellevents.php">  <img id="events" class="img-circle" alt="Cinque Terre" src="assets/events.jpg"/> </a>
<a href="innowelladminproject.php"> <h3 id="projectletter">Projects </h3>  </a>
<a href="innowellemployees.php"> <h3 id="employeeletter">Employees </h3> </a>
<a href="innowellevents.php">  <h3 id="eventsletter">Events </h3> </a>

</div>



	 
</body>
</html>