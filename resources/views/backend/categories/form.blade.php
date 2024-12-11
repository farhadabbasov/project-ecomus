@extends('backend.app')
@section('content')
    <div class="container">
        <h1>{{isset($category->id) ?   "Edit Category" : "Create a New Category"}}</h1>
        <form action="{{ isset($category->id) ? route('admin.categories.update',['category'=>$category->id]) : route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($category->id))
                @method('PUT')
            @endif
            <div class="mb-3">
                <label for="name" class="form-label">Category name</label>
                <input type="text" value="{{old('category', $category->name ?? '')}}" name="name" id="name" class="form-control" placeholder="Enter the category name" required>
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
