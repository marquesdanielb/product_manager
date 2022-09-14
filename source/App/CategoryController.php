<?php

namespace Source\App;

use League\Plates\Engine;
use Source\Models\Product;
use Source\Models\Category;

class CategoryController
{
    private $view;

    public function __construct()
    {
        $this->view = Engine::create(__DIR__."/../../theme", "php");
    }

    public function category()
    {
        $category = new Category();
        $list = $category->find()->fetch(true);

        if (!$list) {
            $list = [];
        }

        echo $this->view->render("categories", [
            "title" => "Categorias | ".SITE,
            "list" => $list
        ]);
    }

    public function addCategory(Array $data)
    {
        $category = new Category();
        
        if (!isset($data["name"])) {
            echo $this->view->render("addCategory", [
                "title" => "Adicionar categoria | ".SITE
            ]);
            die();
        }

        $category->name = $data["name"];
        $category->code = (int) $data["code"];
        $category->save();

        echo $this->view->render("addCategory", [
            "title" => "Adicionar categoria | ".SITE
        ]);
    }

    public function updateCategory($data)
    {
        $objCategory = new Category();
        $category = $objCategory->findById($data["id"]);

        if (!isset($data["name"])) {
            echo $this->view->render("editCategory", [
                "title" => "Editar categoria | ".SITE,
                "category" => $category
            ]);
            die();
        }

        $category->name = $data["name"];
        $category->code = (int) $data["code"];
        $category->save();

        echo $this->view->render("editCategory", [
            "title" => "Editar categoria | ".SITE,
            "category" => $category
        ]);
    }

    public function destroyCategory($data)
    {
        $objCategory = new Category();
        $category = $objCategory->findById($data["id"]);
        $category->destroy();
    
        echo $this->view->render("deleteCategory", [
            "title" => "Categorias | ".SITE,
            "category" => $category
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
