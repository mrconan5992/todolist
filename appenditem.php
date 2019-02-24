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
	
	if(!empty($tododata)) $n = count($tododata);
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

$txt = str_replace("\n","<br>",$_REQUEST["textdata"]);

$tododata[$n] = $r3 . "<br>" . $r1 . $_REQUEST["datetime"] . "<br>" . $r2 . $_REQUEST["inputDate"] . "<br>" . "[" . $r3 . "]" . $txt . "<br>";

$k=0;
$fp=fopen($file,"w");
for($i=0;$i<=$n;$i++)
{
	$j=$tododata[$i];
	fputs($fp,$j."\n");
	$k++;
}
fclose($fp);

header("Location: " . $_SERVER["HTTP_REFERER"]);
?>