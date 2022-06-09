<?php

include '../vendor/autoload.php';

use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\CategoryController;
use App\Controller\ErrorController;

$url = explode('?', $_SERVER['REQUEST_URI'])[0];

if ($url === '/') {
    $c = new IndexController();
    $c->indexAction();
} elseif ($url === '/login') {
    $c = new IndexController();
    $c->loginAction();
} elseif ($url === '/product/list') {
    $p = new ProductController();
    $p->listAction();
} elseif ($url === '/product/add') {
    $p = new ProductController();
    $p->addAction();
} elseif ($url === '/product/edit') {
    $p = new ProductController();
    $p->editAction();
} elseif ($url === '/category/list') {
    $category = new CategoryController();
    $category->listCategoryAction();
} else {
    $error = new ErrorController();
    $error->notFoundAction();
}
