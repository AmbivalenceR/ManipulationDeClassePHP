<?php

namespace Produits\Culture;

require_once __DIR__ . "/product.class.php";
require_once __DIR__ . '/../traits/test.php';

use Produits\Product;
use Produits\test;

class Books extends Product
{
    use test;

    public string $auteur;
    public string $format;

    public function affichage(): string
    {
        return $this->nom . "<br>" . $this->auteur . "<br>" . $this->description;
    }
    public function __construct($prixHT, $prixTTC, $nom, $categorie, $stock, $description, $format, $auteur)
    {
        parent::__construct($prixHT, 5.5, $prixTTC, $nom, $categorie, $stock, $description);

        $this->format =  $format;
        $this->auteur = $auteur;
    }
    public function showInfosProducts(): void
    {
        if (isset($this)) { ?>

            <p>Prix HT : <?php $this->getPrixHT(); ?> </p>
            <p>TVA : <?php $this->tva; ?> </p>
            <p>TTC : <?php $this->prixTTC; ?> </p>
            <p>Nom : <?php $this->nom; ?> </p>
            <p>Auteur : <?php $this->auteur; ?></p>
            <p>Format : <?php $this->format; ?> </p>
            <p>Catégorie : <?php $this->categorie; ?> </p>
            <p>Stock : <?php $this->stock; ?> </p>
            <p>Description : <?php $this->description; ?> </p>
            <p> <?php $this->valorisationStock(); ?> </p>
<?php }
    }
}
