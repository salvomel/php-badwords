<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad words</title>
</head>
<body>
    <h1>PHP Bad Words</h1>

    <?php
        $frase = 'È meglio tenere la bocca chiusa e lasciare che le persone pensino che sei uno sciocco piuttosto che aprirla e togliere ogni dubbio.';
        $parola_censored = $_GET['parola'];
        $frase_censored = str_replace($parola_censored, '***', $frase);
    ?>
    
    <h2>Stampo la frase</h2>
    <p><?php echo $frase; ?></p>

    <h3>Lunghezza della frase:</h3>
    <p><?php echo strlen($frase); ?></p>
    
    <h2>Frase censurata</h2>
    <p><?php echo $frase_censored; ?></p>

    <h3>Lunghezza della frase censurata:</h3>
    <p><?php echo strlen($frase_censored); ?></p>

</body>
</html>