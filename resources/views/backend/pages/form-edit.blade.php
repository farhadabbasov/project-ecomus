@extends('backend.app')
@section('content')
    <div class="container">
        <h1>{{ isset($page) ? 'Edit Page' : 'Create a New Page' }}</h1>
        <form action="{{ isset($page) ? route('admin.pages.update', $page->id) : route('admin.pages.store') }}"
              method="POST"
              enctype="multipart/form-data">
            @csrf
            @if(isset($page))
                @method('PUT')
            @endif
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text"
                       name="title"
                       id="title"
                       class="form-control"
                       value="{{ isset($page) ? old('title', $page->title) : old('title') }}"
                       placeholder="Enter the page title"
                       required>
                @error('title')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description"
                          id="description"
                          rows="5"
                          class="form-control"
                          placeholder="Enter the page description"
                          required>{{ isset($page) ? old('description', $page->description) : old('description') }}</textarea>
                @error('description')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="category_id" class="form-label">Categories</label>
                <select name="category_id" id="category_id" class="form-control" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ isset($page) && $page->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" id="image" class="form-control" accept="image/*">
                @if(isset($page) && $page->image)
                    <img src="{{ $page->image }}" alt="Current Image" class="mt-3" width="150">
                    <p>Current Image</p>
                @endif
                @error('image')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">
                {{ isset($page) ? 'Update' : 'Save' }}
            </button>
        </form>
    </div>
@endsection
