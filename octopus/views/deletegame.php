<?PHP
include "../core/gameC.php";
$gameC=new gameC();
if (isset($_POST["name"])){
	$gameC->deletegame($_POST["name"]);
	header('Location: mygames.php');
}

?>