<?php
class Product
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

    public function getPrixHT()
    {
        return number_format($this->prixHT, 2) . " €";
    }

    public function valorisationStock()
    {
        return "Valorisation du stock : " . number_format(($this->stock * $this->prixHT), 2) . " €";
    }
}
