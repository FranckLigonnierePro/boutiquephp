<?php
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

require('function.php');
include('./components/header.php'); 
$title = "Panier";

if(isset($_POST['articlePanierId'])){
    $id = $_POST['articlePanierId'];
    addToCart($id);
    showArticlePanier($id);
}




?>

<body>
<?php

?>
</body>