<?php 

namespace App\Http\Services;

use App\Http\Controllers\FrontController;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class FrontendServices 
{
    public function index(){
        $products = Product::with('productImages')->with('subCategories')->get();
        return view('frontend.home', compact('products'));
    }

    public function productDetails($request,$subcategorySlug, $productSlug){
      

        $categorySelected = "";
        $subcategorySelected = "";
    
        $categories = Category::with('subCategories')->orderBy("name", "asc")->where('status', "active")->get();
        $products = collect(); 
    
        if (!empty($productSlug) || !empty($subcategorySlug)) {
            $productsQuery = Product::with('productImages')->where('status', "active");
         
            if (!empty($subcategorySlug)) {
                $subcategory = SubCategory::where('slug', $subcategorySlug)->first(); 
                $productsQuery->where('sub_category_id', $subcategory->id); 
             
                $subcategorySelected = $subcategory->id;
            }
        
            if (!empty($productSlug)) {
                $product = Product::where('slug', $productSlug)->first(); 
                $productsQuery->where('id', $product->id); 
                $productSelected = $product->id; 
            }
    
            $products = $productsQuery->paginate(6);  
        }
        
        // dd($products);
      

        return view('frontend.addToCart', compact('categories', 'products', 'categorySelected', 'subcategorySelected'));
    
    }

    public function addToCart($request){

        dd($request);
    }

}