<html>
<center>
<body style = "background-color:powderblue;">
<head>
</head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 10%;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color: #4CAF50;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
}
</style>
<ul>
  <li><a href="find_students_by_RA.php">Find Students by RA</a></li>
</ul>

<body>

	<h1><center>Resident Assistant DATABASE</center></h1>

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
	
	<!--search for student by first name -->
	<form action="search_fname.php">
		<b>Search for a student by <i>FIRST</i> name</b><br> <br>
		<input type="text" name="fname">
		
		<br>
			<br>
		
		<input type="submit" value="Submit">
		
	</form>
	<hr>

	<form action="search_lname.php">
		<b>Search for a student by <i>LAST</i> name</b><br> <br>
		<input type="text" name="lname">
		
		<br>
			<br>
		
		<input type="submit" value="Submit">
		
	</form>

	<hr>
	<!--add new student form -->
	<form action="add_student.php">
		<h3>Enter a new student:</h3><br><br>
		
		<b>Enter Student ID:</b><br>
		<input type="text" name="studentid"><br><br>
		
		<b>Enter Student year:</b><br>
		<input type="text" name="studentyear"><br><br>
		
		<b>Enter Student gender (M/F):</b><br>
		<input type="text" name="studentgender"><br><br>
		
		<b>Enter Student email:</b><br>
		<input type="text" name="studentemail"><br><br>
		
		<b>Enter Student room number:</b><br>
		<input type="text" name="studentroom"><br><br>
		
		<b>Enter First Name:</b><br>
		<input type="text" name="newfname"><br><br>

		<b>Enter Last Name:</b> <br>
		<input type="text" name="newlname"><br><br>
		
		<b>Enter Building ID:</b> <br>
		<input type="text" name="newbuildingid"><br><br>
		
		<b>Enter RA ID:</b> <br>
		<input type="text" name="newraid"><br><br>
		
		<br>
			<br>
		<input type="submit" value="Submit">
		
	</form>



	<?php
	//include "search_keyword.php";
	
	$mysqli->close();

	?> 



</body>
</center>
</html>


