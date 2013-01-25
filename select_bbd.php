<?php
include 'connection.php';

$sql="select * from personne";
$resultat=mysqli_query($connect,$sql);


//echo "<pre>";
//print_r($resultat);
//echo "</pre>";


echo "<table border=1>";
echo "<tr>";
  echo"<th>id</th>";
  echo"<th>nom</th>";
  echo"<th>prenom</th>" ;
  echo"<th>age</th>" ;
echo "</tr>";
while($row=mysqli_fetch_row($resultat)){
echo "<tr>";
  echo "<td>$row[0]</td>";
  echo "<td>$row[1]</td>";
  echo "<td>$row[2]</td>";
  echo "<td>$row[3]</td>";
echo "</tr>";
}
echo "</table>";

  echo"<br>";
  
$sql1="select nom,prenom,age from personne";
$resultat1=mysqli_query($connect,$sql1);


echo "<table border=1>";
echo "<tr>";
  echo"<th>nom</th>";
  echo"<th>prenom</th>" ;
  echo"<th>age</th>" ;
echo "</tr>";
while($row=mysqli_fetch_assoc($resultat1)){
echo "<tr>";
  echo '<td>'.$row["nom"].'</td>';
  echo '<td>'.$row["prenom"].'</td>';
  echo '<td>'.$row["age"].'</td>';
echo "</tr>";
}
echo "</table>";

 echo"<br>";
  
$sql2="select nom,prenom,age from personne where age>23";
$resultat2=mysqli_query($connect,$sql2);


echo "<table border=1>";
echo "<tr>";
  echo"<th>nom</th>";
  echo"<th>prenom</th>" ;
  echo"<th>age</th>" ;
echo "</tr>";
while($row=mysqli_fetch_assoc($resultat2)){
echo "<tr>";
  echo '<td>'.$row["nom"].'</td>';
  echo '<td>'.$row["prenom"].'</td>';
  echo '<td>'.$row["age"].'</td>';
echo "</tr>";
}
echo "</table>";

 echo"<br>";
  
$sql3="select nom,prenom,age from personne where age>23 order by age desc";
$resultat3=mysqli_query($connect,$sql3);


echo "<table border=1>";
echo "<tr>";
  echo"<th>nom</th>";
  echo"<th>prenom</th>" ;
  echo"<th>age</th>" ;
echo "</tr>";
while($row=mysqli_fetch_assoc($resultat3)){
echo "<tr>";
  echo '<td>'.$row["nom"].'</td>';
  echo '<td>'.$row["prenom"].'</td>';
  echo '<td>'.$row["age"].'</td>';
echo "</tr>";
}
echo "</table>";

 echo"<br>";
  
$sql4="select nom,prenom,age from personne where age>23 order by age asc";
$resultat4=mysqli_query($connect,$sql4);


echo "<table border=1>";
echo "<tr>";
  echo"<th>nom</th>";
  echo"<th>prenom</th>" ;
  echo"<th>age</th>" ;
echo "</tr>";
while($row=mysqli_fetch_assoc($resultat4)){
echo "<tr>";
  echo '<td>'.$row["nom"].'</td>';
  echo '<td>'.$row["prenom"].'</td>';
  echo '<td>'.$row["age"].'</td>';
echo "</tr>";
}
echo "</table>";

 echo"<br>";
  
$sql5="select max(age) as agemaxi from personne ";
$resultat5=mysqli_query($connect,$sql5);


echo "<table border=1>";
echo "<tr>";
  echo"<th>age maxi</th>";
echo "</tr>";
while($row=mysqli_fetch_assoc($resultat5)){
echo "<tr>";
  echo '<td>'.$row["agemaxi"].'</td>';
echo "</tr>";
}
echo "</table>";

 echo"<br>";
  
$sql6="select min(age) as agemini from personne ";
$resultat6=mysqli_query($connect,$sql6);


echo "<table border=1>";
echo "<tr>";
  echo"<th>age mini</th>";
echo "</tr>";
while($row=mysqli_fetch_assoc($resultat6)){
echo "<tr>";
  echo '<td>'.$row["agemini"].'</td>';
echo "</tr>";
}
echo "</table>";

 echo"<br>";
  
$sql7="select sum(age) as agesum from personne ";
$resultat7=mysqli_query($connect,$sql7);


echo "<table border=1>";
echo "<tr>";
  echo"<th>somme age</th>";
echo "</tr>";
while($row=mysqli_fetch_assoc($resultat7)){
echo "<tr>";
  echo '<td>'.$row["agesum"].'</td>';
echo "</tr>";
}
echo "</table>";

 echo"<br>";
  
$sql8="select avg(age) as ageavg from personne ";
$resultat8=mysqli_query($connect,$sql8);


echo "<table border=1>";
echo "<tr>";
  echo"<th>age moyen</th>";
echo "</tr>";
while($row=mysqli_fetch_assoc($resultat8)){
echo "<tr>";
  echo '<td>'.$row["ageavg"].'</td>';
echo "</tr>";
}
echo "</table>";

?>