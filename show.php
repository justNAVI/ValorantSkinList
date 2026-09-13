<?php

include_once("templates/header.php");

?>

 <div class="container" id="view-wishlist-container">
    
    <h1 id="main-title"><?= $wishlist["nome"] ?></h1>
    <p class="bold">Preco:</p>
    <p class="cor"><?= $wishlist["price"] ?> VP</p>
    <p class="bold">Categoria:</p>
    <p class="cor"><?= $wishlist["category"] ?></p>
    <p class="bold">Raridade:</p>
    <p class="cor"><?= $wishlist["rarity"] ?></p>

    <img src="img/skins/a<?= $wishlist["id"] ?>.png" alt="Skin" class="skin-image">
 </div>

<?php

include_once("templates/footer.php");

?>
