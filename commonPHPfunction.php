<?php

function listItems($menu,$no,$form_id)
{
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
       //fille read

      if(!empty($tododata))
      {
         $n=-1;
         for($i=0;$i<$m;$i++) 
         {
            $a=$tododata[$i];
            $n++;
            if(mb_substr($a,0,1) == "T"){
               $a = preg_replace("/^.{0,9}+\K/us", strval($n) , $a);
               $t = "checked";
               $s = "";
            } else {
               $a = preg_replace("/^.{0,13}+\K/us", strval($n) , $a);
               $t = "";
               $s = "checked";
            }
            switch($menu)
            {
               case "List":   print "<p class='todoitem' id='item{$n}' form='{$form_id}'>" .  "<tt>" . $a . "</tt></p>\n";
                              break;
               case "Append": print "<p class='todoitem' id='item{$n}' form='{$form_id}'>" .  "<tt>" . $a . "</tt></p>\n";
                              break;
               case "Edit":   if($no != $n){
                                 print "<p class='todoitem todoedititem' id='item{$n}' onclick='edit({$n})' form='{$form_id}'>" . "<tt>" . $a . "</tt></p>\n";
                              } else {
                                 $str = preg_split('/<br>/',$a,4);
                                 print "<br> " . $str[0] . "<br>\n";
                                 print "<input type='radio' name='ts' value='ToDo' onclick=". '"' . "changeTable('ToDo')" . '"' . " form='{$form_id}' {$t}>ToDo\n";
                                 print "<input type='radio' name='ts' value='Schedule' onclick=". '"' . "changeTable('Schedule')"  . '"' . " form='{$form_id}' {$s}>Schedule<br>\n";
                                 date_default_timezone_set('Japan');
                                 $str[1] = $str[1] . " [Updated Day] " . date("Y/n/d") . "(" . date("D") .") " . date("g:i:s") ;
                                 printtable("Update Item",$form_id,$str[0],$str[1],$str[2],$str[3],$no);
                                 print "<br>\n";
                              }
                              break;
               case "Delete": print "<p class='todoitem tododeleteitem' id='item{$n}' onclick='dele({$n})' form='{$form_id}'>" . "<tt>" . $a . "</tt></p>\n";
                              break;
            }
         }
      }
   }
}
?>