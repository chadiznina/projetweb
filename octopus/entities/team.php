<?php

class team
{
      private $nom;
      private $game;
      private $nbr;
      private $mail;
      private $description;
      private $names;

  function __construct($nom,$game,$nbr,$mail,$description,$names)
  {
    $this->nom = $nom;
    $this->game = $game;
    $this->nbr = $nbr;
    $this->mail = $mail;
    $this->description = $description;
    $this->names = $names;
  }
  function getnom (){return $this->nom;}
  function getgame (){return $this->game;}
  function getnbr (){return $this->nbr;}
  function getmail (){return $this->mail;}
  function getdescription (){return $this->description;}
  function getnames (){return $this->names;}


  function setnom($nom){
    $this->nom=$nom;
  }
  function setgame($game){
    $this->game=$game;
  }
  function setnbr($nbr){
    $this->nbr=$nbr;
  }
  function setmail($mail){
    $this->mail=$mail;
  }
  function setdescription($description){
    $this->description=$description;
  }
  function setnames($names){
    $this->names=$names;
  }

}
?>
