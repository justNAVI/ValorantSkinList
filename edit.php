<?php

include_once("templates/header.php");

?>

<body>
    <div class="container">
        <?php include_once("templates/backbtn.html"); ?>
        <h1 id="main-title">Editar Skin</h1>
        <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
            <input type="hidden" name="type" value="edit">
            <input type="hidden" name="id" value="<?= $wishlist["id"] ?>">
            <div class="form-group">
                <label class="label-color" for="nome">Nome da Skin:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome da Skin" value="<?= $wishlist['nome'] ?>" required>
            </div>
            <br>
            <div class="form-group">
                <label class="label-color" for="price">Preco da Skin:</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="Preco da Skin" value="<?= $wishlist['price'] ?>">
            <br>
            <div class="form-group">
                <label class="label-color" for="category">Categoria da Skin:</label>
                <input type="text" class="form-control" id="category" name="category" placeholder="Categoria da Skin" value="<?= $wishlist['category'] ?>" required>
            <br>
            <div class="form-group">
                <label class="label-color" for="rarity">Raridade da Skin:</label>
                <input type="text" class="form-control" id="rarity" name="rarity" placeholder="Raridade da Skin" value="<?= $wishlist['rarity'] ?>">
                <br><br><br>
                <button type="submit" class="btn btn-dark">Atualizar</button>
        </form>
    </div>
</body>
</html>

<?php

include_once("templates/footer.php");

?>