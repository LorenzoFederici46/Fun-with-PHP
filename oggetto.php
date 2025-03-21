<?php 

class Persona{

private $nome, $cognome;
private $eta;
private $interessi;

public function __construct(string $nome, string $cognome, int $eta, array  $interessi) {
    $this->nome = $nome;
    $this->cognome = $cognome;
    $this->eta = $eta;
    $this->interessi = $interessi;
    }

    function toString(){
        echo $this->nome . ' - ' . $this->cognome . ' - ' . $this->eta . '<br>';
        foreach ($this->interessi as $value) {
            echo '[ ' . $value . ' ] ';
        }
        echo '<br>';
    }
}

$json = [
    'chiave'  => 'valore',
    'nome'    => 'alessio',
    'cognome' => 'fannini',
    'eta'     =>  46

];

echo $json['nome'] . ',' . $json['cognome'];


$multi = [
    ['coding','luna','stella'],
    ['coding','luna','stella'],
    ['coding','luna','stella'],
    ['coding','luna','stella']
];

for ($i = 0; $i < count($multi); $i++) { 
    for ($j = 0; $j < count($multi[$i]); $j++) { 
        echo '[ ' . $multi[$i][$j] . ' ]';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $nome = 'pinco';
    $cognome = 'pallino';
    $eta = 24;
    $interessi = ['coding','luna','stella'];

    $primo = new Persona($nome, $cognome, $eta, $interessi);
    $secondo = new Persona('giulio', 'cesare', 69, ['calcio', 'scuola', 'moto']);

    $primo->toString();
    $secondo->toString();
?>
</body>
</html>



