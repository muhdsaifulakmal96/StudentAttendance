<?php  $pagetitle="AttendenceForm";
  include "includes/header.php";
  include "dbconnect.php";

  
  ?>
 
   
  <?php
		 if (isset($_POST['update'])){
		
		 
		 $student_name = $_POST['student_name'];
		 $attendence_status = $_POST['student_name'];
		 $class = $_POST['class'];
		 $date = $_POST['date'];
		 
		 $sql = "UPDATE tbl_attendence SET student_name where  = '".$student_name."', attendence_status = '".$attendence_status."', class = '".$class."', date = '".$date."'";
		 
		 
		 mysqli_query($conn,$sql) or die ("Error: ".mysqli_error());
		 echo '<script>alert("update success!"); window.location = "showallattendance.php"; </script>';}
		 
		 
	?>
	
	
	
	
 
 
 
 <div class="container">
              <div class="row">
                 <div class="templatemo-line-header" style="margin-top: 0px;" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Show Attendance</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                  </div>
                </div>
				
				
					<div class="panel-body">
				 	<table class="table table-striped">
				 		<tr>
				 			<th width="25%">No.</th>
				 			<th width="25%">Student Name</th>
							<th width="23%">Student Id</th>
							<th width="25%">Date</th>
				 			<th width="25%">Attendance</th>
							<th width="25%">Action</th>
				 		</tr>
						
	<?php 
			$result=mysqli_query($conn, "select * from tbl_attendence where date='$_POST[date]'");
			$serialnumber=0;
			$counter=0;
			while($row=mysqli_fetch_array($result))
			{
				$serialnumber++;
	?>
		<form name="showallattendance" action=" <?php echo $_SERVER["PHP_SELF"];?>" method="post">
		<tr>
		<td> <?php echo $serialnumber; ?> </td>
		<td> <?php echo $row['student_name']; ?></td>
		<td> <?php echo $row['class']; ?></td>
		<td> <?php echo $row['date']; ?></td>
		<td><input type="text" name="attendence_status" value="<?php echo $row['attendence_status']; ?>"</td>
		<td><input type="submit" class="ui mini red button"  name="update" Value="Update">
		</tr>
	</form>
		<?php
		$counter++;
			}
		?>
		
	
	</table>	


</div>