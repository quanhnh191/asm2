<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container m-4">
    <h1>Thông tin người dùng </h1>

    @auth()
        <div>
            Xin chào: {{ \Illuminate\Support\Facades\Auth::user()->fullname }}
            <br> <br>
            <a href="{{route('logout')}}" class="btn btn-success ">Logout</a>
            <a href="{{route('admin.index')}}" class="btn btn-warning">Admin</a>
        </div>
    @endauth
    <br>
    <form action="{{ route('user.update', $user) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
{{--        <div class="mb-3">--}}
{{--            <label for="" class="form-label">Fullname</label>--}}
{{--            <input type="text" class="form-control" name="fullname" value="{{$user->fullname}}">--}}
{{--            @error('fullname')--}}
{{--            <span class="text-danger">{{$message}}</span>--}}
{{--            @enderror--}}
{{--        </div>--}}

        <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{$user->name}}">
            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{$user->email}}">
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Avatar</label>
            <input class="form-control" type="file" name="avatar" id="fileImage">
            <br>
            <img id="img" src="{{ \Storage::url($user->avatar)  }}" width="70">
            @error('avatar')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('change',$user) }}" class="btn btn-danger" >Change Password</a>
        </div>

    </form>
</div>
<script>
    var fileImage=document.querySelector("#fileImage");
    var img=document.querySelector("#img");
    //Thay đổi ảnh
    fileImage.addEventListener('change', function(e){
        e.preventDefault();
        img.src=URL.createObjectURL(this.files[0]);
    });
</script>
</body>
</html>


