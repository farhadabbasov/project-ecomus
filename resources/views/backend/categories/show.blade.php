@extends('backend.app')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="mb-4">Category: {{ $category->name }}</h1>
                <h2 class="mb-3">Pages:</h2>
                @if($category->pages->isEmpty())
                    <div class="alert alert-warning">No pages found for this category.</div>
                @else
                    <table class="table table-bordered">
                        <thead class="table-dark">
                        <tr>
                            <th>id</th>
                            <th>SƏHİFƏNİN ADI</th>
                            <th>Description</th>
                            <th>ƏMƏLİYYATLAR</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($category->pages as $page)
                            <tr>
                                <td>{{ $page->id }}</td>
                                <td>{{ $page->title }}</td>
                                <td>{{ $page->description }}</td>
                                <td>
                                    <a href="{{ route('admin.pages.show', $page->id) }}" class="btn btn-primary btn-sm">Editlə</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
                <br>
                @if(str_contains($previousUrl, 'categories'))
                    <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Back to Categories</a>
                @else
                    <a href="{{ route('admin.pages.index') }}" class="btn btn-secondary">Back to Pages</a>
                @endif
            </div>
        </div>
    </div>

@endsection
