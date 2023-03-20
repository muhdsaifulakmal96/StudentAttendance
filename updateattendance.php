<?php

	include "dbconnect.php";
	
	$serial=$_GET['roll_number'];
	$sql="DELETE from tbl_attendence where roll_number='$serial'";
	$result=mysql_query($sql);
	
	if($result){
		
		echo "DELETE SUCCESSFULLY";
		echo "<br>";
		echo "<a href='/SaharProject/showallattendance.php'>";
	}
	else{
		echo "ERROR";
	}
	
	?>
	
	
