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

$orgID = $_GET["orgID"];
$orgName = $_GET["orgName"];


// add to the database
echo"<h2>New Organization</h2>";

$sql = "INSERT INTO organization (orgID, orgName)
		VALUES ('$orgID', '$orgName')";
$result = $mysqli->query($sql);


//will show all students and new student.
echo"<font size = '5'>";
echo"hello you have added ".$_GET["orgID"]; echo" ".$_GET["orgName"]; 
echo "</font>";


include "search_all_organization.php" 



?>

<br>
	<br>
	


</html>