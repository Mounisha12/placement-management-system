<?php    
include "../connection.php";   
$sql = "select * from company";    
$result = mysqli_query($conn,$sql);    
?>    
<html>    
    <body>    
		<link href = "Vcomp.css" type = "text/css" rel = "stylesheet" />  
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
		<br><br><br><br><br><br>
		</div>	
		<h1><center>Company Details</center></h1>
		<table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>    
                <td>Company ID</td>    
                <td>Company Name</td>    
                <td>Address</td>    
                <td>Contact Number</td>    
                <td>Package</td>    
                <td>Required Grade</td>    
                <td colspan = "2">Action</td>    
            </tr>  
	<?php    
		while($row = mysqli_fetch_object($result)){    
	?>  
			<tr>  
				<td>  
					<?php echo $row->companyID;?>  
				</td>  
				<td>  
					<?php echo $row->companyName;?>  
				</td>  
				<td>  
					<?php echo $row->address;?>  
				</td>  
				<td>  
					<?php echo $row->contactNum;?>  
				</td>  
				<td>  
					<?php echo $row->package;?>  
				</td>  
				<td>  
					<?php echo $row->requiredGrade;?>  
				</td>    
				<td> <a href="delete.php?id=<?php echo $row->companyID;?>" onclick="return confirm('Are You Sure')">Delete    
				</a>
				</td>  
			</tr>  
		<?php } ?>  			
        </table>   		
    </body>    
</html>