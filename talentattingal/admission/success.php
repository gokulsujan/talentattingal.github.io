<?php
ob_start();
include('serverscript/mysqlconnect.php');
if(!isset($_GET['RefNo'])){ header('location:admission.php');}

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
	 
	 <?php if($_GET['msg']=='Success')
	 	{
	 ?>
	 
	 <tr><td><h1 style="color:#00CC33"><i class="fa fa-check" aria-hidden="true"></i></h1></td></tr>
	 
	 <tr><td id="SubLet">Your Apllication Referance No: <?php echo $_GET['RefNo'];?></td></tr>
	 
	 
	 <tr><td id="SubLet">Your Admission Application Has Been Submited Successfully.<br>We Will Get Back You Shortly.<br>Thanks & Regards, Team Talent</td></tr>
	 
	 
	 
	 
	 
	 <?php
	 	}
		else{
	 ?>
	 
	  <tr><td><h1 style="color:#ff0000"><i class="fa fa-check" style="border:3px solid #ff0000" aria-hidden="true"></i></h1></td></tr>
	 <tr><td id="SubLet">Your Apllication Referance No: <?php echo $_GET['RefNo'];?></td></tr>
	 <tr><td id="SubLet">Failed To Submit Your Admission Apllication.<br>Please Try Again.<br>Thanks & Regards, Team Talent</td></tr>
	 
	  <?php
	  }
	  ?>
	  
	 <tr><td> <a href="index.php"><button id="Admission">Go To Home</button></a></td></tr>
	  
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
h1{ text-align:center; }
h1 i{ padding:5px; border:3px solid #00CC33; border-radius:50px;}
#SubLet{ color:#666666; text-align:center;}
</style>

