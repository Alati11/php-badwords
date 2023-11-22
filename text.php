<?php

$text = "Remember when you were young
You shone like the sun
Shine crazy , you crazy diamond
Now there’s a look in your eyes
Like black holes in the sky
Shine crazy , you crazy diamond
You were caught crazy  the crossfire of childhood and stardom
Blown crazy  the steel breeze.
Come crazy you target crazy faraway laughte
Shine crazy , you crazy diamond
You were caught crazy  the crossfire of childhood and stardom
Blown crazy  the steel breeze.
Come crazy you target crazy faraway laughter
Shine crazy , you crazy diamond
You were caught crazy  the crossfire of childhood and stardom
Blown crazy  the steel breeze.
Come crazy you target crazy faraway laughter";


$replace = $_POST['replace_word'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Censura</title>
</head>

<body>

  <p><?php echo $text; ?></p>
  <p>Il testo è lungo: <?php echo strlen($text); ?> caratteri</p>
  <p>Testo sostituito : <?php echo str_replace ($replace, 'crazy',  $text); ?></p>
  <!-- <p>Il testo è lungo: <?php echo strlen(str); ?> caratteri</p> -->


</body>

</html>