@extends('backend.app')
@section('content')
    <div class="container">
        <h1>{{ $about->translation->title }}</h1>
        <p>Language: {{ $about->translation->locale }}</p>
        <a href="{{ route('admin.abouts.index') }}" class="btn btn-secondary">Back to Abouts</a>
    </div>
@endsection
