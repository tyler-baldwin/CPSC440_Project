
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
include "search_all_students.php"

?>

<br>
	<br>
	
<h2><a href ="index.php"> Return to main page</a></h2>