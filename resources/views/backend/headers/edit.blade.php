@extends('backend.app')
@section('content')
    <div class="container">
        <h1>Edit Header</h1>
        <form action="{{ route('admin.headers.update', ['header'=>$header?->id,'language'=>$language]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $translatedObject?->title) }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
