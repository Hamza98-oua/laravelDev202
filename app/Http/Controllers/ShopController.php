<?php

namespace App\Http\Controllers;

class ShopController extends Controller
{
    private function loadData() {
        // Cette ligne permet d'inclure le fichier et d'accéder aux variables $products, $config, etc.
        require_once app_path('data.php');
        return get_defined_vars();
    }

    public function index() {
        $featuredProducts = getFeaturedProducts(); 
    return view('index', ['products' => $featuredProducts]);
    }

    public function contact() {
        return view('contact');
    }

    public function cgv() {
        $data = $this->loadData();
        return view('cgv', ['cgv' => $data['cgv']]);
    }
}