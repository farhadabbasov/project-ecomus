@extends('backend.app')
@section('content')
    <div class="container">
        <h1>{{ $menu->name }}</h1>
        <p>{{ $menu->link }}</p>
        <a href="{{ route('admin.menus.index') }}" class="btn btn-secondary">Back to Menus</a>
    </div>
@endsection
