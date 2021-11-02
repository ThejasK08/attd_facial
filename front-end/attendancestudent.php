
<?php
include("conn.php");
$m1=$m2=$m3="";
if(isset($_POST['submit']))
{
	$a = $_POST["ABC"];
		$query="select * from attend where sid='$a'";
		$result=mysqli_query($con,$query);
		if($data=mysqli_fetch_assoc($result))
		{
			$m1=$data['c1'];
			$m2=$data['c2'];
			$m3=$data['c3'];
		}
		else
		{
			echo '<script>alert("Studetn not found");</script>';
		}
}
?>


<html>
	<head>
		<title style="color">VIEW ATTENDANCE</title>  
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
	
     <label>Enter Student ID</label>
	<input type="text" name="ABC" pattern="18(mcmt|MCMT)[0-9][0-9]" required /></input></td>
	</br>
	  <input type='submit' value='submit' name='submit'>
	 </br></br>
	 <table style="width:50%; padding:2px;">
		<tr>
		    <th >SUBJECTS</th>
			<th >ATTENDANCE</th>
		</tr>
		<tr>
		  <td >Software Engineering</td>
		  <td><?php  echo $m1; ?></td>
		</tr>
		<tr>
		  <td >Virtualization</td>
		  <td><?php  echo $m2; ?></td>
		</tr>
		<tr>
		   <td >Cloud Computing</td>
		   <td><?php  echo $m3; ?></td>
		</tr>
     </table>	 
	      <button class="button button"> <a href=" menu.php">GO BACK TO MENU</a></button></br>      
	

   </center>
   </form>
   </body>
</html>