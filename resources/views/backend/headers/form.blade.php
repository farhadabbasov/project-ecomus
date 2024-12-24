@extends('backend.app')
@section('content')
    <div class="container">
{{--        <h1>{{isset($header->translation->id) ?   "Edit Header" : "Create a New Header"}}</h1>--}}
        <form action="{{route('admin.headers.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
{{--            @if(isset($header->translation->id))--}}
{{--                @method('PUT')--}}
{{--            @endif--}}
            <div class="mb-3">
                <label for="title" class="form-label">Header title</label>
                <input type="text" value="{{old('title', $header->translation->title ?? '')}}" name="title" id="title" class="form-control" placeholder="Enter the header title" required><br>
                <label for="url" class="form-label">URL</label>
                <input type="text" value="{{old('url', $header->translation->url ?? '')}}" name="url" id="url" class="form-control" placeholder="Enter the header url" required>
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
