<?php
session_start();
require('function.php');
$id = $_POST['articleId'];
getArticleFromId($id);
$title = "Produit";
include('./components/header.php');
?>

<body>

<?php showArticle($id); ?>

</body>
</html>

