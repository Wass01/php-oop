<?php

class Fattura {
  // private $partita_iva_mittente;
  private $data_emissione;
  private $partita_iva_destinatario;
  private $saldo;

  public function __construct($data_emissione, $partita_iva_destinatario, $saldo) {
    // $this->partita_iva_mittente = $partita_iva_mittente;
    if (!is_numeric($saldo)) {
      throw new Exception("Saldo non numerico");
    }
    
    $this->data_emissione = $data_emissione;
    $this->partita_iva_destinatario = $partita_iva_destinatario;
    $this->saldo = $saldo;
  }

  public function setDataEmissione($data_emissione)
  {
    $this->data_emissione = $data_emissione;
  }
  public function getDataEmissione()
  {
    return $this->data_emissione;
  }

  public function setPartitaIvaDestinatario($partita_iva_destinatario)
  {
    $this->partita_iva_destinatario = $partita_iva_destinatario;
  }
  public function getPartitaIvaDestinatario()
  {
    return $this->partita_iva_destinatario;
  }

  public function setSaldo($saldo)
  {
    $this->saldo = $saldo;
  }
  public function getSaldo()
  {
    return $this->saldo;
  }
}
