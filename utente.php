<?php
require_once './partitaIva.php';

class Utente {
  use PartitaIva;

  private $nome;
  private $cognome;
  private $data_nascita;
  // public $arr = ['prova'=>'prova'];

  private $fatture = [];

  public function __construct($nome, $cognome, $data_nascita, $codice, $address, $nome_azienda) {
    $this->nome = $nome;
    $this->cognome = $cognome;
    $this->data_nascita = $data_nascita;
    $this->setCodice($codice);
    $this->setAddress($address);
    $this->setNomeAzienda($nome_azienda);
  }

  // public function setArr($key, $value)
  // {
  //   $this->arr[$key] = $value;
  // }
  // public function getArr()
  // {
  //   return $this->arr;
  // }

  public function setNome($nome)
  {
    $this->nome = $nome;
  }
  public function getNome()
  {
    return $this->nome;
  }

  public function setCognome($cognome)
  {
    $this->cognome = $cognome;
  }
  public function getCognome()
  {
    return $this->cognome;
  }

  public function setDataNascita($data_nascita)
  {
    $this->data_nascita = $data_nascita;
  }
  public function getDataNascita()
  {
    return $this->data_nascita;
  }

  public function insertFattura($fattura)
  {
    $this->fatture[] = $fattura;
  }
  public function getFatture()
  {
    return $this->fatture;
  }
}
