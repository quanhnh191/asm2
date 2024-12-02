<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ManagerCreateRequest;
use App\Http\Requests\ManagerUpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Request;

class ManagerController extends Controller
{
    const PATH_VIEW = "admin.manager.";

    public function index()
    {
        $data = User::where('role', 'admin')->latest("id")->paginate(6);
        return view(self::PATH_VIEW . __FUNCTION__, compact("data"));
    }

    public function create()
    {
        return view(self::PATH_VIEW . __FUNCTION__);
    }

    public function store(ManagerCreateRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role
        ]);

        return redirect()->route('admin.managers.index')->with("success", "Create manager successfully");
    }

    public function changeUser($id)
    {
        $user = User::where("id", $id)->first();
        $user->update(
            ["role" => "member"]
        );

        return redirect()->route("admin.users.index")->with("success", "Change user successfully");
    }

    public function edit(string $id)
    {
        $model = User::where("id", $id)->first();
        return view(self::PATH_VIEW . __FUNCTION__, compact("model"));
    }

    public function update(ManagerUpdateRequest $request, string $id)
    {
        $user = User::where('id', $id)->first();

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role
        ]);

        return redirect()->route('admin.managers.index')->with("success", "Edit manager successfully");
    }

    public function destroy(string $id)
    {
        $user = User::where("id", $id)->firstOrFail();
        if ($user->role == 'admin') {
            return redirect()->back()->with("error", "Không thể xoá tài khoản ADMIN");
        }
        return redirect()->route("admin.managers.index")->with("success", "Delete manager successfully");
    }

    public function changeActive(Request $request, $id)
    {
        $user = User::where("id", $id)->first();

        if ($user->role == 'admin') {
            return redirect()->back()->with("error", "Không thể active tài khoản ADMIN");
        }
    }
}
