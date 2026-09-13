<?php

include_once("templates/header.php");

?>

<div class="container">
    <?php if (isset($printMsg) && $printMsg != ''): ?>

    <p id="msg"><?= $printMsg ?></p>

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
            <tbody class="bg-tbody">
                <?php foreach($wishlist as $skin): ?>
                    <tr class="bg-tr">
                        <td scope="row class="col-id"><?= $skin["id"] ?></td>
                        <td scope="row"><?= $skin["nome"] ?></td>
                        <td scope="row"><?= $skin["price"] ?></td>
                        <td scope="row"><?= $skin["category"] ?></td>
                        <td scope="row"><?= $skin["rarity"] ?></td>
                        <td class="actions"> 
                            <a href="<?= $BASE_URL ?>show.php?id=<?= $skin["id"] ?>"><i class="fas fa-eye check-icon"></i></a>
                            <a href="<?= $BASE_URL ?>edit.php?id=<?= $skin["id"] ?>"><i class="far fa-edit edit-icon"></i></a>
                            <form class="delete-form" action="<?= $BASE_URL ?>/config/process.php" method="POST">
                                <input type="hidden" name="type" value="delete">
                                <input type="hidden" name="id" value="<?= $skin["id"] ?>">
                                <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                            </form>
                                
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
