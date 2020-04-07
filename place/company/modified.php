<?php    
include "input.php";          
$sql = "select * from company";    
$result = mysqli_query($conn,$sql);    
?>    
<html>    
    <body>    
        <link href = "../style.css" type = "text/css" rel = "stylesheet" />    
		<link href = "registration.css" type = "text/css" rel = "stylesheet" />    
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
				<td> <a href="delete.php?id =     
					<?php echo $row->companyID;?>" onclick="return confirm('Are You Sure')">Delete    
				</a> 
				</td>  
			</tr>  
		<?php } ?>  			
        </table>
<?php header('Location: modified1.php')?>;   		
    </body>    
</html>