<?php

class Article
{
      private $avatar;
      private $description;
      private $type;

  function __construct($avatar,$description,$type)
  {
    $this->avatar = $avatar;
    $this->type = $type;
    $this->description = $description;
  }
  function getavatar (){return $this->avatar;}
  function gettype (){return $this->type;}
  function getdescription (){return $this->description;}
  

  function setavatar($avatar){
    $this->avatar=$avatar;
  }
  function settype($type){
    $this->type=$type;
  }
  function setdescription($description){
    $this->description=$description;
  }
  
}
?>