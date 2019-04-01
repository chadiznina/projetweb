<?php

class order
{
      private $reference;
      private $name;
      private $date;
      private $state;
      private $quantite;
      private $total;
      private $dstate;

  function __construct($reference,$name,$date,$state,$quantite,$total,$dstate)
  {
    $this->reference = $reference;
    $this->name = $name;
    $this->date = $date;
    $this->state = $state;
    $this->quantite = $quantite;
    $this->total = $total;
    $this->dstate = $dstate;
  }
  function getreference (){return $this->reference;}
  function getname (){return $this->name;}
  function getdate (){return $this->date;}
  function getstate (){return $this->state;}
  function getquantite (){return $this->quantite;}
  function gettotal (){return $this->total;}
  function getdstate (){return $this->dstate;}


  function setreference($reference){
    $this->reference=$reference;
  }
  function setname($name){
    $this->name=$name;
  }
  function setdate($date){
    $this->date=$date;
  }
  function setstate($state){
    $this->state=$state;
  }
  function settotal($total){
    $this->total=$total;
  }
  function setdstate($dstate){
    $this->dstate=$dstate;
  }
   function setquantite($quantite){
    $this->quantite=$quantite;
  }

}
?>
