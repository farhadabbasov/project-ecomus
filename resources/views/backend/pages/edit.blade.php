@extends('backend.app')
@section('content')
    <div class="container">
        <h1>Edit Page</h1>
        <form action="{{ route('admin.pages.update', $page->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $page->title) }}" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Description</label>
                <textarea name="description" id="description" rows="5" class="form-control" required>{{ old('description', $page->description) }}</textarea>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Categories</label>
                <select  name="category_id" id="title" class="form-control" required>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                @error('category_id')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" id="image" class="form-control">
                @if($page->image)
                    <img src="{{ $page->image }}" alt="Current Image" class="mt-3" width="150">
                    <p>Current Image</p>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
