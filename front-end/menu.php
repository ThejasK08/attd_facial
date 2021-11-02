<?php
	include("conn.php");
	
   
	if(isset($_POST['admin']))
	{
		header('location: adminview.php');
	}
	if(isset($_POST['faculty']))
	{
		header('location: facultymenu.php');
	}
	if(isset($_POST['student']))
	{
		header('location: attendancestudent.php');
	}
?>


<html>

	<head>
		<title style="color">ATTENDANCE SYSTEM</title>  
      <style>
	  body {
      background-image: url("wp2510999.jpg");
      background-repeat: no-repeat;
      background-color: #cccccc;
      }
	  .button 
		     {
             background-color:#c2d1e8;
             border: none;
             color: white;
             padding: 15px 32px;
             text-align: center;
             text-decoration: none;
             display: inline-block;
             font-size: 25px;
             margin: 4px 2px;
             cursor: pointer;
			 width: 25%;
					
             }
      
</style>
   </head>
   <body>
   <form method="post" action="">
   <center >
    <div style="color:#ffffff;background-color:#424bf4;height:150px;"></br></br>
	<h1 style="top:250px;">DASHBOARD</h1>
	</div>
	</br></br></br></br></br>
	
      
	            <button class="button button"> <a href="adminview.php"> ADMIN</a></button></br>
				<button class="button button"> <a href="facultymenu.php">FACULTY</a></button></br>
				<button class="button button"> <a href="attendancestudent.php"> STUDENT</a></button></br>
	

   </center>
   </form>
   </body>
</html>