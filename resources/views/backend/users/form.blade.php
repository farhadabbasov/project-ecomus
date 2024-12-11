@extends('backend.app')
@section('content')
    <div class="container">
        <h1>{{isset($user->id) ?   "Edit User" : "Create a New User"}}</h1>
        <form action="{{ isset($user->id) ? route('admin.users.update',['user'=>$user->id]) : route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($user->id))
                @method('PUT')
            @endif
            <div class="mb-3">
                <label for="name" class="form-label">User name</label>
                <input type="text" value="{{old('name', $user->name ?? '')}}" name="name" id="name" class="form-control" placeholder="Enter the user name" required>
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror <br>
                <label for="email" class="form-label">Email</label>
                <input type="email" value="{{old('email', $email->email ?? '')}}" name="email" id="email" class="form-control" placeholder="Enter the email" required>
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror <br>
                <label for="password" class="form-label">Password</label>
                <input type="password" value="{{old('password', $user->password ?? '')}}" name="password" id="password" class="form-control" placeholder="Enter the password" required>
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @enderror <br>
                <label for="password_confirmation" class="form-label">Password Confirmation</label>
                <input type="password" value="{{old('password', $user->password ?? '')}}" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirm the password" required>
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
