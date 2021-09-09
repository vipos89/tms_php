<?php


namespace App\Controllers;


use App\Models\Products;

class CatalogController
{

    public function index(){
      $products = Products::search();
      render('catalog/index', compact('products'));
    }

    public function showProduct(){
        echo 'showProduct';
    }


}