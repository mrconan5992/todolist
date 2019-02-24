<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP ToDo Programs</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="commonJAVASCRIPTfunction.js"></script>
	
	<script type="text/javascript">
	<!--
		function dele(n) {
			elem=document.getElementById("item"+n);
			elem.style.backgroundColor="#00ff00";
			ret=window.confirm("Item " + n + " is deleted. OK?");
			if(ret==true){
				document.listform.item_number.value=n;
				document.listform.submit();
			} else {
				elem.style.backgroundColor="#ffffff";
			}
		}
	-->
	</script>
</head>

<body>

<h2>Todo</h2>

<form name="menu" action="" method="post" onsubmit="proLEAD()">
<input class="menubutton" type ="submit" value="List" onclick="javacript:document.menu.submit.value='List'">
<input class="menubutton" type ="submit" value="Append" onclick="javacript:document.menu.submit.value='Append'">
<input class="menubutton" type ="submit" value="Edit" onclick="javacript:document.menu.submit.value='Edit'">
<input class="menubutton" type ="submit" value="Delete" onclick="javacript:document.menu.submit.value='Delete'">
</form>

<h2 class="delete">Delete</h2>

<form name='listform' action='http://localhost/php/todolist-LTS/deleteitem.php' method='post' id="listform_id">
<?php require "commonPHPfunction.php"; ?>
<?php listItems("Delete",-1,"listform_id"); ?>
<input type="hidden" name="item_number" value="-1" form="listform_id">

</body>
</html>