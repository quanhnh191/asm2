<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
<div class="container w-50">
    <h1 class="text-center">Login</h1>

    @if(session('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>

    @endif

    @if(session('errorLogin'))
        <div class="alert alert-danger">
            {{session('errorLogin')}}
        </div>

    @endif

    <form action="{{ route('postLogin') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input type="email" name="email" class="form-control">
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Password</label>
            <input type="password" name="password" class="form-control">
            @error('password')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Login</button>
            <a href="{{ route('postRegister') }}" class="btn btn-danger">Register</a>
        </div>
    </form>
</div>
</body>
</html>



