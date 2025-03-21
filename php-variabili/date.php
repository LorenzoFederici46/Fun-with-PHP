<?php

/* Giorno, mese, anno / Ora, minuti, seecondi */
$data1 = date('d-m-Y H:i:s', time());
/* Aggiungere anni a piacimento, anche con giorni o mesi */
$data2 = date('d-m-Y', strtotime('now' . '+ 2 months'));

echo $data1 . '<br>';
echo $data2;

?>