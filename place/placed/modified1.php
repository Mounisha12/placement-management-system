<?php    
include "../connection.php";
    
    
$sql = "select * from placed";    
$result = mysqli_query($conn,$sql);    
?>    
<html>    
    <body>    
		<link href = "ViewPlaced.css" type = "text/css" rel = "stylesheet" />  
	    
		<div class="menu">
		
			<div class="leftmenu">
				<h4> DSATM-PMS </h4>
			</div>
			
			
			<div class="studentrightmenu">
			<ul>
				<li><a href="AdminLogin.php">ADMIN LOGIN</a></li>
				<li><a href="StudentLogin.php">STUDENT LOGIN</a></li>
				<li><a href="../aboutus.php">ABOUT US</a></li>
				<li><a href="../companyhome.php">BACK</a></li>
				
			</ul>
			</div>
		</div>
		</div>	
		<br><br><br>		
		<h1><center>Placed Student Details</center></h1>
		
		<table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>    
                <td>Student ID</td>    
                <td>Student Name</td>    
                <td>Branch</td>    
                <td>Company Name</td>    
                <td>Salary</td>        
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
					<?php echo $row->branch;?>  
				</td>  
				<td>  
					<?php echo $row->company;?>  
				</td>  
				<td>  
					<?php echo $row->salary;?>  
                </td>    
				<td> <a href="delete.php?id=<?php echo $row->studentID;?>" onclick="return confirm('Are You Sure')">Delete    
				</a>
				</td>  
			</tr>  
		<?php } ?>  			
        </table>   		
    </body>    
</html>