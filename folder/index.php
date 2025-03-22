<?php 

$nuova_cartella = 'prova';
$nome_file = 'test.txt';
$copy_file = $nuova_cartella . '/copia.txt';

/*
if(!file_exists($nuova_cartella)){
    mkdir($nuova_cartella);
} else {
    echo 'La cartella esiste';
}

copy($nome_file, $copy_file);
*/

function mostraFile($path){
    $result = scandir($path);
    $list_files = array_diff($result, array('.','..'));

    if(count($list_files) > 0){
       foreach ($list_files as $value) {
        if(is_file("$path/$value")) {
            echo $value . '<br>';
        }
        if(is_dir("$path/$value")){
            mostraFile("$path/$value");
        }
    }
}
    

}

mostraFile('C:/xampp/htdocs/prova1/folder');



?>