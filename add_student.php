<html lang="en">

<head>
	<title> RA Database </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="radatabase.css">
</head>

<?php
include "navbar.php"
?>

<body>
<?php

include "db_connect.php";

$studentid = $_GET["studentid"];
$studentyear = $_GET["studentyear"];
$studentgender = $_GET["studentgender"];
$studentemail = $_GET["studentemail"];
$studentroom = $_GET["studentroom"];
$newfname = $_GET["newfname"];
$newlname = $_GET["newlname"];
$newbuildingid = $_GET["newbuildingid"];
$newraid = $_GET["newraid"];

// add to the database
echo"<h2>New student</h2>";

$sql = "INSERT INTO student (studentid, studentyear, gender, email, roomnum, fname, lname, buildingid, raid)
		VALUES ('$studentid', '$studentyear', '$studentgender', '$studentemail', '$studentroom', '$newfname',
		'$newlname', '$newbuildingid', '$newraid')";
$result = $mysqli->query($sql);


//will show all students and new student.
echo"<font size = '5'>";
echo"hello you have added ".$_GET["newfname"]; echo" ".$_GET["newlname"]; echo" student ID:".$_GET["studentid"]; 
echo", in building".$_GET["newbuildingid"]; echo", in room".$_GET["studentroom"]; echo" ".$_GET["newfname"]; 
echo" Resident assistant is".$_GET["newraid"];
echo "</font>";


include "search_all_students.php" 



?>

<br>
	<br>
	


</html>