<?php 

/**
 * 'r'	Sola lettura. Il puntatore si posiziona all'inizio del file. Se il file non esiste, genera un errore.
 * 'r+'	Lettura e scrittura. Il puntatore è all'inizio del file. Se il file non esiste, genera un errore.
 * 'w'	Solo scrittura. Cancella il contenuto del file se esiste. Se il file non esiste, lo crea.
 * 'w+'	Lettura e scrittura. Cancella il contenuto del file se esiste. Se il file non esiste, lo crea.
 * 'a'	Solo scrittura. Il puntatore è alla fine del file. Se il file non esiste, lo crea.
 * 'a+'	Lettura e scrittura. Il puntatore è alla fine del file. Se il file non esiste, lo crea.
 * 'x'	Solo scrittura. Crea un nuovo file. Se il file esiste, genera un errore.
 * 'x+'	Lettura e scrittura. Crea un nuovo file. Se il file esiste, genera un errore.
 * 'c'	Solo scrittura. Non cancella il file, ma lo apre. Se il file non esiste, lo crea.
 * 'c+'	Lettura e scrittura. Non cancella il file, ma lo apre. Se il file non esiste, lo crea.
 */

$nome_file = 'note.txt';
$testo = 'Testo da aggiungere';

if(file_exists($nome_file)){
    // Apertura del file
    $file = fopen($nome_file, 'r');

    // Lettura del file    
    fread($file, filesize($file));

    // Scrittura su file
    fwrite($file, $txt);
    
    // Rinomina il file
    rename($file, 'nuovo_nome.txt');

    // Elimina il file
    unlink($file);

    //Chiusura del file
    fclose($nome_file);                 
} else {
    echo 'Non esiste il file!';
}

?>
