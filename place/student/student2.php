<html>
<head>
	<title>Student Form Design</title>
	<link rel="stylesheet" type="text/css" href="stud2.css">
<body>
	<form name = "form1" action='modified.php' method = 'POST' enctype = "multipart/form-data" >
	
	<div class="student-details">
	
	<img src="avatar.png" class="avatar">
		
		
			<form method="post" action="stuconnect.php">
			<h1>Student Details</h1>
			<p>Student ID</p>
			<input type="text" name="studentID" placeholder="Enter Student ID" required>
			<p>Student Name</p>
			<input type="text" name="studentName" placeholder="Enter username" required>
			<p>Address</p>
			<input type="text" name="address" placeholder="Enter Address" required>
			<p>Department</p>
			<input type="text" name="dept" placeholder="Enter Department" required>
			<p>CGPA</p>
			<input type="text" name="CGPA" placeholder="Enter CGPA" required>
			<p>Contact no.</p>
			<input type="text" name="contactNum" placeholder="Enter Contact number" required>
			<br><br>
			<input type="submit" name="" value="Save">
			<button type="submit"><a href="../studhome.php">Back</a></button>
			</form>
			</div>
			</form>
			</body>
</head>
</html>
