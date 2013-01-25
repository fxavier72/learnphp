<?php

include 'connection.php';

$id=$_GET['id'];
$sql="select * from personne where id=".$id;
$resultat=mysqli_query($connect,$sql);
while($row=mysqli_fetch_assoc($resultat)){
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title></title>
  </head>
  <body>
    <form action="update_bbd.php" method="post">
      <input name="id" value="<?php echo $row["id"]?>" type="hidden">
        <label for="nom">Nom :</label>
        <input name="nom" id="nom" value="<?php echo $row["nom"]?>" />
        <br>
        <label for="prenom">Prénom :</label>
        <input name="prenom" id="prenom" value="<?php echo $row["prenom"]?>" />
        <br>
        <label for="age">Age :</label>
        <select name="age">
          <?php
            $selected = "selected=selected";
            
           for($i=0; $i<=70; $i++){
              if ($row["age"] == $i){$selected = "selected";}
              echo '<option value="'.$i.'" '.$selected.'>'.$i.'</option>';
           }
          ?>
        </select>
        <br>
        <input type="submit" value="valider" />
    </form>
  </body>
</html>
<?php
}
?>
