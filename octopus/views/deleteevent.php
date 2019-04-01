<?PHP
include "../core/eventC.php";
$eventC=new eventC();
if (isset($_POST["name"])){
	$eventC->deleteevent($_POST["name"]);
	header('Location: myevent.php');
}

?>