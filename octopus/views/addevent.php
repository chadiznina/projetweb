<?PHP
include "../entities/event.php";
include "../core/eventC.php";
if (isset($_POST['name']) and isset($_POST['place']) and isset($_POST['description']))
{
$event1=new event($_POST['name'],$_POST['place'],$_POST['description']);

$event1C=new eventC();
$event1C->ajouterevent($event1);

	header('Location: Event.html');
}else
{
	echo "vérifier les champs";
}
//*/

?>