@extends('admin.layout.master')

@section('title')
    Edit Product
@endsection

@section('style-libs')
@endsection

@section('content')
    <form class="form-group" action="{{ route('admin.products.update', $model->id) }}" method="POST"
        enctype="multipart/form-data" novalidate>
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Edit Product</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Information</h4>
                        <div class="flex-shrink-0">
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="live-preview">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div>
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ $model->name ?? old('name') }}">
                                        @error('name')
                                            <p class="mt-2 text-danger">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                    <div class="mt-3">
                                        <label for="category_id" class="form-label">Select Category</label>
                                        <select name="category_id" class="form-select">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ $category->id == $model->category_id ? 'selected' : '' }}>
                                                    {{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <p class="mt-2 text-danger">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                    <div class="mt-3">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" class="form-control" id="image" name="image"
                                            value="{{ old('image') }}">
                                        @error('image')
                                            <p class="mt-2 text-danger">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                    <img src="{{ \Storage::url($model->image) }}" alt="" width="50px">
                                </div>

                                <div class="col-md-6">
                                    <div>
                                        <label for="price" class="form-label">Price</label>
                                        <input type="text" class="form-control" id="price" name="price"
                                        value="{{ $model->price ?? old('name') }}">
                                        @error('price')
                                            <p class="mt-2 text-danger">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                    <div class="mt-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" id="description" rows="5" name="description">
                                            {{ $model->description ?? old('description') }}
                                        </textarea>
                                        @error('description')
                                            <p class="mt-2 text-danger">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>
@endsection

@section('script-libs')
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

    <!-- prismjs plugin -->
    <script src="assets/libs/prismjs/prism.js"></script>
@endsection

@section('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
