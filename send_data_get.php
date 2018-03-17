<html>
<head>
 <div style="text-align:center"><h1>This is the CENSUS-REPORT</h1></div>
</head>

<body>
 <div style="text-align:center">  <img src="icon.png"> </div>
<?php

$fname=$_GET['fname'];
$lname=$_GET['lname'];
$dob=$_GET['dob'];
$status=$_GET['status'];
$birthplace=$_GET['birthplace'];
$nationality=$_GET['nationality'];
$religion=$_GET['religion'];
$taddress=$_GET['taddress'];
$paddress=$_GET['paddress'];
$sname=$_GET['sname'];
$noc=$_GET['noc'];
$child1=$_GET['child1'];
$child2=$_GET['child2'];


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
