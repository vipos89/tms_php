<?php


namespace App\Controllers;


use App\Models\Page;

class HomeController
{
    public function index(){

        render('home/index', [
            'name' => 'Ololo',
            'lastName' => 'Ololoska'
        ]);
    }

    public function contacts(){
        echo "contacts";
    }
}