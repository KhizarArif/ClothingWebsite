<?php 

namespace App\Http\Services;

use App\Http\Controllers\FrontController;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendServices 
{
    public function index(){
        $products = Product::with('product_images')->get();
        return view('frontend.home', compact('products'));
    }
}