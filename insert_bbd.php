<?php
include 'connection.php';

$nom= $_POST['nom'];
$prenom= $_POST['prenom'] ;
$age= $_POST['age'];

if(isset($nom)&& !empty($nom)){
  $sql='insert into personne (nom, prenom, age) values ("'.$nom.'","'.$prenom.'",'.$age.')';
  mysqli_query($connect,$sql);
  echo 'insertion reussi';
}else {
  echo 'probleme durant l\'insertion';
}
?>