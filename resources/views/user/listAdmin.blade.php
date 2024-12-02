<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Danh sách tài khoản</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    @if(session('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif

    <h1 class="text-center" style="color: red">Danh sách tài khoản</h1>
        <a href="{{route('home')}}" class="btn btn-info float-end">Thông tin tài khoản</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Fullname</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Avatar</th>
            <th scope="col">Role</th>
            <th scope="col">Active</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->fullname}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <img src="{{ asset('storage/' . $user->avatar) }}" width="70" alt="">
                </td>
                <td>{{$user->role}}</td>
                <td>
                    @if($user->active == 1)
                        Hoạt động
                    @else
                        Không hoạt động
                    @endif
                </td>
                <td>
                    @if($user->active == 1)
                        <a href="{{ route('admin.change', $user->id) }}" class="btn btn-danger">Bỏ kích hoạt</a>
                    @else
                        <a href="{{ route('admin.change', $user->id) }}" class="btn btn-success">Kích hoạt</a>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
