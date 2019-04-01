<?PHP
include "../core/artcileC.php";
$articleC=new articleC();

if (isset($_POST["ref"]) and isset($_POST["new"]) and ( $_POST["modwith"]=="description" or $_POST["modwith"]=="avatar" )  ) {
	$articleC->modifierarticle($_POST["ref"],$_POST["new"],$_POST["modwith"]);
	header('Location: article.php');
}
else
{
	echo "Vous devez choisir modifier selon quel critere";
}

?>