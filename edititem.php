<?php

$n=0;
$file="tododata.txt";
if(file_exists($file)){
	$m=0;
	$fp=fopen($file,"r");
	while(!feof($fp)){
		$buffer=fgets($fp);
		if(mb_strlen($buffer)>0){
			$tododata[$m]=mb_substr($buffer,0,mb_strlen($buffer)-1);
			$m++;
		}
	}
	fclose($fp);	
}
if($_REQUEST["ts"]=="ToDo"){
	$r1="[Registered Day] ";
	$r2="[till the Date] ";
	$r3="Todo Item";
}else {
	$r1="[Registered Day] ";
	$r2="[on just Date] ";
	$r3="Schedule Item";
}

$s = $r3 . "<br>" . $r1 . $_REQUEST["datetime"] . "<br>" . $r2 . $_REQUEST["inputDate"] . "<br>" . "[" . $r3 . "]" . $_REQUEST["textdata"] . "<br>";
$s=str_replace("\n","<br>",$s);

$lineno=$_REQUEST["item_number"];
$tododata[$lineno]=$s;

$fp=fopen($file,"w");
for($i=0;$i<$m;$i++)
{
	$j=$tododata[$i]."\n";
	fputs($fp,$j);
}
fclose($fp);

header("Location: " . $_SERVER["HTTP_REFERER"]);
?>