<?php
		include "../connection.php";
		$ac=$_POST['studentID'];
		$an=$_POST['studentName'];
		$d=$_POST['branch'];
		$a=$_POST['company'];
		$p=$_POST['salary'];
		$query="insert into placed(studentID, studentName, branch, company, salary) values('$ac','$an','$d','$a',$p)";
		mysqli_query($conn,$query) or die($query."Can't Connect to Query...");
?>