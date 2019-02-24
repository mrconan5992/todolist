<?php

function printtable($str,$fid,$tors,$date1,$date2,$data,$no)
{
  if(mb_substr($tors,0,1)=="T"){
     $s1="till the Date";
     $s2="ToDo Item";
  } else if(mb_substr($tors,0,1)=="S"){
     $s1="on just Date ";
     $s2="Schedule Item";
  }
  $data=str_replace("<br>","\n",$data);
  print <<< TABLE
    <table>
    <tr>
      <th>
         Registerd Day
      </th>
      <td>
         <input type="text" name="datetime" value="{$date1}" form="{$fid}">
         <script type="text/javascript">
         <!--
            dateOfAppend();
         -->
         </script>
      </td>
    </tr>
    <tr>
      <th id="thdate">
         $s1
      </th>
      <td>
         <input type="text" id="inputId" name="inputDate" value="{$date2}" onclick="YahhoCal.render(this.id);return false;" form="{$fid}">
      </td>
    </tr>
    <tr>
      <th id="thtodo">
         $s2
      </th>
      <td>
         <textarea name="textdata" form="$fid">$data</textarea>
      </td>
      <td class="tdsubmit">
         <input type='submit' name='tablesubmit' value='{$str}' form='{$fid}' onclick='changeAction({$no})'>
    </td>
    </tr>
    </table>
TABLE;
}
?>