<?php
session_start();
require('function.php');
$article = getArticles();
$title = "Accueil";
include('./components/header.php'); 

?>

<body>
      <?php showArticles(); ?>
</body>

</html>