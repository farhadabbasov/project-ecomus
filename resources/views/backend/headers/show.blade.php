@extends('backend.app')
@section('content')
    <div class="container">
        <h1>{{ $header->translation->title }}</h1>
        <p>Language: {{ $header->translation->locale }}</p>
        <a href="{{ route('admin.headers.index') }}" class="btn btn-secondary">Back to Headers</a>
    </div>
@endsection
