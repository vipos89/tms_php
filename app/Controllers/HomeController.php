<?php


namespace App\Controllers;


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