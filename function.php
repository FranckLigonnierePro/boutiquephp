<?php


/*------------------function recup des articles--------------------*/

function getArticles(){
    
   return [
        
        $ps5 = [
            'id' => 1,
            'name' => 'Sony PlaStation 5',
            'price' => 399.99,
            'img' => "./images/ps5.png",
            'slogan' => 'For the players',
            'Describe' => 'Console Sony Playstation 5 Digital Edition'
        ],
        $xbox= [
            'id' => 2,
            'name' => 'Microsoft Xbox Series X',
            'price' => 499.99,
            'img' => "./images/xbox.png",
            'slogan' => 'Power Your Dreams',
            'Describe' => 'la xbox la plus rapide et la plus puissante jamais conçue'
        ],
        $switch = [
            'id' => 3,
            'name' => 'Nintendo Switch',
            'price' => 299.99,
            'img' => "./images/switch.png",
            'slogan' => 'Play together anytime, anywhere',
            'Describe' => "Jouez à vos jeux favoris n'importe où grâce à la Nintendo Switch."
        ]
    ];
     
}

/*------------------function affichage des articles--------------------*/

function showArticles(){

    $articles = getArticles();

   foreach($articles as $article){

       echo "<img src=\"" .$article['img']. "\" alt=\"photo" .$article['name']. "\" width=\"50\" height=\"50\">
        <h1>" .$article['name']. "</h1> 
        <h2>" .$article['slogan']. "</h2> 
        <h3>" .$article['price']. "</h3> 
        <form method=\"post\" action=\"produit.php/\"".$article['id']."\">
            <input type=\"hidden\" name=\"articleId\" value=\"" .$article['id']."\">
            <button type=\"submit\" class=\"btn btn-primary\">Description</button>
        </form>
            <form method=\"post\" action=\"panier.php\"".$article['id']."\">
            <input type=\"hidden\" name=\"articlePanierId\" value=\"" .$article['id']."\">
        <button type=\"submit\" class=\"btn btn-primary\">Ajouter au panier</button>
        </form>"
        ;
   }
}

/*------------------function recup d'un seul article--------------------*/

function getArticleFromId($id){
    $articles = getArticles();
    foreach($articles as $article){
        if ($id == $article['id']){
            return $article;
        }
    }
}

/*------------------function affichage d'un article--------------------*/

function showArticle($id){

    $article = getArticleFromId($id);

    echo "<img src=\"" .$article['img']. "\" alt=\"photo" .$article['name']. "\" width=\"50\" height=\"50\">
    <h1>" .$article['name']. "</h1> 
    <h2>" .$article['slogan']. "</h2> 
    <h3>" .$article['price']. "</h3> 
    <form method=\"post\" action=\"produit.php/\"".$article['id']."\">
    <input type=\"hidden\" name=\"articleId\" value=\"" .$article['id']."\">
    <button type=\"submit\" class=\"btn btn-primary\">Ajouter au panier</button>
    </form>"
    ;
}



function addToCart($id){
    $articleDejaLa = FALSE;
    $articleAjouté = getArticleFromId($id);
    for ($i = 0; $i < count($_SESSION['cart']); $i++){
        if($articleAjouté['id'] === $_SESSION['cart'][$i]['id']){
            $articleDejaLa = TRUE;
            echo "<scripy>alert(\"cet article est deja dans le panier\")</scripy>";
        }
    }
    if (!$articleDejaLa) {
        $articleAjouté['qty'] = 1;
        array_push($_SESSION['cart'],$articleAjouté);
    }

}

function showArticlePanier(){
    foreach($_SESSION['cart'] as $article)
    echo "<img src=\"" .$article['img']. "\" alt=\"photo" .$article['name']. "\" width=\"50\" height=\"50\">
    <h1>" .$article['name']. "</h1> 
    <h2>" .$article['slogan']. "</h2> 
    <h3>" .$article['price']. "</h3>"
    ;

}

?>