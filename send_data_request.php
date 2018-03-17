<html>
<head>
 <div style="text-align:center"><h1>This is the CENSUS-REPORT</h1></div>
</head>

<body>
 <div style="text-align:center">  <img src="icon.png"> </div>
<?php

$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$dob=$_REQUEST['dob'];
$status=$_REQUEST['status'];
$birthplace=$_REQUEST['birthplace'];
$nationality=$_REQUEST['nationality'];
$religion=$_REQUEST['religion'];
$taddress=$_REQUEST['taddress'];
$paddress=$_REQUEST['paddress'];
$sname=$_REQUEST['sname'];
$noc=$_REQUEST['noc'];
$child1=$_REQUEST['child1'];
$child2=$_REQUEST['child2'];


  echo "Name : $fname<br />";
  echo "Surname : $lname<br />";
  echo "Date of birth : $dob<br />";
  echo "Marital status : $status<br />";
  echo "Place of birth : $birthplace<br />";
  echo "Nationality : $nationality<br />";
  echo "Religion : $religion<br />";
  echo "Temporary Address : $taddress<br />";
  echo "Permanent Address : $paddress<br />";
  echo "Spouse Name : $sname<br />";
  echo "Number of children : $noc<br />";
  echo "Name of 1st child : $child1<br />";
  echo "Name of 2nd child : $child2<br />";


?>
</body>
</html>
