<?php


  trait PartitaIva
  {
    private $codice;
    private $address;
    private $nome_azienda;

    public function setCodice($codice)
    {
      $this->codice = $codice;
    }
    public function getCodice()
    {
      return $this->codice;
    }

    public function setAddress($address)
    {
      $this->address = $address;
    }
    public function getAddress()
    {
      return $this->address;
    }

    public function setNomeAzienda($nome_azienda)
    {
      $this->nome_azienda = $nome_azienda;
    }
    public function getNomeAzienda()
    {
      return $this->nome_azienda;
    }
  }
