@extends('backend.app')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Səhifələr</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @include('backend.includes.alert')

                            <form action="" method="GET">
                            <div class="mb-3">
                                <label for="title" class="form-label">Kateqoriyalar</label>
                                <select  name="category_id" id="title" class="form-control" required>
                                    <option value="">----</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" {{$category->id==($page->category_id ?? null) ? 'selected' : ''}}>{{$category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                                <button type="submit" class="btn btn-danger btn-sm">Gonder</button>
                            </form>
                            <br>

                            <a href="{{route('admin.pages.create')}}">Yeni</a>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Səhifənin adı</th>
                                    <th>ƏMƏLİYYATLAR</th>
                                    <th>Səhifənin kateqoriyası</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($pages as $page)
                                <tr>

                                    <td>{{(($pages->currentPage()-1)*5)+$loop->iteration}}</td>
                                    <td><a href="{{route('admin.pages.update',['page'=>$page->id])}}" class="">{{$page->title}}</a></td>
                                    <td>
                                        <a href="{{route('admin.pages.edit',['page'=>$page->id,'language'=>'az'])}}" class="btn btn-primary btn-sm">AZ</a>
                                        <a href="{{route('admin.pages.edit',['page'=>$page->id,'language'=>'en'])}}" class="btn btn-primary btn-sm">EN</a>
                                        <a href="{{ route('admin.pages.edit', ['page' => $page->id]) }}" class="btn btn-primary btn-sm">Editlə</a>

                                        <form action="{{ route('admin.pages.destroy', ['page' => $page->id]) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Sil</button>
                                        </form>
                                    </td>
                                    <td>
                                        @if($page->category)
                                            <a href="{{ route('admin.categories.show', ['category' => $page->category->id]) }}">
                                                {{ $page->category->name }}
                                            </a>
                                        @else
                                            <span class="text-muted">No Category</span>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                {!! $pages->links('pagination::bootstrap-4') !!}
                            </ul>
                        </div>
                    </div>
                    <!-- /.card -->

                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection
