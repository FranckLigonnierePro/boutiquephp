<?php
session_start();
include('function.php');
$id = $_POST['articleId'];
getArticleFromId($id);
$title = "Produit";
include('./components/header.php');
?>

<body>

<?php showArticle($id); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

