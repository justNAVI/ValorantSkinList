<?php

include_once("templates/header.php");

?>

<div class="container">
    <?php if (isset($printMsg) && $printMsg != ''): ?>

    <p id="msg"><? $printMsg ?></p>

    <?php endif; ?>
    <h1 id="main-title">Minha Wishlist</h1>
    <?php if(count($wishlist) > 0): ?>
        <table class="table" id="wishlist-table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Raridade</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($wishlist as $skin): ?>
                    <tr>
                        <td scope="row"><?= $skin["id"] ?></td>
                        <td scope="row"><?= $skin["nome"] ?></td>
                        <td scope="row"><?= $skin["price"] ?></td>
                        <td scope="row"><?= $skin["category"] ?></td>
                        <td scope="row"><?= $skin["rarity"] ?></td>
                        <td class="actions"> 
                            <a href="#"><i class="fas fa-eye check-icon"></i></a>
                            <a href="#"><i class="far fa-edit edit-icon"></i></a>
                            <button type="submit"><i class="fas fa-times delete-icon"></i></button>

                        </td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p id="empty-list-text">Ainda não há skins na sua Wishlist! <a href="<?= $BASE_URL ?>create.php">Clique aqui para adicionar!</a></p>
    <?php endif; ?>
</div>

<?php

include_once("templates/footer.php");

?>
