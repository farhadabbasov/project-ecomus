@extends('backend.app')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Başlıqlar</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @include('backend.includes.alert')
                            <a href="{{route('admin.headers.create')}}">Yeni</a>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Başlıqların adı</th>
                                    <th>ƏMƏLİYYATLAR</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($headers as $header)
                                    <tr>

                                        <td>{{(($headers->currentPage()-1)*10)+$loop->iteration}}</td>
                                        <td><a href="{{route('admin.headers.update',['header'=>$header->id])}}" class="">{{$header->translation->title}}</a></td>
                                        <td>

                                            <a href="{{route('admin.headers.edit',['header'=>$header->id,'language'=>'az'])}}" class="btn btn-primary btn-sm">AZ</a>
                                            <a href="{{route('admin.headers.edit',['header'=>$header->id,'language'=>'en'])}}" class="btn btn-primary btn-sm">EN</a>

{{--                                            <a href="{{ route('admin.headers.edit', ['header' => $header->id]) }}" class="btn btn-primary btn-sm">Editlə</a>--}}

                                            <form action="{{ route('admin.headers.destroy', ['header' => $header->id]) }}" method="POST" style="display: inline;">
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
                                {!! $headers->links('pagination::bootstrap-4') !!}
                            </ul>
                        </div>
                    </div>
                    <!-- /.card -->

                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection
