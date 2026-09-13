<?php

session_start();

include_once("connection.php");
include_once("url.php");

$data = $_POST;

//mofificacoes no banco
if(!empty($data)) {


// adicionar skin 

    if($data["type"] === "create") {

        $nome = $data["nome"];
        $price = $data["price"];
        $category = $data["category"];
        $rarity = $data["rarity"];

        if (!is_numeric($price)) {
        echo "Digite um preço válido!";
        exit;
    }

        $query = "INSERT INTO wishlist(nome, price, category, rarity) VALUES (:nome, :price, :category, :rarity)";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":price", $price);
        $stmt->bindParam(":category", $category);
        $stmt->bindParam(":rarity", $rarity);

        try {

        $stmt->execute();
        $_SESSION["msg"] = "Skin adicionada com sucesso!";


        } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
    }

    } else if($data["type"] === "edit") {

        $nome = $data["nome"];
        $price = $data["price"];
        $category = $data["category"];
        $rarity = $data["rarity"]; 
        $id = $data["id"];

        $query = "UPDATE wishlist 
                  SET nome = :nome, price = :price, category = :category, rarity = :rarity 
                  WHERE id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":price", $price);
        $stmt->bindParam(":category", $category);
        $stmt->bindParam(":rarity", $rarity);
        $stmt->bindParam(":id", $id);

        try {

        $stmt->execute();
        $_SESSION["msg"] = "Skin editada com sucesso!";


        } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
    }

    

    } else if($data["type"] === "delete") {


        $id = $data["id"];

        $query = "DELETE FROM wishlist WHERE id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":id", $id);


        try {

        $stmt->execute();
        $_SESSION["msg"] = "Skin excluida com sucesso!";


        } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
    }

    }

    // redirect

header("Location:" . $BASE_URL . "../index.php");



// selecao de dados
} else {
    
    $id;

    if(!empty($_GET)) {
        $id = $_GET["id"];
    }

    // retorna dado da skin

    if(!empty($id)) {

    $query = "SELECT * FROM wishlist WHERE id = :id";

    $stmt = $conn->prepare($query);

    $stmt->bindParam(":id", $id);

    $stmt->execute();

    $wishlist = $stmt->fetch();

    } else {

        // retorna toda a wishlist
        $wishlist = [];

        $query = "SELECT * FROM wishlist";

        $stmt = $conn->prepare($query);

        $stmt->execute();
        $wishlist = $stmt->FetchAll();
    }
}

// FECHAR CONEXAO 

$conn = null;
