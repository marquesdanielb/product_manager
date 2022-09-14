<?php

Namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Category extends DataLayer
{
    public function __construct()
    {
        parent::__construct("category", ["name", "code"], "id", false);
    }

    public function products()
    {
        return (new Product())->find("category_id = : uid", "uid={$this->id}")->fetch(true);
    }
}