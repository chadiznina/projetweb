<?php
include "../config.php";
class orderc
{

function ajouterorder($order){
    $sql="insert into orders (reference,name,date,state,quantite,total,dstate) values (:reference,:name,:date,:state,:quantite,:total,:dstate)";
    $db = config::getConnexion();
    try{
        $req=$db->prepare($sql);

        $reference=$order->getreference();
        $name=$order->getname();
        $date=$order->getdate();
        $state=$order->getstate();
        $quantite=$order->getquantite();
        $total=$order->gettotal();
        $dstate=$order->getdstate();
    
    $req->bindValue(':reference',$reference);
    $req->bindValue(':name',$name);
    $req->bindValue(':date',$date);
    $req->bindValue(':state',$state);
    $req->bindValue(':total',$total);
    $req->bindValue(':names',$names);
    
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    
  }
  function showorder ($order){
        echo "reference: ".$order->getreference()."<br>";
        echo "name: ".$order->getname()."<br>";
        echo "date: ".$order->getdate()."<br>";
        echo "state: ".$order->getstate()."<br>";
        echo "quantite: ".$order->getquantite()."<br>";
        echo "total: ".$order->gettotal()."<br>";
        echo "dstate: ".$order->getdstate()."<br>";
    }
  

function showorders(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From orders";
        $db = config::getConnexion();
        try{
        $list=$db->query($sql);
        return $list;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }


function deleteorder($reference){
        $sql="DELETE FROM orders where reference= :reference";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':reference',$reference);
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
