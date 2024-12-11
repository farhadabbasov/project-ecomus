@extends('backend.app')
@section('content')
    <div class="container">
        <h1>{{ $setting->key }}</h1>
        <p>{{ $setting->value }}</p>
        <a href="{{ route('admin.settings.index') }}" class="btn btn-secondary">Back to Settings</a>
    </div>
@endsection
