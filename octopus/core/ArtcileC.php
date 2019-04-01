 <?php
include "../config.php";
class ArticleC
{

function ajouterarticle($article){
     $sql="insert into article (avatar,description,type,date) values (:avatar,:description,:type,CURDATE())";
    $db = config::getConnexion();
    try{
        $req=$db->prepare($sql);

        $avatar=$article->getavatar();
        $description=$article->getdescription();
        $type=$article->gettype();

       
        $req->bindValue(':avatar',$avatar);
        $req->bindValue(':description',$description);
        $req->bindValue(':type',$type);
    
            $req->execute();
        
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    
  }
  function showarticle ($article){
        echo "avatar: ".$article->getavatar()."<br>";
        echo "description: ".$article->getdescription()."<br>";
        echo "type: ".$article->gettype()."<br>";
    }
  

function showarticles(){
        
        $sql="SElECT * From article";
        $db = config::getConnexion();
        try{
        $list=$db->query($sql);
        return $list;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }


function deletearticle($avatar){

        $sql="DELETE FROM article where avatar= :avatar";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':avatar',$avatar);
        try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function showid(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="SElECT * From article ORDER BY id DESC LIMIT 1 ";
        $db = config::getConnexion();
        try{
        $list=$db->query($sql);
        return $list;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
    function modifierarticle($typ,$new,$modwhat){
        if ($modwhat=="description") {
            $sql="UPDATE article SET description=:input WHERE type=:typ";
        }
        if ($modwhat=="avatar") {
            $sql="UPDATE article SET avatar=:input WHERE type=:typ";
        }
        

        
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':input',$new);
        $req->bindValue(':typ',$typ);

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
