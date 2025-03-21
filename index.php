<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$nome = 'peppe';
$cognome = 'fetish';

$a = 25; 
$b = 30;
$test = 'primo';

if($a > $b) {
    echo 'sei un grande' . PHP_EOL;
    echo 'stupido';
} else 
{
    echo 'sei un grande' . PHP_EOL;
    echo 'genio';
}

function bella(int $a ){

$test = 'secondo';
echo  $GLOBALS['test'];

for ($i = 0; $i < $a; $i++) {
    if($i == $a - 1) {
        echo $i;
    } else {
       echo $i . ' - '; 
    }
}
}

?>    

<h1><?php echo $nome; ?></h1><br>
<h1><?php echo $cognome; ?></h1><br>
<h1><?php echo ($a + $b); ?></h1><br>
<h1><?php bella( 4 ) ?></h1><br>

</body>
</html>