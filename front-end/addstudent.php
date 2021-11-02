<?php
	include("conn.php");
	
	$sider="";
	if(isset($_POST['submit'])) {
		
		if (empty($_POST['sid'])) {
			$sider = "SID is required";
		}else {
			$sid = test_input($_POST['sid']);
		}

		
		
		$sname = mysqli_real_escape_string($con,$_POST['sname']);
		$name = $_FILES['file']['name'][0];
		  $name2 = $_FILES['file']['name'][1];
		  $name3 = $_FILES['file']['name'][2];
		  $name4 = $_FILES['file']['name'][3];
		  $target_dir = "js/";
		  $target_file = $target_dir . basename($_FILES["file"]["name"][0]);
		  $target_file2 = $target_dir . basename($_FILES["file"]["name"][1]);
		  $target_file3 = $target_dir . basename($_FILES["file"]["name"][2]);
		  $target_file4 = $target_dir . basename($_FILES["file"]["name"][3]);
		  
		  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		  $imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
		  $imageFileType3 = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));
		  $imageFileType4 = strtolower(pathinfo($target_file4,PATHINFO_EXTENSION));
		  $extensions_arr = array("jpg","jpeg","png","gif");
		if( in_array($imageFileType,$extensions_arr) && in_array($imageFileType2,$extensions_arr) ){
			
			$query = "INSERT INTO `student`(`sid`, `sname`, `img1`, `img2`, `img3`, `img4`, `passwd`) VALUES ('$sid', '$sname','".$name."','".$name2."','".$name3."','".$name4."',NULL)"; 
			 mysqli_query($con,$query);
			 move_uploaded_file($_FILES['file']['tmp_name'][0],$target_dir.$name);
			 move_uploaded_file($_FILES['file']['tmp_name'][1],$target_dir.$name2);
			 move_uploaded_file($_FILES['file']['tmp_name'][2],$target_dir.$name3);
			 move_uploaded_file($_FILES['file']['tmp_name'][3],$target_dir.$name4);
			 $query1 = "INSERT INTO `attend`(`sid`, `c2`, `c1`, `c3`) VALUES ('$sid','0','0','0')";
			 mysqli_query($con,$query1);
		}

		
		
		
		#if (!mysqli_query($con,$query)) {
		#	die('Error: ' . mysqli_error($con));
		#}
		echo "1 record added";
		
		mysqli_close($con);
		header('location: newrecordmsg.php');
	}

?>
<html>

	<head>
		<title>Add Student</title>  
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
   
   <center>
   <div style="color:#ffffff;background-color:#424bf4;height:150px;"></br></br>
	<h1>Add New Student</h1>
	<form method="post" action="" enctype='multipart/form-data'>
	</br></br></br></br></br></br>
   <table>
	<tr>
		<td><label><b>Enter Student ID</b></label></td>
		<td><input type="text" name="sid" pattern="18(mcmt|MCMT)[0-9][0-9]" required /></input></td>
	</tr>
	<tr>
		<td><label><b>Enter Name</b></label></td>
		<td><input type="text" name="sname" required /></input></td>
	</tr>
	<tr>
		<td><label><b>Enter Image1</b></label></td>
		<td><input type="file" name="file[]" required /></input></td>
	</tr>
	<tr>
		<td><label><b>Enter Image2</b></label></td>
		<td><input type="file" name="file[]" required /></input></td>
	</tr>
	<tr>
		<td><label><b>Enter Image3</b></label></td>
		<td><input type="file" name="file[]" required /></input></td>
	</tr>
	<tr>
		<td><label><b>Enter Image4</b></label></td>
		<td><input type="file" name="file[]" required /></input></td>
	</tr>
	<tr>
		<td><label><b>Enter Image5</b></label></td>
		<td><input type="file" name="file[]" required /></input></td>
	</tr>
	<tr>
		<td></br></td>
	</tr>
		<td><input type="submit" value="submit" name="submit"></input></td>
		</br></br></br>
   
   </table>
	<button class="button button"> <a href=" menu.php">GO BACK TO MENU</a></button></br>
   </center>
   </form>
   </body>
</html>