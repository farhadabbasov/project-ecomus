@extends('backend.app')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Kateqoriyalar</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @include('backend.includes.alert')
                            <a href="{{route('admin.categories.create')}}">Yeni</a>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Kategoriyanın adı</th>
                                    <th>ƏMƏLİYYATLAR</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                    <tr>

                                        <td>{{(($categories->currentPage()-1)*10)+$loop->iteration}}</td>
                                        <td><a href="{{route('admin.categories.update',['category'=>$category->id])}}" class="">{{$category->name}}</a></td>
                                        <td>
                                            <a href="{{route('admin.categories.edit',['category'=>$category->id,'language'=>'az'])}}" class="btn btn-primary btn-sm">AZ</a>
                                            <a href="{{route('admin.categories.edit',['category'=>$category->id,'language'=>'en'])}}" class="btn btn-primary btn-sm">EN</a>

{{--                                            <a href="{{ route('admin.categories.edit', ['category' => $category->id]) }}" class="btn btn-primary btn-sm">Editlə</a>--}}

                                            <form action="{{ route('admin.categories.destroy', ['category' => $category->id]) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Sil</button>
                                            </form>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                {!! $categories->links('pagination::bootstrap-4') !!}
                            </ul>
                        </div>
                    </div>
                    <!-- /.card -->

                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection
