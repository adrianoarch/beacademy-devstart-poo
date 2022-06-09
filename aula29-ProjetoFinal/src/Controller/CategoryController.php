<?php

declare(strict_types=1);

namespace App\Controller;

class CategoryController extends AbstractController
{
    public function listCategory() : void
    {
        parent::render('category/listCategory');
    }

    public function addCategory() : void
    {
        parent::render('category/addCategory');
    }

    public function editCategory() : void
    {
        parent::render('category/editCategory');
    }
}
{
   
}