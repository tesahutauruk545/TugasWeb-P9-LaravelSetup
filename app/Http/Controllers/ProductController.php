<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['name' => 'Laptop ASUS', 'price' => 15000000],
            ['name' => 'Mouse Logitech', 'price' => 250000],
            ['name' => 'Keyboard Mechanical', 'price' => 800000],
        ];

        return view('products', ['products' => $products]);
    }
}