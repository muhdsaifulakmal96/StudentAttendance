<?php 
   $pagetitle="Import File";
  include "includes/header.php"; 
  include "dbconnect.php";

?>

<html>
	<div class="row">
                    <div class="templatemo-line-header" style="margin-top: 0px;" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Import File</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
    </div>
	
	
	
<head><title>Import data</title></head>
<form name= "import" method="post" action="importhandler.php">
<center><br>
	Enter The File Name
	<br><input type="text" name="excelname" placeholder="input.xlsx">
	<br><input type="submit" value="submit"></center></form>
</html>