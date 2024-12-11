@extends('backend.app')
@section('content')
    <div class="container">
        <h1>{{ $user->name }}</h1>
        <p>{{ $user->email }}</p>
        <p>{{ $user->password }}</p>
        <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Back to Users</a>
    </div>
@endsection
