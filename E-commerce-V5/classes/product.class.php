<?php
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


class Books extends Product
{
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
