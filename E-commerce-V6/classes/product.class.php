<?php

namespace Produits;

require_once __DIR__ . "/../interface/IProduct.interface.php";

abstract class Product implements IProduct
{
    protected float $prixHT;
    public float $tva;
    public float $prixTTC;
    public string $nom;
    public string $categorie;
    public int $stock;
    public string $description;
    public function __construct($prixHT, $tva, $prixTTC, $nom, $categorie, $stock, $description)
    {
        $this->prixHT = $prixHT;
        $this->tva = $tva;
        $this->prixTTC = $prixTTC;
        $this->nom = $nom;
        $this->categorie = $categorie;
        $this->stock = $stock;
        $this->description = $description;
    }

    // public static function clonage($modele, $nomProduitClone)
    // {
    //     return new Product($modele->prixHT, $modele->tva, $modele->prixTTC, $nomProduitClone, $modele->categorie, $modele->stock, "");
    // } 

    public function getPrixHT(): string
    {
        return number_format($this->prixHT, 2) . " €";
    }

    public function valorisationStock(): string
    {
        return "Valorisation du stock : " . number_format(($this->stock * $this->prixHT), 2) . " €";
    }

    public abstract function showInfosProducts(): void;
}
