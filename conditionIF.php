<?php
/*
  if(condition)
      commande
*/
   $a = 1;
   $b = 2;
if($a < $b){
    echo "$b est plus grand que $a";
}
      echo '<br>';
if($a < $b):
    echo "$b est plus grand que $a";
endif;
      echo '<br>';
if($a < $b)
    echo "$b est plus grand que $a";
    
    echo '<br>';

if($a > $b){
      echo "$a est plus grand que $b";
} else {
      echo "$a est plus petit que $b";
      echo '<br>';
}

///////////////////////////////////////////////
$age = 18;
  if($age<=18){
    echo"$age je suis mageur<br>";
  }else                  {
    echo"je suis mineur<br>";   }
    
////////////////////////////////////////////////////
$age = 18;
$genre = "f";
  if($age <= 18 AND $genre == "h"){
    echo "je suis mageur et je suis un homme.<br>";
  } elseif($age <= 18 AND $genre == "f"){
    echo "je suis mageur et je suis une fille.<br>";
  } else {
    echo "je suis mineur.<br>"; 
  }
?>