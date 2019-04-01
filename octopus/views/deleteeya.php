<?PHP
include "../core/orderC.php";
$orderC=new orderC();
if (isset($_POST["reference"])){
	$orderC->deleteorder($_POST["reference"]);
	header('Location: eya.php');
}

?>