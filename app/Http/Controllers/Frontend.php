<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class Frontend extends Controller
{
    //
    // Category Product
    public function categoryProduct($name)
    {
        return view('frontend.pages.category_product',compact('name'));
    }
    // Product detail
    public function productDetail($slug)
    {
        $product = Product::where('slug',$slug)->first();
        return view('frontend.pages.detail',compact('product'));
    }
    // Product Discount
    public function productDiscount($slug)
    {
        $product = Product::where('slug',$slug)->where('discount','!=',null)->first();
        return view('frontend.pages.discount_detail',compact('product'));
    }
}
