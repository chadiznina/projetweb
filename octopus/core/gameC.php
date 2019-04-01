<?php
include "../config.php";
class gameC
{

function ajoutergame($game){
     $sql="insert into game (name,image,description,rating) values (:name,:image,:description,:rating)";
    $db = config::getConnexion();
    try{
        $req=$db->prepare($sql);

        $name=$game->getname();
        $image=$game->getimage();
        $description=$game->getdescription();
        $rating=$game->getrating();
        

       
        $req->bindValue(':name',$name);
        $req->bindValue(':image',$image);
        $req->bindValue(':description',$description);
        $req->bindValue(':rating',$rating);
    
            $req->execute();
        
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    
  }
  function showgame ($game){
        echo "name: ".$article->getname()."<br>";
        echo "description: ".$article->getdescription()."<br>";
        echo "rating: ".$article->getrating()."<br>";
        
    }
  

function showgames(){
        
        $sql="SElECT * From game";
        $db = config::getConnexion();
        try{
        $list=$db->query($sql);
        return $list;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }


function deletegame($name){

        $sql="DELETE FROM game where name= :name";
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
    function showid(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From game ORDER BY id DESC LIMIT 1 ";
        $db = config::getConnexion();
        try{
        $list=$db->query($sql);
        return $list;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
    function modifiergame($nam,$new,$modwhat){
        if ($modwhat=="description") {
            $sql="UPDATE game SET description=:input WHERE name=:nam";
        }
        if ($modwhat=="rating") {
            $sql="UPDATE game SET rating=:input WHERE name=:nam";
        }
        

        
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':input',$new);
        $req->bindValue(':nam',$nam);

        try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
        }

}
 
 ?>