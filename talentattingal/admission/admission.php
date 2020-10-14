<?php
ob_start();
include('serverscript/mysqlconnect.php');
$res=mysqli_query($con,"SELECT * FROM `admissiondata` ORDER BY `id` DESC");
$row=mysqli_fetch_array($res);
$RefNo=$row['id'].rand(999,9999);
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>TALENT ADMISSION</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel="icon" href="img/favicon.ico">
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body >



<div class="container">
 
    <div class="row" >
	
      <h4 align="center">Welcome To Talent-Admission</h4>
	  
	  <table class="table table-bordered table-striped">
	  <form method="post" action="actions/admission.php">
	 <tr><td>Ref No:</td><td><input type="text" name="RefNo" readonly="" value="<?php echo $RefNo?>" required='true'></td></tr>
	<tr><td>Student Name:</td><td><input type="text" name="SName" required='true'></td></tr>
	
	<tr><td>Parent Name:</td><td><input type="text" name="PName" required='true'></td></tr>
	
	
	<tr><td>Sex:</td><td><select name="Sex"><option>Male</option><option>Female</option></select></td></tr>
	
	
	
	<tr><td>Date Of Birth:</td><td><input type="date" name="BOB" value="<?php echo date('Y-m-d');?>"></td></tr>
	
	<tr><td>Parent PhNo:</td><td><input type="text" name="PPhNo" required='true'></td></tr>
	
	<tr><td>Course:</td><td><select name="Course" required='true' id="Course" >
						
						<option value="" selected="selected" disabled="disabled">Select Course</option>
						<option>Plus One</option>
						<option>Plus Two</option>
						<option>I VHSE</option>
						<option>II VHSE</option>
						<option>Medical Entrance</option>
						<option>Engineering Entrance</option>
						<option>Medical & Engineering Entrance</option>
						
						
						</select></td>
	</tr>
	<tr><td>Total Fee:</td><td><input type="text" id="TFee" name="TFee" readonly=""></td></tr>
	<tr><td>Fee Strucure:</td><td><select name="FeeDeta" required='true' id="Fee" >
					
						
						
						
						</select></td>
	</tr>
	
	<tr>
	<td>Student Address:</td><td><textarea name="SAddress"></textarea></td></tr>
	<tr><td>Panchayathu:</td><td><input type="text" name="Panchayathu"></td></tr>
	<tr><td>Location:</td><td><input type="text" name="Location"></td></tr>
	
	
	
	<tr><td>Landmark:</td><td><textarea name="Landmark"></textarea></td></tr>
	<tr><td>Present School:</td><td><input type="text" name="PSchool"></td></tr>
	
	
	<tr><td colspan="2"><input type="submit" name="Submit" value="Register"></td></tr>
	
	</form>
	</table>
	  
	
    </div>
    
    

</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>








</body>

<style>
body,html{ width:100%; height:100%}
body{ margin:0px; padding:0px; background-image:url(img/bg-img-1.jpg); background-attachment:fixed; background-size:100% 100%}
.container{  padding-bottom:50px; color:#666666  }
h4{ color:#006600}
input[type=submit]{ background-color:#006600; color:#FFFFFF}
td{ vertical-align:middle}
select{ width:100%}
</style>

<script type="text/javascript">

$('#Course').change(function()
	{	
		
		var Course=$('#Course').val();
		if(Course=='Plus One')
			{	
				$('#Fee').empty();
				$('#Fee').append('<option>Admission Fee – Rs. 10,000/- & Rs. 1,500 X 10 Months (April to January)</option> <option>One Time Payment - Rs. 23,000/- (Within 10 Days)</option> <option>3 Installments - 1st Rs. 9,000/- (Joining Time) 2nd Rs. 8,000/- (Before July31st)3rd Rs. 8,000/- (Before November 30th)</option>');
				$('#TFee').val('Rs. 25,000/-');
			}
		
		if(Course=='Plus Two')
			{	
				$('#Fee').empty();
				$('#Fee').append('<option>Admission Fee – Rs. 10,000/- & Rs. 1,700 X 10 Months (April to January)</option> <option>One Time Payment - Rs. 25,000/- (Within 10 Days)</option> <option>3 Installments - 1st Rs. 9,000/- (Joining Time) 2nd Rs. 9,000/- (Before July31st)3rd Rs. 9,000/- (Before November 30th)</option>');
				$('#TFee').val('Rs. 27,000/-');
			}
			
		if(Course=='I VHSE')
			{	
				$('#Fee').empty();
				$('#Fee').append('<option>Admission Fee – Rs. 10,000/- & Rs. 1,300 X 10 Months (April to January)</option> <option>One Time Payment - Rs. 23,000/- (Within 10 Days)</option> <option>3 Installments - 1st Rs. 8,000/- (Joining Time) 2nd Rs. 8,000/- (Before July31st) 3rd Rs. 7,000/- (Before November 30th)</option>');
				$('#TFee').val('Rs. 23,000/-');
			}
			
		if(Course=='II VHSE')
			{	
				$('#Fee').empty();
				$('#Fee').append('<option>Admission Fee – Rs. 10,000/- & Rs. 1,500 X 10 Months (April to January)</option> <option>One Time Payments - Rs. 23,000/- (Within 10 Days)</option> <option>3 Installments - 1st Rs. 9,000/- (Joining Time) 2nd Rs. 8,000/- (Before July31st) 3rd Rs. 8,000/- (Before November 30th)</option>');
				$('#TFee').val('Rs. 25,000/-');
			}
		
		if(Course=='Medical Entrance')
			{	
				$('#Fee').empty();
				$('#Fee').append('<option>Medical Entrance Crash Course Fee 12000</option>');
				$('#TFee').val('Rs. 12,000/-');
			}
		
		if(Course=='Engineering Entrance')
			{	
				$('#Fee').empty();
				$('#Fee').append('<option>Kerala Engineering Entrance Crash Course Rs. 7500</option>');
				$('#TFee').val('Rs. 7,500/-');
			}
		if(Course=='Medical & Engineering Entrance')
			{	
				$('#Fee').empty();
				$('#Fee').append('<option>Medical & Engineering Entrance Crash Course Rs. 13500</option>');
				$('#TFee').val('Rs. 13,500/-');
			}
		
	});


</script>