<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title></title>
  </head>
  <body>
    <form action="insert_bbd.php" method="post">
        <label for="nom">Nom :</label>
        <input name="nom" id="nom" />
        <br>
        <label for="prenom">Prénom :</label>
        <input name="prenom" id="prenom" />
        <br>
        <label for="age">Age :</label>
        <select name="age">
          <?php
           for($i=0; $i<=70; $i++)
            echo '<option value="'.$i.'">'.$i.'</option>';
          ?>
        </select>
        <br>
        <input type="submit" value="valider" />
    </form>
  </body>
</html>