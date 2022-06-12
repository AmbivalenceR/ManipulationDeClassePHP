<?php
include __DIR__ . "/classes/product.class.php";
include __DIR__ . "/classes/book.class.php";
include __DIR__ . "/classes/videoGame.class.php";
include __DIR__ . "/classes/productSansStock.class.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $prixHT = $_POST["prixHT"];
    $tva = $_POST["tva"];
    $prixTTC = $_POST["prixHT"] * $_POST["tva"];
    $nom = $_POST["nom"];
    $categorie = $_POST["categorie"];
    $stock = $_POST["stock"];
    $description = $_POST["description"];

    // $product1 = new Product($prixHT, $tva, $prixTTC, $nom, $categorie, $stock, $description);
}

use Produits\Culture\Books;
use Produits\Culture\VideoGames;
use Virtuel\Product as Virtuel;

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>E-commerce</title>
</head>

<body>
    <h1>E-commerce</h1>
    <form action="index.php" method="POST">
        <input type="number" name="prixHT" placeholder="Prix HT" value="30">
        <input type="number" name="tva" placeholder="TVA" value="5">
        <input type="text" name="nom" placeholder="Nom" value="Produit">
        <input type="text" name="categorie" placeholder="Categorie" value="Catégorie">
        <input type="number" name="stock" placeholder="Stock" value="54">
        <input type="text" name="description" placeholder="Description" value="Description">
        <button type="submit">Enregistrer</button>
    </form>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // echo $product1->showInfosProducts() . "<hr>";

        // $product2 = Product::clonage($product1, "Ananas");

        // echo  $product2->showInfosProducts() . "<hr>";

        $newBook = new Books(12.5, 15, "la vie est belle", "Livres", 19, "synopsis", "poche", "Anna Paquin");

        echo $newBook->affichage() . "<hr>";
        echo $newBook->showInfosProducts() . "<hr>";

        $newVideoGame = new VideoGames(34, 45, "SplinterCell", "jeux", 45, "description", "RPG", 18, 4.5);

        echo $newVideoGame->showInfosProducts() . "<hr>";
        echo $newVideoGame->verificationAge(22) . "<hr>";

        $newVirtualProduct = new Virtuel(34, 5, 45, "Téléchargement", "virtuel", "description");

        echo $newVirtualProduct->showInfosProducts() . "<hr>";
    }; ?>
</body>

</html>