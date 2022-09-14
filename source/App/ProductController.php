<?php

namespace Source\App;

use League\Plates\Engine;
use Source\Models\Product;
use Source\Models\Category;

class ProductController
{
    private $view;

    public function __construct()
    {
        $this->view = Engine::create(__DIR__."/../../theme", "php");
    }

    public function products()
    {
        $products = new Product();
        $list = $products->find()->fetch(true);

        if (!$list) {
            $list = [];
        }

        echo $this->view->render("products", [
            "title" => "Produtos | ".SITE,
            "list" => $list
        ]);
    }

    public function addProduct($data)
    {
        $category = new Category();
        $list = $category->find()->fetch(true);

        $product = new Product();

        if (!isset($data["name"])) {
            echo $this->view->render("addProduct", [
                "title" => "Adicionar produto | ".SITE,
                "list" => $list
            ]);
            die();
        }

        $product->sku = (int) $data["sku"];
        $product->name = $data["name"];
        $product->price = (int) $data["price"];
        $product->quantity = (int) $data["quantity"];
        $product->category_id = $data["category_id"];
        $product->description = $data["description"];
        $product->save();

        echo $this->view->render("addProduct", [
            "title" => "Adicionar produto | ".SITE,
            "list" => $list
        ]);
    }

    public function updateProduct($data)
    {
        $objCategory = new Category();
        $list = $objCategory->find()->fetch(true);

        $objProduct = new Product();
        $product = $objProduct->findById($data["id"]);

        if (!isset($data["name"])) {
            echo $this->view->render("editProduct", [
                "title" => "Editar produto | ".SITE,
                "product" => $product,
                "list" => $list
            ]);
            die();
        }

        $product->name = $data["name"];
        $product->sku = (int) $data["sku"];
        $product->price = (int) $data["price"];
        $product->quantity = (int) $data["quantity"];
        $product->category_id = (int) $data["category_id"];
        $product->description = $data["description"];
        $product->save();

        echo $this->view->render("editProduct", [
            "title" => "Editar produto | ".SITE,
            "product" => $product,
            "list" => $list
        ]);
    }

    public function destroyProduct($data)
    {
        $objProduct = new product();
        $product = $objProduct->findById($data["id"]);
        $product->destroy();
    
        echo $this->view->render("deleteProduct", [
            "title" => "Categorias | ".SITE,
            "product" => $product
        ]);
    }

    public function error($data)
    {
        echo $this->view->render("error", [
            "title" => "Error {$data['errcode']} | ".SITE,
            "error" => $data['errcode']
        ]);
    }
}
