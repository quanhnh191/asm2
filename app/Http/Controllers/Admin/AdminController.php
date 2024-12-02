<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $count_users = User::where('role', 'member')->count('id');

        $count_managers = User::where('role', 'admin')->count('id');

        $count_product = Product::count('id');

        $count_category = Category::count('id');

        $count_product_category = Product::join('categories', 'categories.id', '=', 'products.category_id')
            ->select('categories.id', 'categories.name', DB::raw('count(products.id) as product_count'))
            ->groupBy('categories.id', 'categories.name')
            ->get();

        $minProductPrice = Product::join('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.*', 'categories.name as cate_name')
            ->orderBy('products.price', 'asc')
            ->first();

        $maxProductPrice = Product::join('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.*', 'categories.name as cate_name')
            ->orderBy('products.price', 'desc')
            ->first();

        return view('admin.index',compact('count_users', "count_managers", "count_product", "count_category", "count_product_category", "minProductPrice", "maxProductPrice"));
    }
    public function change($id){
        $user = User::where('id', $id)->first();
        if ($user->active == 1){
            $user->update([
                'active' => 0
            ]);
        }else{
            $user->update([
                'active' => 1
            ]);
        }
        return back();
    }
}
