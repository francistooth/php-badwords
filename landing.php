<?php

$text = $_POST['text'];
$censoreWord = $_POST['censored'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/general.scss">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Pagina atterraggio GET</title>
</head>
<body>

<div class="container-fluid text-center">
    <h1 class="color-aqua pt-3"> Testo con parola/e censurata </h1>

    <hr class="color-aqua">

    <label class="color-aqua" for="original"> testo originale: </label>
    <p> <?php echo $text; ?> </p>

    <label class="color-aqua" for="count"> conteggio caratteri: </label>
    <p> <?php echo strlen(str_replace(' ', '', $text)); ?> </p>

    <hr class="color-aqua">

    <label class="color-aqua" for="original"> testo censurato: </label>
    <p> <?php $censoredText = str_replace($censoreWord, '***', $text); echo $censoredText; ?> </p>

    <label class="color-aqua" for="count"> conteggio caratteri: </label>
    <p> <?php echo strlen(str_replace(' ', '', $censoredText)); ?> </p>
</div>
  
</body>
</html>