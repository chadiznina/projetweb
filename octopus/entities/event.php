<?php

class event
{
      private $name;
      private $place;
      private $description;

  function __construct($name,$place,$description)
  {
    
    $this->name = $name;
    $this->place = $place;
    $this->description = $description;
  }

  function getname (){return $this->name;}
  
  function getdescription (){return $this->description;}
  function getplace (){return $this->place;}


 
  function setname($name){
    $this->name=$name;
  }
 
  function setdescription($description){
    $this->description=$description;
  }
  function setplace($place){
    $this->place=$place;
  }

}
?>
