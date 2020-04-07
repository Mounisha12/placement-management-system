<html>    
		<head>    
        <title>Registration Form</title>    
    </head>    
    <body>    
        <link href = "placedStudent.css" type = "text/css" rel = "stylesheet" />    
		<link href = "../style.css" type = "text/css" rel = "stylesheet" /> 	
		<ul>
			<li style="float:right;"><a href="../companyhome.php"> Back to homepage</a></li>
		</ul>
		    
        <form name = "form1" action='modified.php' method = 'POST' enctype = "multipart/form-data" > 
        <div class = "contain"> 
        	<img src="avatar.png" class="avatar">
        <h2>Placed Student Details</h2>
				<div class = "form_group">    
                    <label>Student ID</label>    
                    <input type = "text" name = "studentID" required />    
                </div>
                <div class = "form_group">    
                    <label>Student Name</label>    
                    <select name = "studentName">
					<?php 
						include "../connection.php";
						$sql="select * from student";
						$result = mysqli_query($conn,$sql);
						$i=0;
						while($row=mysqli_fetch_object($result)){
							$i++;
					?>
						<option value = "<?php echo $row->studentName?>"><?php echo $row->studentName?></option>
						<?php } ?>
						</select>
                </div> 
					<div class = "form_group">    
                    <label>Branch</label>    
                    <input type = "text" name = "branch" value = "" required />    
                </div> 
                <div class = "form_group">    
                    <label>Company Name</label>    
                    <select name = "companyName">
					<?php 
						include "../connection.php";
						$sql="select * from company";
						$result = mysqli_query($conn,$sql);
						$i=0;
						while($row=mysqli_fetch_object($result)){
							$i++;
					?>
						<option value = "<?php echo $row->companyName?>"><?php echo $row->companyName?></option>
						<?php } ?>
					</select>
                </div>    
                 

				<div class = "form_group">    
                    <label>Salary</label>    
                    <input type = "text" name = "salary" value = "" required />    
                </div>
				
				
				<div class = "form_group">    
                    <input type = "submit" value = "submit"/>    
                </div>
				<div class = "form_group">    
                    <input type = "reset" value = "reset"/>    
                </div>
				
            </div>    
        </form>    
    </body>    
</html>    