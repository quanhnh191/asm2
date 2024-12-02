<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductCreateRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    const PATH_VIEW = "admin.product.";
    const PATH_UPLOAD = "products";

    public function index()
    {
        $data = Product::with('category')->get();
        return view(self::PATH_VIEW . __FUNCTION__, compact("data"));
    }

    public function create()
    {
        $categories = Category::all();
        return view(self::PATH_VIEW . __FUNCTION__, compact("categories"));
    }

    public function store(ProductCreateRequest $request)
    {
        $data = $request->except('image');

        if ($request->image) {
            $data["image"] = Storage::put(self::PATH_UPLOAD, $request->image);
        }

        $is_created = Product::create($data);

        if ($is_created) {
            return redirect()->route("admin.products.index")->with("success", "Thêm thành công sản phẩm!");
        } else {
            return redirect()->route("admin.products.index")->with("error", "Thêm không thành công!");
        }
    }

    public function edit(string $id)
    {
        $categories = Category::all();
        $model = Product::findOrFail($id);
        return view(self::PATH_VIEW . __FUNCTION__, compact("categories", "model"));
    }

    public function update(ProductUpdateRequest $request, string $id)
    {
        $data = $request->except('image');

        $product = Product::findOrFail($id);

        $currentImage = $product->image;

        if ($request->image) {
            $data["image"] = Storage::put(self::PATH_UPLOAD, $request->image);
        }

        $is_update = $product->update($data);

        if ($request->image && $currentImage && Storage::exists($product->image)) {
            Storage::delete($currentImage);
        }

        if ($is_update) {
            return redirect()->route("admin.products.index")->with("success", "Sua thành cong sản phẩm!");
        } else {
            return redirect()->route("admin.products.index")->with("error", "Sửa không thành công!");
        }
    }

    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        Storage::delete($product->image);

        $product->delete();
        return redirect()->route("admin.products.index")->with("success", "Xoá thành công sản phẩm!");

    }
}
