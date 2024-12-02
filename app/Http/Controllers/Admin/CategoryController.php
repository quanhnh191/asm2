<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryCreateRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    const PATH_VIEW = "admin.category.";

    public function index()
    {
        $data = Category::latest('id')->get();
        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
    }

    public function create()
    {
        return view(self::PATH_VIEW . __FUNCTION__);
    }

    public function store(CategoryCreateRequest $request)
    {
        $data = $request->all();

        Category::create($data);

        return redirect()->route('admin.categories.index')->with("success", "Thêm thành công thư mục!");

    }

    public function edit(string $id)
    {
        $model = Category::where('id', $id)->first();
        return view(self::PATH_VIEW . __FUNCTION__, compact('model'));
    }

    public function update(CategoryUpdateRequest $request, string $id)
    {
        $data = $request->all();
        $category = Category::where('id', $id)->first();

        $category->update($data);

        return redirect()->route('admin.categories.index')->with("success", "Sua thành công thư mục!");
    }

    public function destroy(string $id)
    {
        $category = Category::where('id', $id)->first();

        $category->delete();

        return redirect()->route('admin.categories.index')->with("success", "Xoá thành công thư mục!");
    }
}
