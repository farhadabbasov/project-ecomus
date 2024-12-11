@extends('backend.app')
@section('content')
    <div class="container">
        <h1>{{ $contact->name }}</h1>
        <p>{{ $contact->email }}</p>
        <p>{{ $contact->message }}</p>
        <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary">Back to Contacts</a>
    </div>
@endsection
