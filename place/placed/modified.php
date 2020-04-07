<?php    
include "input.php";    
 $sql = "call storedproc();";       
$sql = "select * from placed";    
$result = mysqli_query($conn,$sql);    
?>    
<html>    
    <body>    
        <link href = "../style.css" type = "text/css" rel = "stylesheet" />    
		<link href = "registration.css" type = "text/css" rel = "stylesheet" />    
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
				<td> <a href="delete.php?id =     
					<?php echo $row->studentID;?>" onclick="return confirm('Are You Sure')">Delete    
				</a> 
				</td>  
			</tr>  
		<?php } ?>  			
        </table>
<?php header('Location: modified1.php')?>;   		
    </body>    
</html>