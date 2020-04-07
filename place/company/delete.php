<?php
include "../connection.php";    
if(isset($_GET['id'])){    
$sql = "delete from company where companyID = '".$_GET['id']."'";    
$result = mysqli_query($conn,$sql);    
}
header('Location:modified1.php');
?>