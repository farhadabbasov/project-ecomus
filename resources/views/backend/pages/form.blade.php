@extends('backend.app')
@section('content')
    <div class="container">
        <h1>Create a New Page</h1>
        <form action="{{ route('admin.pages.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" value="{{old('title', $page->translation->title ?? '')}}" name="title" id="title" class="form-control" placeholder="Enter the page title" required>
                @error('title')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Description</label>
                <textarea name="description" id="content" rows="5" class="form-control" placeholder="Enter the page description" required>{{old('title', $header->translation->description ?? '')}}</textarea>
                @error('description')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Categories</label>
                <select name="category_id" id="title" class="form-control" required>
                    <option value="">----</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Add Image</label>
                <input type="file" name="image" id="image" class="form-control" accept="image/*">
                @error('image')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
