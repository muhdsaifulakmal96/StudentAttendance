<?php
  $pagetitle="Attendance Report";
  include "includes/header.php";
  include "dbconnect.php";  ?>
  
  <div class="container">
         <div class="row">
                 <div class="templatemo-line-header" style="margin-top: 0px;" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Attendance Report</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                </div>
				
			
			<div class="panel-body">
			   
				
				 	<table class="table table-striped">
				 		<tr>
				 			<th width="25%">Serial</th>
				 			<th width="25%">Dates</th>
							<th width="25%">Show Attendance</th>
				 		</tr>

	<?php $result=mysqli_query($conn,"select distinct date from tbl_attendence");
	$serialnumber=0;
	while($row=mysqli_fetch_array($result))
	{
		$serialnumber++;
		
	
	?>
	<tr>
	<td>  <?php echo $serialnumber  ?>  </td>
	<td>  <?php echo $row['date'];  ?>  </td>
	
	<td>
	<form action="showallattendance.php" method="POST">
	<input type="hidden" value="<?php echo $row['date'] ?>" name="date">
	<input type="submit" value="Show Attendance" class="btn btn-primary">
	</form>
	</td>
	</tr>
	<?php

	}
	?>
	</table>
	
	</div>
	</div>