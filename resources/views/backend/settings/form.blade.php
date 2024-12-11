@extends('backend.app')
@section('content')
    <div class="container">
        <h1>Edit Settings</h1>
        <form action="{{ route('admin.settings.update', $setting->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="key" class="form-label">Key</label>
                <input type="text" name="key" id="key" class="form-control" value="{{ old('key', $setting->key) }}" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Value</label>
                <textarea name="value" id="value" rows="5" class="form-control" required>{{ old('value', $setting->value) }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
