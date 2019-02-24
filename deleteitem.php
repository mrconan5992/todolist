<?php

$file="tododata.txt";
if( file_exists($file) )
{
	$m=0;
	$fp=fopen($file,"r");
	while(!feof($fp))
	{
		$buffer=fgets($fp);
		if(mb_strlen($buffer)>0)
		{
			$tododata[$m]=mb_substr($buffer,0,mb_strlen($buffer)-1);
			$m++;
		}
	}
	fclose($fp);
		
	if( isset($_REQUEST["item_number"]) && $_REQUEST["item_number"]>=0 )
	{
		array_splice($tododata,$_REQUEST["item_number"],1);
			
		$k=0;
		$fp=fopen($file,"w");
		for($i=0;$i<count($tododata);$i++)
		{
			$j=$tododata[$i];
			fputs($fp,$j."\n");
			$k++;
		}
		fclose($fp);
	}
}
header("Location: " . $_SERVER["HTTP_REFERER"]);
?>