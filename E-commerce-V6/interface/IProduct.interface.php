<?php

namespace Produits;

interface IProduct
{

    public function getPrixHT(): string;

    public function valorisationStock(): string;

    public function showInfosProducts(): void;
}
