<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>
<body>
    <h1>Parola censurata</h1>
    <h4>Scegli la parola</h4>
  <form action="word.php" method="POST">
    <input type="text" name="word" placeholder="scegli la parola"> 
    <input type="submit" value="Invia">
  </form>
</body>
</html>

<?php

// var_dump([1,2,3]);
?>