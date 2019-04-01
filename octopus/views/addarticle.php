<?PHP
include "../entities/Article.php";
include "../core/ArtcileC.php";
if (isset($_POST['avatar']) and isset($_POST['description']) and isset($_POST['type']))
{
$article1=new article($_POST['avatar'],$_POST['description'],$_POST['type']);

$article1C=new ArticleC();
$article1C->ajouterarticle($article1);

	header('Location: pages-blank.html');
}
else{
	echo "vérifier les champs";
}


?>