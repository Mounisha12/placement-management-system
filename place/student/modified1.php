<?php    
include "../connection.php";
    
    
$sql = "select * from student";    
$result = mysqli_query($conn,$sql);    
?>    
<html>    
    <body>    
		<link href = "Vstud.css" type = "text/css" rel = "stylesheet" />  
		<div class="menu">
		
			<div class="leftmenu">
				<h4> DSATM-PMS </h4>
			</div>
			
			
			<div class="studentrightmenu">
			<ul>
				<li><a href="AdminLogin.php">ADMIN LOGIN</a></li>
				<li><a href="StudentLogin.php">STUDENT LOGIN</a></li>
				<li><a href="../aboutus.php">ABOUT US</a></li>
				<li><a href="../studhome.php">BACK</a></li>
				
			</ul>
			</div>
		</div>
		
		<br><br><br>
		</div>	
	    		
		<h1><center>Student Details</center></h1>
		
		<table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>    
                <td>Student ID</td>    
                <td>Student Name</td>    
                <td>Address</td>    
                <td>Department</td>    
                <td>CGPA</td>    
                <td>Contact Number</td>
	
                <td colspan = "2">Action</td>    
            </tr>  
	<?php    
    
		while($row = mysqli_fetch_object($result)){    
    
    
	?>  
			<tr>  
				<td>  
					<?php echo $row->studentID;?>  
				</td>  
				<td>  
					<?php echo $row->studentName;?>  
				</td>  
				<td>  
					<?php echo $row->address;?>  
				</td>  
				<td>  
					<?php echo $row->dept;?>  
				</td>  
				<td>  
					<?php echo $row->CGPA;?>  
				</td>  
				<td>  
					<?php echo $row->contactNum;?>  
				</td> 
				
				<td> <a href="delete.php?id=<?php echo $row->studentID;?>" onclick="return confirm('Are You Sure')">Delete    
				</a>
				</td>  
			</tr>  
		<?php } ?>  			
        </table>   		
    </body>    
</html>