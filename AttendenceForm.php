<?php  $pagetitle="AttendenceForm";
  include "includes/header.php";
  include "dbconnect.php";
  $flag=0;
  
  if(isset($_POST['submit'])) //get all submitted data 
  {
	 foreach($_POST['attendence_status'] as $id=>$attendence_status)
	 {
		$student_name=$_POST['student_name'][$id];
		$date=date("Y-m-d H:i:s");
		$class=$_POST['address'][$id];
	
		
		//query
		$result=mysqli_query($conn, "insert into tbl_attendence(student_name,attendence_status,class,date) values ('$student_name','$attendence_status','$class','$date')" );
		if($result)
		{
			$flag=1;
		}
	 
	 }
	 
  }
  
  
  ?>
 
 
 <div class="container">
              <div class="row">
                 <div class="templatemo-line-header" style="margin-top: 0px;" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Attendance Form</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                  </div>
                </div>
				
				<?php if($flag){  ?>
				<div class="alert alert-success">
				Attandence Data Insert Successfully
				
				</div>
				<?php } ?>
				
				
				<div class="well text-center"><?php echo date("Y-m-d") ?> </div>
				
				 <form action="AttendenceForm.php" method="POST">
				 	<table class="table table-striped">
				 		<tr>
				 			<th width="25%">Serial</th>
				 			<th width="25%">Student Name</th>
							<th width="25%">Email</th>
							<th width="25%">Student ID</th>
				 			<th width="25%">Attendance</th>
				 		</tr>
						
	<?php 
			$result=mysqli_query($conn, "select * from student_table");
			$serialnumber=0;
			$counter=0;
			while($row=mysqli_fetch_array($result))
			{
				$serialnumber++;
			
				
	?>
		<tr>
		<td> <?php echo $serialnumber; ?> </td>
		<td> <?php echo $row['student_name']; ?>
		<input type="hidden" value="<?php echo $row['student_name']; ?>" name="student_name[]"></td>
		<td> <?php echo $row['email']; ?>
		<input type="hidden" value="<?php echo $row['email']; ?>" name="email[]"></td>
		<td> <?php echo $row['address']; ?>
		<input type="hidden" value="<?php echo $row['address']; ?>" name="address[]"></td>
		<td>
		<input type="radio" name="attendence_status[<?php echo $counter; ?>]" value="present" checked="checked">Present
		<input type="radio" name="attendence_status[<?php echo $counter; ?>]" value="absent">Absent <br>
		<input type="radio" name="attendence_status[<?php echo $counter; ?>]" value="awr">AWR
		<td>
		</tr>
		
		<?php
		$counter++;
			}
		?>
					
						
	</table>	
	<input type="submit" name="submit" value="submit" class="btn btn-primary">



</div>