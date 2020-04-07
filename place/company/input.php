<?php
		include "../connection.php";
		$ac=$_POST['companyID'];
		$an=$_POST['companyName'];
		$d=$_POST['address'];
		$a=$_POST['contactNum'];
		$p=$_POST['package'];
		$con=$_POST['requiredGrade'];
		$query="insert into company(companyID, companyName, address, contactNum, package, requiredGrade) values('$ac','$an','$d',$a,$p,$con)";
		mysqli_query($conn,$query) or die($query."Can't Connect to Query...");
?>