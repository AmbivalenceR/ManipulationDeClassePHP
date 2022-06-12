<?php

namespace Virtuel;

class Product
{
    protected float $prixHT;
    public float $tva;
    public float $prixTTC;
    public string $nom;
    public string $categorie;
    public string $description;
    public function __construct($prixHT, $tva, $prixTTC, $nom, $categorie, $description)
    {
        $this->prixHT = $prixHT;
        $this->tva = $tva;
        $this->prixTTC = $prixTTC;
        $this->nom = $nom;
        $this->categorie = $categorie;
        $this->description = $description;
    }

    public function getPrixHT(): string
    {
        return number_format($this->prixHT, 2) . " €";
    }

    public function showInfosProducts(): void
    {
        if (isset($this)) {
            echo "<p>Prix HT : " . $this->getPrixHT() . "</p>
            <p>TVA : " . $this->tva . "</p>
            <p>TTC : " . $this->prixTTC . "</p>
            <p>Nom : " . $this->nom . "</p>
            <p>Catégorie : " . $this->categorie . "</p>
            <p>Description : " . $this->description . "</p>
";
        }
    }
}
