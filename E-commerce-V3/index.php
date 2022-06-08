<?php
include __DIR__ . "/classes/product.class.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $prixHT = $_POST["prixHT"];
    $tva = $_POST["tva"];
    $prixTTC = $_POST["prixHT"] * $_POST["tva"];
    $nom = $_POST["nom"];
    $categorie = $_POST["categorie"];
    $stock = $_POST["stock"];
    $description = $_POST["description"];

    $product1 = new Product($prixHT, $tva, $prixTTC, $nom, $categorie, $stock, $description);
}
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
        <input type="number" name="prixHT" placeholder="Prix HT">
        <input type="number" name="tva" placeholder="TVA">
        <input type="text" name="nom" placeholder="Nom">
        <input type="text" name="categorie" placeholder="Categorie">
        <input type="number" name="stock" placeholder="Stock">
        <input type="text" name="description" placeholder="Description">
        <button type="submit">Enregistrer</button>
    </form>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo $product1->showInfosProducts() . "<hr>";

        $product2 = Product::clonage($product1, "Ananas");

        echo  $product2->showInfosProducts();
    }; ?>
</body>

</html>