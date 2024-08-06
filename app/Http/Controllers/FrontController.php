<?php

namespace App\Http\Controllers;

use App\Http\Services\FrontendServices;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    protected $frontendServices;

    public function __construct(FrontendServices $frontendServices){
        $this->frontendServices = $frontendServices;
    }

    public function index(){
        return $this->frontendServices->index();
    }

    public function productDetails(Request $request, $subcategorySlug = null, $productSlug = null){
        return $this->frontendServices->productDetails($request, $subcategorySlug, $productSlug);
    }

    public function addToCart(Request $request){
        return $this->frontendServices->addToCart($request);
    }
}
