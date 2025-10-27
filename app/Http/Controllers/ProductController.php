<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function index(){
        $products= Product::from("products as p")
        ->select("p.id", "p.title", "p.description", "p.price", "p.category_id", "p.photo")
        ->paginate(5);
        // dd($products);
        return view("admin.pages.products.index", compact("products"));
    }
    
}
