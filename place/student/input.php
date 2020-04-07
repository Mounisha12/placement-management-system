<?php
		include "../connection.php";
		$ac=$_POST['studentID'];
		$an=$_POST['studentName'];
		$d=$_POST['address'];
		$a=$_POST['dept'];
		$p=$_POST['CGPA'];
		$con=$_POST['contactNum'];
		$query="insert into student(studentID, studentName, address, dept, CGPA, contactNum) values('$ac','$an','$d','$a',$p,$con)";
		mysqli_query($conn,$query) or die($query."Can't Connect to Query...");
?>