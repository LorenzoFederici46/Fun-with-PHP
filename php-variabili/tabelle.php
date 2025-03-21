<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
<tr><td>Nome</td><td>Cognome</td><td>Eta</td></tr>   
<?php 
    $persona1 = [
        'nome' => 'luca',
        'cognome' => 'rossi',
        'eta' => 25
    ];
    $persona2 = [
        'nome' => 'lorenzo',
        'cognome' => 'verdi',
        'eta' => 31
    ];
    $persona3 = [
        'nome' => 'alessia',
        'cognome' => 'fresi',
        'eta' => 66
    ];

    $persone = [$persona1, $persona2, $persona3];
   foreach ($persone as $value): 
?>
<!-- 
Si puo' usare anche questa forma, il risultato ottenuto e' lo stesso 
<tr><td><?php /*echo $value['nome']; ?></td><td><?php echo $value['cognome']; ?></td><td><?php echo $value['eta'];*/?></td></tr> 
-->
<?php echo '<tr><td>' . $value['nome'] . '</td><td>' . $value['cognome'] . '</td><td>' . $value['eta'] . '</td></tr>';?>
<?php endforeach?>
</table> <br>
</body>
</html>