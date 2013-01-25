<?php
/* exemple 1 */

for ($i = 1; $i <= 10; $i++) {
    echo '5 x '.$i.' = '.(5*$i).'<br>';
   
}

for ($i = 1; $i <= 10; $i++) :
    echo '6 x '.$i.' = '.(6*$i).'<br>';
endfor;

for ($i = 1; $i <= 10; $i++)
    echo '7 x '.$i.' = '.(7*$i).'<br>';

  echo '<br/>';
////////////////////////////////////////////////
// table de 0 à 10
// dans la table faire de 0 à 10

for ($table=0; $table<=10; $table++):
     echo "Table de $table : <br>";
      for($i=0; $i<=10; $i++):
        echo $table.' x '.$i.' = '.($table*$i).'<br>'; 
      endfor;
endfor;

?>