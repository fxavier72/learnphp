<?php
 $table=array("banane","fraise","pomme");
 
 $table2=array('0' => "renault",'1' => "citroën", '2' => "peugeot");
 
  echo'<pre>';
  print_r($table);
  echo'</pre>';
  
  echo'<pre>';
  print_r($table2);
  echo'</pre>';
  
  echo $table['1'];
  echo $table2['2'];
?>