<?php

include("conn.php");
$m1=$m2=$m3="";
if(isset($_POST['submit']))
{
	$a = $_POST["ABC"];
	$query="select cid from course where fid='$a'";
	$result=mysqli_query($con,$query);
	if($data=mysqli_fetch_assoc($result))
	{
		$m1=$data['cname'];
		echo $m1;
	}
	else
	{
		echo '<script>alert("No Records not found");</script>';
	}
	$query1="select sid from attend";
	$result1=mysqli_query($con,$query);
	$array=array();
	while ($data = mysqli_fetch_assoc($result1))
	{
		print_r($data);
		array_push($array,$data['sid']);

	}
	$results = print_r($array);
?>


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
	<input type="text" name="ABC" pattern="[0-9][0-9][0-9][0-9]"></input></td>
	</br>
	  <input type='submit' value='submit' name='submit'>
	 </br></br>
	 <table style="width:50%; padding:2px;">
		<tr>
		    <th >STUDENT ID</th>
			<th >ATTENDANCE</th>
		</tr>
		
     </table>	 
   </center>
   </form>
   </body>
</html>