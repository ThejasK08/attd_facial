<?php
	include("conn.php");
	$m1=$m2=$m3="";
	if(isset($_POST['submit']))
	{
		if(!isset($_POST['duration']))
		{
			echo '<script>alert("You forgot to select duration");</script>';
		}
		else{
			$dur = $_POST["duration"];		
			$a = $_POST["fid"];
			$query="select * from faculty where fid='$a'";
			$result=mysqli_query($con,$query);
			$query1="select cid from course where fid='$a'";
			$result1=mysqli_query($con,$query1);
			if($data=mysqli_fetch_assoc($result))
			{
				$data1=mysqli_fetch_assoc($result1);
				$m1=$data1['cid'].PHP_EOL;
				$myfile = fopen("C:\Users\USER\opencv-face-recognition\duration.txt", "w") or die("Unable to open file!");
				fwrite($myfile, $m1.$dur);
				fclose($myfile);
			}
			else
			{
				echo '<script>alert("No Record found!!!");</script>';
			}
			echo '<script>alert("SESSION STARTED!!!!");</script>';
			header('location: message.php');
		}
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
	<h1> Session Details</h1> </br></br></br></br></br></br>
   <table>
	<tr>
		<td><label><b>Faculty ID</b></label></td>
		<td><input type="text" name="fid" pattern="[0-9][0-9][0-9][0-9]" required /></input></td></br></br>
	</tr>
	<tr>
		<td><label><b>Duration</b></label></td>
		<td><select name="duration" required />
			  <option value=""></option>
			  <option value="1">1</option>
			  <option value="2">2</option>
			</select>
		</td></br></br>
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



