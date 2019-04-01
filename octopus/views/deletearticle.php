<?PHP
include "../core/ArtcileC.php";
$ArticleC=new ArticleC();
if (isset($_POST["avatar"])){
	$ArticleC->deletearticle($_POST["avatar"]);
	header('Location: article.php');
}

?>