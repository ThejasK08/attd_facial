<?php

if(isset($_POST['student']))
{
	header('location: addstudent.php');
}

if(isset($_POST['faculty']))
{
	header('location: addfaculty.php');
}
if(isset($_POST['viewattd']))
{
	header('location: attendancestudent.php');
}
?>

<html>

	<head>
		<title>ADMIN</title>  
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
	   <center>
	   <div style="color:#ffffff;background-color:#424bf4;height:150px;"></br></br>
		<h1>DASHBOARD</h1></br></br>
		</br></br></br>
		        <button class="button button"> <a href="addstudent.php"> STUDENT DETAILS</a></button></br>
				<button class="button button"> <a href="addfaculty.php">FACULTY DETAILS</a></button></br>
				<button class="button button"> <a href="attendancestudent.php"> VIEW ATTENDENCE</a></button></br>
	 
    </form>
   </center>
   </body>
</html>