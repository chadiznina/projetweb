<?php
include "../config.php";
class eventc
{

function ajouterevent($event){
    $sql="insert into event (name,place,description,date) values (:name,:place,:description,CURDATE())";
    $db = config::getConnexion();
    try{
        $req=$db->prepare($sql);

    
        $name=$event->getname();
       
        $description=$event->getdescription();
        $place=$event->getplace();
    

    $req->bindValue(':name',$name);
    $req->bindValue(':place',$place);
    $req->bindValue(':description',$description);
    
    
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    
  }
  function showevent ($event){
        echo "name: ".$event->getname()."<br>";
        echo "place: ".$event->getplace()."<br>";
        echo "description: ".$event->getdescription()."<br>";
    }
  

function showevents(){
        
        $sql="SElECT * From event";
        $db = config::getConnexion();
        try{
        $list=$db->query($sql);
        return $list;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }


function deleteevent($name){

        $sql="DELETE FROM event where name= :name";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':name',$name);
        try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
  function updateevent($event,$name)
        {
        $sql="UPDATE event SET name=:name, place=:place, description=:description WHERE name=:name";
        
        $db = config::getConnexion();
     
try{        
        $req=$db->prepare($sql);
        $name=$event->getname();
        $place=$event->getplace();
        $description=$event->getdescription();
        //$datas = array(':namen'=>$namen, ':name'=>$name,':place'=>$place,':description'=>$description);
        //$req->bindValue(':namen',$namen);
        $req->bindValue(':name',$name);
        $req->bindValue(':place',$place);
        $req->bindValue(':description',$description);
        
        
            $s=$req->execute();
            
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }
    function catchevent($name){
        $sql="SELECT * from event where name=$name";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

} 

 ?>
