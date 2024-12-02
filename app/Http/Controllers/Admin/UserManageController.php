<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserManageCreateRequest;
use App\Http\Requests\UserManageUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserManageController extends Controller
{
    const PATH_VIEW = "admin.user.";

    public function index()
    {
        $data = User::where('role', 'member')->latest("id")->paginate(6);
        return view(self::PATH_VIEW . __FUNCTION__, compact("data"));
    }

    public function create()
    {
        return view(self::PATH_VIEW . __FUNCTION__);
    }

    public function store(UserManageCreateRequest $request)
    {
//        dd($request->all());
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('admin.users.index')->with("success", "Create user successfully");
    }

    public function changeAdmin($id)
    {
        $user = User::where("id", $id)->first();
        $user->update(
            ["role" => "admin"]
        );

        return redirect()->route("admin.managers.index")->with("success", "Change user successfully");
    }

    public function edit(string $id)
    {
        $model = User::where("id", $id)->first();
        return view(self::PATH_VIEW . __FUNCTION__, compact("model"));
    }

    public function update(UserManageUpdateRequest $request, string $id)
    {
        $user = User::where('id', $id)->first();

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('admin.users.index')->with("success", "Edit user successfully");
    }

    public function destroy(string $id)
    {
        $user = User::where("id", $id)->firstOrFail();
        $user->delete();

        return redirect()->route("admin.users.index")->with("success", "Delete user successfully");
    }

    public function changeActive(Request $request, $id)
    {
        $user = User::where("id", $id)->first();

        if ($user->active_status == 0) {
            $user->active_status = 1;
            $user->save();
        } else {
            $user->active_status = 0;
            $user->save();
        }


        return redirect()->back()->with("success", "Update user successfully");
    }
}
