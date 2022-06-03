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
    <?php if (isset($product1)) { ?>
        <p>Prix HT : <?= $product1->prixHT ?></p>
        <p>Tva : <?= $product1->tva ?></p>
        <p>TTC : <?= $product1->prixTTC ?></p>
        <p>Nom : <?= $product1->nom ?></p>
        <p>Catégorie : <?= $product1->categorie ?></p>
        <p>Stock : <?= $product1->stock ?></p>
        <p>Description : <?= $product1->description ?></p>
    <?php } ?>
</body>

</html>