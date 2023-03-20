<?php  $pagetitle="Import File Student";
  include "includes/header.php"; ?>




<?php
	include ("dbconnect.php");
	include ("PHPExcel\IOFactory.php");

	$excelname = $_POST['excelname'];
	$html ="<table border ='1'>";
	$objPHPExcel=PHPExcel_IOFactory::load($excelname);
	foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
	{
		$highestRow = $worksheet->getHighestRow();
		for($row=2; $row<=$highestRow;$row++)
		{
			$html.="<tr>";
			
			$student_name = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(1,$row)->getValue());
			$dob = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(2,$row)->getValue());
			$gender = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(3,$row)->getValue());
			$email = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(4,$row)->getValue());
			$phone = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(5,$row)->getValue());
			$address = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(6,$row)->getValue());
			$Session = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(7,$row)->getValue());
			$Program = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(8,$row)->getValue());
			$Semester= mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(9,$row)->getValue());
			$sql = "INSERT INTO student_table(student_name,dob,gender,phone,email,address,Session,Program,Semester) 
					VALUES ('".$student_name."','".$dob."','".$gender."','".$phone."','".$email."','".$address."','".$Session."','".$Program."','".$Semester."')";
			mysqli_query($conn,$sql);
			$html.= '<td>' .$student_name. '</td>';
			$html.= '<td>' .$dob. '</td>';
			$html.= '<td>' .$gender. '</td>';
			$html.= '<td>' .$email. '</td>';
			$html.= '<td>' .$phone. '</td>';
			$html.= '<td>' .$address. '</td>';
			$html.= '<td>' .$Session. '</td>';
			$html.= '<td>' .$Program. '</td>';
			$html.= '<td>' .$Semester. '</td>';
			
		}
	}
	
	$html.= '</table>';
	echo $html;
	echo '<br />Data Inserted';

?>
