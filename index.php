<?php

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(ROOT);

/*
* Controllers
*/
$router->namespace("Source\App");

/*
* WEB
* home
*/
$router->group(null);
$router->get("/", "Web:home");

/*
* WEB
* Produto
*/
$router->group("produto");
$router->get("/", "ProductController:products");
$router->get("/{id}", "ProductController:destroyProduct");
$router->delete("/{id}", "ProductController:destroyProduct");

$router->group("adicionar-produto");
$router->get("/", "ProductController:addProduct");
$router->post("/", "ProductController:addProduct");

$router->group("editar-produto");
$router->get("/{id}", "ProductController:updateProduct");
$router->post("/{id}", "ProductController:updateProduct");

/*
* WEB
* Categoria
*/
$router->group("categoria");
$router->get("/", "CategoryController:category");
$router->get("/{id}", "CategoryController:destroyCategory");
$router->delete("/{id}", "CategoryController:destroyCategory");

$router->group("adicionar-categoria");
$router->get("/", "CategoryController:addCategory");
$router->post("/", "CategoryController:addCategory");

$router->group("editar-categoria");
$router->get("/{id}", "CategoryController:updateCategory");
$router->post("/{id}", "CategoryController:updateCategory");

/*
* ERROS
*/
$router->group("ooops");
$router->get("/{errcode}", "Web:error");
$router->get("/{errcode}", "ProductController:error");
$router->get("/{errcode}", "CategoryController:error");

$router->dispatch();

if ($router->error()) {
    $router->redirect("/ooops/{$router->error()}");
}