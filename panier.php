<?php
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
$title = "Panier";
require('function.php');
include('./components/header.php'); 
if(isset($_POST['newQantity'])){
    changeQantity();
}
if(isset($_POST['articlePanierId'])){
    $id = $_POST['articlePanierId'];
    addToCart($id);
}
if(isset($_POST['modifyArticleId'])){
    changeQantity();
}

if(isset($_POST['deleteArticleId'])&& $_POST['deleteArticleId'] != ""){
    deleteArticle();
}


?>

<body>
<?php
    showArticlePanier();

?>
</body>