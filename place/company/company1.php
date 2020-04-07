<html>
<head>
	<title>Company Form</title>
	<link rel="stylesheet" type="text/css" href="company1.css">
</head>
<body>
	<form name = "form1" action='modified.php' method = 'POST' enctype = "multipart/form-data" >  
	<div class="company-details">
	<img src="avatar.png" class="avatar">
		<form method="" action="">
			<h1>Company Details</h1>
			<p>Company ID</p>
			<input type="text" name="companyID" placeholder="Enter Company ID" required>
			<p>Company Name</p>
			<input type="text" name="companyName" placeholder="Enter Company Name" required>
			<p>Address</p>
			<input type="text" name="address" placeholder="Enter Address" required>
			<p>Contact Number</p>
			<input type="text" name="contactNum" placeholder="Enter Contact number" required>
			<p>package</p>
			<input type="text" name="package" placeholder="Enter Department" required>
			<p>Required Grade</p>
			<input type="text" name="requiredGrade" placeholder="Enter Grade" required>
			<br><br>
			<input type="submit" name="" value="Save">
			<button type="submit"><a href="../companyhome.php">Back</a></button>
		</form>
	</div>
</body>
</html>
