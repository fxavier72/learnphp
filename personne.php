<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title></title>
  </head>
  <body>
    <?php
     include 'connection.php';
     $sql="select * from personne";
     $resultat=mysqli_query($connect, $sql);
    ?>
    
    <table border=1>
     <tr>
      <th>nom</th>
      <th>prenom</th>
      <th>age</th>
      <th colspan=2>actions</th>
     </tr>
     
     <?php
      while($row=mysqli_fetch_assoc($resultat)){
      echo '<tr>';
        echo'<td>'.$row["nom"].'</td>';
        echo'<td>'.$row["prenom"].'</td>';
        echo'<td>'.$row["age"].'</td>';
        echo'<td><a href="personne_modifier.php?id='.$row["id"].'">modifier</a></td>';
        echo'<td>supprimer</td>';
      echo '</tr>';
      }
      
     ?>
     
    </table>
  </body>
</html>