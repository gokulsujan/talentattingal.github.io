<?php
ob_start();

include('../serverscript/mysqlconnect.php');

if(isset($_POST['Submit']))
		{
		
			if($_POST['Submit']=='Register')
				{
				
				$ch=mysqli_query($con,"INSERT INTO `admissiondata`( `SName`, `PName`, `Sex`, `BOB`, `PPhNo`, `Course`, `TFee`, `FeeDeta`, `SAddress`, `Panchayathu`, `Landmark`, `PSchool`, `RefNo`) VALUES ('".$_POST['SName']."', '".$_POST['PName']."', '".$_POST['Sex']."', '".$_POST['BOB']."', '".$_POST['PPhNo']."', '".$_POST['Course']."', '".$_POST['TFee']."', '".$_POST['FeeDeta']."', '".$_POST['SAddress']."', '".$_POST['Panchayathu']."' ,'".$_POST['Landmark']."', '".$_POST['PSchool']."', '".$_POST['RefNo']."')");
				
				
				if($ch){ $msg="Success"; $RefNo=$_POST['RefNo'];}
				
				else{$msg="Fail"; $RefNo=$_POST['RefNo'];}
				
				
				echo $msg;
				header('location:../success.php?msg='.$msg.'&RefNo='.$RefNo);
				}
		
		
		}


?>