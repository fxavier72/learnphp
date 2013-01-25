<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
  <meta name="generator" content="PSPad editor, www.pspad.com">
  <title></title>
  </head>
  <body>
    <form action="conditionif2.php" method="get">
        <label for="age">Age :</label>
        <select name="age">
          <?php
            for ($i=0; $i<=20; $i++){
              echo '<option value="'.$i.'">'.$i.'</option>';
            }
          ?>
        </select>
        <br>
        <label for="genre">Genre :</label>
        <select name="genre">
          <option value="f">Fille</option>
          <option value="h">Garçon</option>
        </select>
        <br>
        <input type="submit" value="valider" />
    </form>
  </body>
</html>
