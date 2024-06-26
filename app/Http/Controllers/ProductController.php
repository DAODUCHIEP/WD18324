<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProduct(){
        $products = [
            
            [
            'id' => '1',
            'name' => 'iphone 14'
            ],
            
            [
            'id' => '2',
            'name' => 'iphone 13'
            ]
        ];
        
        return view('list-product')->with([
            'products' => $products
        ]);
    }

    public function getProduct($id){
        echo $id;
    }

    public function updateProduct(request $request){
        echo $request->id;
        echo $request->name;
    }
}