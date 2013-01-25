<?php
$age = $_GET['age'];
$genre = $_GET['genre'];
  if($age >= 18 AND $genre == "h"){
    echo "je suis mageur et je suis un homme.<br>";
  } elseif($age >= 18 AND $genre == "f"){
    echo "je suis mageur et je suis une fille.<br>";
  } else {
    echo "je suis mineur.<br>"; 
  }
?>