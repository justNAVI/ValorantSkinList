<?php

include_once("config/url.php");
include_once("config/process.php");

// limpa a mensagem
if(isset($_SESSION['msg'])) {
    $printMsg = $_SESSION['msg'];
    $_SESSION['msg'] = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skins WishList</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <!-- css -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-color">
            <a class="navbar-brand" href="<?= $BASE_URL ?>index.php">
                <img src="<?= $BASE_URL ?>img/logo.jpg" alt="LogoValorant">
            </a>
            <div>
                <div class="navbar-nav">
                    <a class="nav-link" href="<?= $BASE_URL ?>index.php">WishList</a>
                    <a class="nav-link" href="<?= $BASE_URL ?>create.php">Adicionar Skin</a>
                </div>
            </div>
        </nav>
    </header>
</body>