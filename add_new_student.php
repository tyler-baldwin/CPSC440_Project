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

<header>
	<h1>RA DBMS- Add A New Student</h1>
</header>


<body>

	<main>

		<!--add new student form -->
		<summary>
			<h2>Enter a new student<h2>
		</summary>
		<form action="add_student.php">

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

		</details>


		<br>
		<br>




	</main>
</body>

</html>