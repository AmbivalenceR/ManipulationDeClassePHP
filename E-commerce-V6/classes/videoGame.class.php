<?php

namespace Produits\Culture;

require_once __DIR__ . "/product.class.php";

use Produits\Product;

class VideoGames extends Product
{
    public string $type;
    public int $ageMinimum;
    public float $moyenneCritiques;

    public function  verificationAge($age): string
    {
        if ($age >= $this->ageMinimum) {
            return "vous pouvez l'acheter";
        } else {
            return "vous ne pouvez pas l'acheter";
        }
    }
    public function __construct($prixHT, $prixTTC, $nom, $categorie, $stock, $description, $type, $ageMinimum, $moyenneCritiques)
    {
        parent::__construct($prixHT, 20.2, $prixTTC, $nom, $categorie, $stock, $description);

        $this->type =  $type;
        $this->ageMinimum = $ageMinimum;
        $this->moyenneCritiques = $moyenneCritiques;
    }
    public function showInfosProducts(): void
    {
        if (isset($this)) {
            echo "<p>Prix HT : " . $this->getPrixHT() . "</p>
            <p>TVA : " . $this->tva . "</p>
            <p>TTC : " . $this->prixTTC . "</p>
            <p>Nom : " . $this->nom . "</p>
            <p>Type : " . $this->type . "</p>
            <p>Age minimum : " . $this->ageMinimum . "</p>
            <p>Catégorie : " . $this->categorie . "</p>
            <p>Stock : " . $this->stock . "</p>
            <p>Description : " . $this->description . "</p>
            <p>Moyenne des critiques : " . $this->moyenneCritiques . "</p>
            <p>" . $this->valorisationStock() . "</p>";
        }
    }
}
