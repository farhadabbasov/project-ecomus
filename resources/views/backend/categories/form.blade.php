@extends('backend.app')
@section('content')
    <div class="container">
        <form action="{{route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <h1>Category name</h1><br>
                <input type="text" value="{{old('name', $category->translation->name ?? '')}}" name="name" id="name" class="form-control" placeholder="Enter the category name" required><br>
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
