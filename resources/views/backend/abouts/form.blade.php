@extends('backend.app')
@section('content')
    <div class="container">
        <form action="{{route('admin.abouts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">About title</label>
                <input type="text" value="{{old('title', $about->translation->title ?? '')}}" name="title" id="title" class="form-control" placeholder="Enter the about title" required><br>
                <label for="url" class="form-label">URL</label>
                <input type="text" value="{{old('url', $about->translation->url ?? '')}}" name="url" id="url" class="form-control" placeholder="Enter the about url" required>
                @error('title')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                @error('url')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
