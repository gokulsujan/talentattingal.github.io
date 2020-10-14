<?php
$con=mysqli_connect("localhost","hostwvmr_talntad","TalentAdmDb20!8","hostwvmr_talentadmission");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
date_default_timezone_set("Asia/Kolkata");  
$month=date('n');
$year=date('Y');

$datevarpix="DeviceLogs_".$month."_".$year;
$TDate=date('Y-m-d');

$SID="";
$ActId="";
$head="Dear Parent,";
$Footer=" Thanks And Regards TALENT";
$Instiname="TALENT Attingal";


$IntervalTime=1800;

?>