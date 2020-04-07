<html>    
    <head>    
        <title>Registration Form</title>    
    </head>    
    <body>    
        <link href = "student.css" type = "text/css" rel = "stylesheet" />
		<link href = "../style.css" type = "text/css" rel = "stylesheet" /> 
		<ul>
		<li style="float:right;"><a href="../studhome.php">Back to homepage</a></li>    
		</ul>
		   
        <form name = "form1" action='modified.php' method = 'POST' enctype = "multipart/form-data" >    
            <div class = "container">
			<img src="avatar.png" class="avatar">
			<h2>student details</h2> 
				<div class = "form_group">    
                    <label>Student ID</label>    
                    <input type = "text" name = "studentID" placeholder="Enter student ID "required />    
                </div>
                <div class = "form_group">    
                    <label>Student Name</label>    
                    <input type = "text" name = "studentName" value = "" placeholder="Enter student Name" required />    
                </div>    
                <div class = "form_group">    
                    <label>Address</label>
					<input type = "text" name = "address" value = "" placeholder="Enter student Address" required />
                </div>
				<div class = "form_group">    
                    <label>Department</label>    
                    <input type = "text" name = "dept" value = "" placeholder="Enter department" required />    
                </div>
				<div class = "form_group">    
                    <label>CGPA</label>    
                    <input type = "text" name = "CGPA" value = "" placeholder="Enter CGPA" required />    
                </div>
				<div class = "form_group">    
                    <label>Contact Number </label>    
                    <input type = "text" name = "contactNum" value = "" placeholder="Enter contact Number" required" />    
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