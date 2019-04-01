<?php

class game
{
      private $name;
      private $image;
      private $description;
      private $rating;

  function __construct($name,$description,$rating,$image)
  {
    $this->name = $name;
    $this->description = $description;
    $this->rating = $rating;
    $this->image = $image;
  }
  function getname (){return $this->name;}
  function getimage (){return $this->image;}
  function getdescription (){return $this->description;}
  function getrating (){return $this->rating;}
  

  function setname($name){
    $this->name=$name;
  }
  function setimage($image){
    $this->image=$image;
  }
  function setdescription($description){
    $this->description=$description;
  }
  function setrating($rating){
    $this->rating=$rating;
  }
  
}
?>