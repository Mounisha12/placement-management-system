
<html>
<head>
	<title>Placed Student Form</title>
	<link rel="stylesheet" type="text/css" href="placed1.css">
</head>
<body>
	 <form name = "form1" action='modified.php' method = 'POST' enctype = "multipart/form-data" > 
	
	<div class="placedstudent-details">
	<img src="avatar.png" class="avatar">
		
		
			<form method="post" action="">
			<h1>Placed Student Details</h1>
			<p>Student ID</p>
			<input type="text" name="studentID" placeholder="Enter Student ID" required>
			<p>Student Name</p>
			<br>
			<select name="studentName">
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
			<br><br>
			<p>Branch</p>
			<input type="text" name="branch" placeholder="Enter branch" required>
			<p>Company</p>
			<br>
			<select name="company">
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
			<br><br>
			<p>Salary</p>
			<input type="text" name="salary" placeholder="Enter salary" required>
			<br><br>
			<input type="submit" name="" value="Save">
			<button type="submit"><a href="../companyhome.php">Back</a></button>
			
			</form>
			</div>
			
			</body>
</head>
</html>
