
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

<html lang="en">


<head>
	<title> RA Database </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="radatabase.css">
</head>

<center>
<img src="cnu.jpg" alt="CNU" >
</center>

<br>

<?php
include "navbar.php"
?>

<body>


<header>
	<h1>Resident Assistant DATABASE</h1>
</header>


<body>

	<p>
		Hello Resident Assistants. <br>
		<br>
		This is your database, with great power comes great responsibilty. This Database
		is intended for the use of Resident Assistant ONLY. Violation of this will be considered a violation 
		of your honor code. 
	</p>
	<p>
		For a current and complete list please use links below. To quiery or filter the information, use the navagation
		above. 
	</p>
	<p>
		For quick singular student searchers, use the quick search bar below - use the last name only.
	</p>
	
	<br>
		<br>
			<br>


	<?php

	//connects to the database
	include "db_connect.php";

	//shows all students in DB
	//include "search_all_students.php";

	?>

	<!--href to list of all students living on campus -->
	<a href ="search_all_students.php"><b>Current list of all students living on campus.</b></a>
		<br>
		
			<br>
			
	<!--href to list of all student RAs. -->
	<a href ="search_ra.php"><b>Current list of student resident assistants</b></a>
		<br>
		
			<br>
	
	<!--href to list of all organizations on campus -->
	<a href ="search_all_organization.php"><b>Current list of all campus organizations.</b></a>
		<br>
		
			<br>
	<!--href to list of all students living on campus in an org. -->
	<a href ="search_memberof.php"><b>Current list of students living on campus in organizations.</b></a>
		<br>
		
			<br>
	<!--href to list of Hall Directors. -->
	<a href ="search_halldirectors.php"><b>Current list of Hall Directors.</b></a>
		<br>
		
			<br>
		
		
	
	<hr>
	
	<!--search for student by LAST name -->
	<p>
		For quick search please search for student by last name.
	</p>

	<form action="search_lname.php">
		<b>Search for a student by <i>LAST</i> name</b><br> <br>
		<input type="text" name="lname">
		
		<br>
			<br>
		
		<input type="submit" value="Submit">
		
	</form>

	

	<?php
	//include "search_keyword.php";
	
	$mysqli->close();

	?> 



</body>
</html>
