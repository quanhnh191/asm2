<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $categories = Category::get();
        $products = Product::take(4)->get();
//       dd($products);
        return view('client.home',compact('categories','products'));
    }

    public function detail($id){
        $categories = Category::get();
        $product = Product::join("categories", "categories.id", "=", "products.category_id")
            ->where('products.id',$id)
            ->select("products.*", "categories.name as ctg_name")
            ->first();
//       dd($product);
        $product->view++;
        $product->save();

        return view('client.detail',compact('categories','product'));

    }

    public  function listShop(Request $request){
        $categories = Category::get();
        $products = Product::join("categories", "categories.id", "=", "products.category_id")
            ->select("products.*", "categories.name as ctg_name")
            ->where("products.category_id", $request->ctg_id)
            ->get();
//    dd($products);
        return view('client.list-shop',compact('categories','products'));
    }


    public function menu(){
        $categories = Category::get();
        $products = Product::join("categories", "categories.id", "=", "products.category_id")
            ->select("products.*", "categories.name as ctg_name")
            ->paginate(8);

//       dd($products);
        return view('client.list',compact('categories','products'));
    }
}
