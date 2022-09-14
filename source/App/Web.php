<?php

namespace Source\App;

use League\Plates\Engine;
use Source\Models\Product;
use Source\Models\Category;

class Web
{
    private $view;

    public function __construct()
    {
        $this->view = Engine::create(__DIR__."/../../theme", "php");
    }

    public function home()
    {
        $products = new Product();
        $list = $products->find()->fetch(true);

        if (!$list) {
            $list = [];
        }

        echo $this->view->render("dashboard", [
            "title" => "Home | ".SITE,
            "list" => $list
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
