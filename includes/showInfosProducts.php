<?php function showInfosProducts($product1, $prixHT)
{
    if (isset($product1)) {
        echo "
    <p>Prix HT : " . $product1->getPrixHT($prixHT) . "</p>
    <p>TVA : " . $product1->tva . "</p>
    <p>TTC : " . $product1->prixTTC . "</p>
    <p>Nom : " . $product1->nom . "</p>
    <p>Catégorie : " . $product1->categorie . "</p>
    <p>Stock : " . $product1->stock . "</p>
    <p>Description : " . $product1->description . "</p>
    <p>" . $product1->valorisationStock() . "</p>";
    }
}
