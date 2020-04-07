<html>    
    <head>    
        <title>Registration Form</title>    
    </head>    
    <body>    
        <link href = "company.css" type = "text/css" rel = "stylesheet" /> 
		<link href = "../style.css" type = "text/css" rel = "stylesheet" /> 	
		<ul>
			<li style="float:right;"><a href="../companyhome.php"> Back to homepage</a></li>
		</ul>
		   
        <form name = "form1" action='modified.php' method = 'POST' enctype = "multipart/form-data" >    
            <div class = "container">
			<img src="avatar.png" class="avatar">
			<h2>Company Details</h2> 
                <div class = "form_group">    
                    <label>Company ID</label>    
                    <input type = "text" name = "companyID" value = "" placeholder="Enter company ID" required />    
                </div>    
                <div class = "form_group">    
                    <label>Company Name</label>    
                    <input type = "text" name = "companyName" value = "" placeholder="Enter company Name" required />    
                </div>    
                <div class = "form_group">    
                    <label>Address</label>    
                    <input type = "text" name = "address" value = "" placeholder="Enter Address" required />    
                </div>  
				<div class = "form_group">    
                    <label>Contact Number</label>
					<input type = "text" name = "contactNum" value = "" placeholder="Enter Contact Number" required />
                </div>
				<div class = "form_group">    
                    <label>Package</label>
					<input type = "text" name = "package" value = "" placeholder="Enter Package" required />
                </div>
				<div class = "form_group">    
                    <label>Required Grade</label>    
                    <input type = "text" name = "requiredGrade" value = "" placeholder="Enter Required Grade" required />    
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