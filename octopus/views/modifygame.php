<?PHP
include "../core/gameC.php";
$gameC=new gameC();

if (isset($_POST["nam"]) and isset($_POST["new"]) and ( $_POST["modwith"]=="description" or $_POST["modwith"]=="rating" )  ) {
	$gameC->modifiergame($_POST["nam"],$_POST["new"],$_POST["modwith"]);
	header('Location: mygames.php');
}
else
{
	echo "Vous devez choisir modifier selon quel critere";
}

?>