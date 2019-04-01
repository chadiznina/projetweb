<?PHP
include "../core/teamC.php";
$teamC=new teamC();
if (isset($_POST["nom"])){
	$teamC->deleteteam($_POST["nom"]);
	header('Location: teamlist.php');
}

?>