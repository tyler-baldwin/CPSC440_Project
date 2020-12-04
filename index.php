
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

<html>
<center>
<body style = "background-color:powderblue;">
<head>
</head>
<style>
body {
          font-family: 'Roboto', sans-serif;
          font-size: 16px;
        }
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #999;
}
</style>
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="find_students_by_RA.php">Find Students by RA</a></li>
  <li><a href="find_students_by_RA.php">Find Students by RA</a></li>
  <li><a href="find_students_by_RA.php">Find Students by RA</a></li>
  <li><a href="find_students_by_RA.php">Find Students by RA</a></li>

</ul>

<center>
<body>

	<h1>Resident Assistant DATABASE</h1>

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


