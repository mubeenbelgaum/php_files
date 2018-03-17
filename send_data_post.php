<html>
<head>
 <div style="text-align:center"><h1>This is the CENSUS-REPORT </h1></div>
</head>

<body>
 <div style="text-align:center">  <img src="icon.png"> </div>
<?php

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$status=$_POST['status'];
$birthplace=$_POST['birthplace'];
$nationality=$_POST['nationality'];
$religion=$_POST['religion'];
$taddress=$_POST['taddress'];
$paddress=$_POST['paddress'];
$sname=$_POST['sname'];
$noc=$_POST['noc'];
$child1=$_POST['child1'];
$child2=$_POST['child2'];


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
