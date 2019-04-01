<?PHP
include "../entities/game.php";
include "../core/gameC.php";
if (isset($_POST['name']) and isset($_POST['description']) and isset($_POST['rating']))
{
$game1=new game($_POST['name'],$_POST['description'],$_POST['rating'],$_POST['image']);

$game1C=new gameC();
$game1C->ajoutergame($game1);

header('Location: addimage.php');
	
}else
{
	echo "vérifier les champs";
}
//*/

?>