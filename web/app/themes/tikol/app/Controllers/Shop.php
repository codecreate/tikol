<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Shop extends Controller
{
    // Pass on fields from Advanced Custom Fields to the view
    protected $acf = ['products'];

    public function getProducts(){
        return array_map(function($product) {
            return [
                'image' => $product['prod_image'] ?? null,
                'title' => $product['prod_title'] ?? null,
                'author' => $product['prod_author'] ?? null,
                'description' => $product['prod_description'] ?? null,
                'price' => $product['prod_price'] ?? null,
                'link' => $product['prod_link'] ?? null,
            ];
        }, get_field('products') ?? []);

    }
}