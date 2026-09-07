<?php

session_start();

include_once("connection.php");
include_once("url.php");

$wishlist = [];

$query = "SELECT * FROM wishlist";

$stmt = $conn->prepare($query);

$stmt->execute();
$wishlist = $stmt->FetchAll();


?>