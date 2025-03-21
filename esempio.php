
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    
    //echo 'ciao ' . $_POST['nome'] . ' ' . $_POST['cognome'];
    $test = 51;

    if($test < 50) {
        echo '<h1> Bravo </h1> <br>';
        echo '<h1> Sei un genio </h1>'; 
    } else {
        echo '<h1> Meno bravo </h1>';
    }
?>
</body>
</html>
