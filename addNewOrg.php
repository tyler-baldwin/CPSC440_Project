<head>
    <title> RA Database </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="radatabase.css">
</head>

<?php
include "navbar.php"
?>
<!-- Inlcudes all of the deafault nav, Header -->
<header>
    <h1>Add Organization</h1>
</header>
<body>

<main>

<!--add new student form -->
	<summary>
	<h2>Enter a new student<h2>
	</summary>
	<form action="addOrg.php">
		
		<b>Organization ID:</b><br>
		<input type="text" name="orgID"><br><br>
		
		<b>Enter Organization Name:</b><br>
		<input type="text" name="orgName"><br><br>
		
		<br>
			<br>
		<input type="submit" value="Submit">
		
	</form>
	
	</details>
	
	
<br>
		<br>




</main>
</body>