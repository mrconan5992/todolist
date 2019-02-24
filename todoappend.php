<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP Todo Programs</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="commonJAVASCRIPTfunction.js"></script>
	<script type="text/javascript" src="./calendar/yahho-calendar.js"></script>
	<script type="text/javascript" src="./calendar/gcalendar-holidays.js"></script>
	
	<script type="text/javascript">
	<!--
	 //YahhoCal.loadYUI("http://localhost/PHP/todolist-LTS/calendar/yui/build/");
	 YahhoCal.loadYUI();
	 -->
	 </script>
	 
	 <script type="text/javascript">
	 <!--
	 	function dateOfAppend()
	 	{
	 		var today = new Date();
	 		var year = today.getFullYear();
	 		var month = today.getMonth()+1;
	 		var day = today.getDate();
	 		var weekdayNo = today.getDay();
	 		var weekday = new Array("Sun","Mon","Tue","Wed","Thu","Fri","Sat");
	 		var hour = today.getHours();
	 		var minute = today.getMinutes();
	 		var second = today.getSeconds();
	 		var dateNow = year+"/"+month+"/"+day+"("+weekday[weekdayNo]+") "+hour+":"+minute+":"+second;
	 		document.appendform.datetime.value=dateNow;
	 	}
	 	function changeTable(v)
	 	{
	 		var elem1 = document.getElementById("thdate");
	 		var elem2 = document.getElementById("thtodo");
	 		if(v=="ToDo"){
	 			elem1.innerText="till the Date";
	 			elem2.innerText="ToDo Item";
	 		}else{
	 			elem1.innerText="on just Date ";
	 			elem2.innerText="Schedule Item";
	 		}
	 	}
	 	-->
	 	</script>
</head>
<body>

<h2>Todo</h2>
<form name="menu" action="" method="post" onsubmit="proLEAD()">
<input class="menubutton" type="submit" value="List" onclick="javascript:document.menu.submit.value='List'">
<input class="menubutton" type="submit" value="Append" onclick="javascript:document.menu.submit.value='Append'">
<input class="menubutton" type="submit" value="Edit" onclick="javascript:document.menu.submit.value='Edit'">
<input class="menubutton" type="submit" value="Delete" onclick="javascript:document.menu.submit.value='Delete'">
</form>

<h2 class ="append">Append</h2>
<form name='appendform' action='http://localhost/php/todolist-LTS/appenditem.php' method='post' id="listform_id">
<input type="radio" name="ts" value="ToDo" onclick="changeTable('ToDo')" checked>ToDo
<input type="radio" name="ts" value="Schedule" onclick="changeTable('Schedule')">Schedule<br>
<?php
	require "tableinform.php";
	printtable("Append Item","listform_id","Todo Item","","","",-1);
?>
<?php require "commonPHPfunction.php"; ?>
<?php listItems("Append",-1,"listform_id"); ?>

</body>
</html>