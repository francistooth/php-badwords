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

    <title> Bad Words Form </title>
</head>
<body>

    <div class="container text-center">
    <h1 class="color-aqua">FORM POST</h1>

    <form action="landing.php" method="POST">

        <label for="text"> Inserisci del testo: </label>
        <input class="mb-3" id="text" type="text" placeholder="text" name="text"> <br>

        <label for="censored">Parola da censurare: </label>
        <input class="mb-3" id="censored" type="text" placeholder="to censore" name="censored"> <br>

        <button class="rounded py-2 px-3" type="submit"> censura </button>

    </form>
    </div>
  
</body>
</html>