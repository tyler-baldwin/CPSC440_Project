
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

<html lang="en">



<head>
	<title> RA Database </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="radatabase.css">
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

li a , .dropbtn{
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover , .dropdown:hover .dropbtn{
  background-color: #999;
}
li.dropdown {
  display: inline-block;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}
.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="find_students_by_RA.php">Find Students by RA</a></li>
  <li><a href="find_students_by_RA.php">Find Students by RA</a></li>
  <li><a href="find_students_by_RA.php">Find Students by RA</a></li>
  <li><a href="find_students_by_RA.php">Find Students by RA</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Email by Class</a>
    <div class="dropdown-content">
      <a href="findFreshmanEmail.php">Freshman</a>
      <a href="findSophomoreEmail.php">Sophomore</a>
	  <a href="findJuniorEmail.php">Junior</a>
	  <a href="findSeniorEmail.php">Senior</a>
    </div>
  </li>

</ul>

<center>
<body>



<nav>
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="find_students_by_RA.php">Find Students by RA</a></li>
  <li><a href="add_new_student.php">Add New Student</a></li>
</ul>
</nav>

<header>
	<h1>Resident Assistant DATABASE</h1>
</header>


<body>

	

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

	

	<?php
	//include "search_keyword.php";
	
	$mysqli->close();

	?> 



</body>
</html>
