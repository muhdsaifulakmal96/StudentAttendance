<?php  $pagetitle="Attendance Update";
  include "includes/header.php";
  include "dbconnect.php";
  ?>
  
  
  <?php
		 if (isset($_POST['update'])){
		
		 
		 $student_name = $_POST['student_name'];
		 $attendence_status = $_POST['student_name'];
		 $class = $_POST['class'];
		 $date = $_POST['date'];
		 
		 $sql = "UPDATE tbl_attendence SET student_name = '".$student_name."', attendence_status = '".$attendence_status."', class = '".$class."', date = '".$date."'";
		 
		 
		 mysqli_query($conn,$sql) or die ("Error: ".mysqli_error());
		 echo '<script>alert("update success!"); window.location = "showallattendance.php"; </script>';}
		 
		 
	?>
	
	
	
	