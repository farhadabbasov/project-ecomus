@extends('backend.app')
@section('content')
    <div class="container">
        <h1>{{isset($menu->id) ?   "Edit Menu" : "Create a New Menu"}}</h1>
        <form action="{{ isset($menu->id) ? route('admin.menus.update',['menu'=>$menu->id]) : route('admin.menus.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($menu->id))
                @method('PUT')
            @endif
            <div class="mb-3">
                <label for="name" class="form-label">Menu name</label>
                <input type="text" value="{{old('name', $menu->name ?? '')}}" name="name" id="name" class="form-control" placeholder="Enter the menu name" required><br>
                <label for="link" class="form-label">Link</label>
                <input type="text" value="{{old('link', $menu->link ?? '')}}" name="link" id="link" class="form-control" placeholder="Enter the menu link" required>
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                @error('link')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
