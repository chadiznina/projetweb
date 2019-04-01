<?PHP
include "../entities/team.php";
include "../core/teamC.php";
if (isset($_POST['nom']) and isset($_POST['game']) and isset($_POST['nbr']) and isset($_POST['mail']) and isset($_POST['description']) and isset($_POST['names'])){
$team1=new team($_POST['nom'],$_POST['game'],$_POST['nbr'],$_POST['mail'],$_POST['description'],$_POST['names']);

$team1C=new teamC();
$team1C->ajouterTeam($team1);

	header('Location: addimage.php');
}else{
	echo "vérifier les champs";
}
//*/

?>