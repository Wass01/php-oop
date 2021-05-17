<?php
  require_once './utente.php';
  require_once './fattura.php';

  // creare due fatture e salvarle come fatture emesse da un utente x
  $utente = new Utente('Pippo', 'Baudo', '02/06/1956', '1234', 'via Roma', 'Boolean');

  $fattura1 = new Fattura('14/05/2021', '5678', 234929.45);

  try {
    $fattura2 = new Fattura('16/05/2021', '2342', 'cicicici');
  } catch (Exception $e) {
    echo 'Questa fattura non è andata a buon fine <br>';
    echo 'Errore: ' . $e->getMessage();
  }

  var_dump($utente);
  var_dump($fattura1);
  var_dump($fattura2);

  $utente->insertFattura($fattura1);
  $utente->insertFattura($fattura2);

  var_dump($utente);
  var_dump($utente->getFatture()[0]->getSaldo());


  // var_dump($utente->arr['prova']);
  // $utente->setArr('prova', 'provaRiuscita');
  // var_dump($utente);
?>
