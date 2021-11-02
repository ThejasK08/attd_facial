<?php
	include("conn.php");
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		$fid = mysqli_real_escape_string($con,$_POST['fid']);
		$fname = mysqli_real_escape_string($con,$_POST['fname']); 
		echo $fid;
		$sql = "INSERT INTO `faculty` (`fid`, `fname`, `passwd`) VALUES ('$fid', '$fname', NULL)";
		if (!mysqli_query($con,$sql)) {
			die('Error: ' . mysqli_error($con));
		}
		echo "record added";

		mysqli_close($con);
		header('location: newrecordmsg.php');
	}

?>
<html>

	<head>
		<title>Add Faculty</title>  
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
	<h1> Faculty Details</h1> </br></br></br></br></br></br>
   <table>
	<tr>
		<td><label><b>Faculty ID</b></label></td>
		<td><input type="text" name="fid" pattern="[0-9][0-9][0-9][0-9]" required /></input></td></br></br>
	</tr>
	<tr>
		<td><label><b>Enter Name</b></label></td>
		<td><input type="text" name="fname" required /></input></td></br></br>
	</tr></br>
	<tr>
		<td></td>
		<td><input type="submit" value="submit" name="submit"></input></td>
	</tr>
	
   </table>
   
   </center>
   </form>
   </body>
</html>