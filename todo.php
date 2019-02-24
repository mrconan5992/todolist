<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP ToDo Programs</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="commonJAVASCRIPTfunction.js"></script>
</head>
<body>
<h2> Todo </h2>
<form name="menu" action="" method="post" onsubmit="proLEAD()">
<input class="menubutton" type ="submit" value="List" onclick="javacript:document.menu.submit.value='List'">
<input class="menubutton" type ="submit" value="Append" onclick="javacript:document.menu.submit.value='Append'">
<input class="menubutton" type ="submit" value="Edit" onclick="javacript:document.menu.submit.value='Edit'">
<input class="menubutton" type ="submit" value="Delete" onclick="javacript:document.menu.submit.value='Delete'">
</form>

<h2 class="list">List</h2>
<form name='listform action='' method='post' id='listform_id'>
<?php require "commonPHPfunction.php"; ?>
<?php listItems("List",-1,"listform_id"); ?>
</body>
</html>