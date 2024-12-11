@extends('backend.app')
@section('content')
    <div class="container">
        <h1>{{ $page->title }}</h1>
        <p>{{ $page->description }}</p>
        <img src="{{asset($page->image)}}"><br/><br/>
        @if(str_contains($previousUrl, 'categories'))
            <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Back to Categories</a>
        @else
            <a href="{{ route('admin.pages.index') }}" class="btn btn-secondary">Back to Pages</a>
        @endif
    </div>
@endsection
