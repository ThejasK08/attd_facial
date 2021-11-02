
<html>

	<head>
		<title style="color">COURSE ATTENDANCE</title>  
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
      table, th, td {
		  font-size:30px;
  border: 1px solid black;
  border-collapse: collapse;
}
  th
    {
	  
	color:#000066;
    }
  td
   {
	  
	  color:#ffffff;
   }
</style>



   </head>
   <body>
   <form method="post" action="">
   <center >
    <div style="color:#ffffff;background-color:#424bf4;height:150px;"></br></br>
	<h1 style="top:250px;">Attendence</h1>
	</div>
	</br></br></br></br></br> 
	
     <label>Enter Faculty ID</label>
	<input type="text" name="ABC" pattern="[0-9][0-9][0-9][0-9]" required /></input></td>
	</br>
	  <input type='submit' value='submit' name='submit'>
	 </br></br>
	 
	 <table style="width:50%; padding:2px;">
		<tr>
		    <th >STUDENT ID</th>
			<th >ATTENDANCE</th>
		</tr>
		<?php
include("conn.php");
$m1=$m2=$m3="";
if(isset($_POST['submit']))
{
	$a = $_POST["ABC"];
		$query="select * from course where fid='$a'";
		$result=mysqli_query($con,$query);
		if($data=mysqli_fetch_assoc($result))
		{
			$m1=$data['cname'];
			$m2=$data['cid'];
			//echo $m2;
		}
		else
		{
			echo '<script>alert("Studetn not found");</script>';
		}
	//	$query1="select sid from attend";
		//$result1=mysqli_query($con,$query1);
		//$array=array();
		//$data3 = mysqli_fetch_assoc($result1);
				
		//$count=count($array);
		$query2="select sid,$m2 from attend";
		$result2=mysqli_query($con,$query2);
		while ($data2 = mysqli_fetch_assoc($result2))
		{?>
	
		<tr>
		<td><?php echo $data2['sid']; ?></td>
		<td>
		   <?php echo $data2[$m2]; ?></td>
		</tr>
<?php
		}
		
		//$last_names = array_column($array, 'sid');
		
}
?>


	
     </table>	 
	            
	

   </center>
   </form>
   </body>
</html>