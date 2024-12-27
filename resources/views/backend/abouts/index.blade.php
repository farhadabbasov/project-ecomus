@extends('backend.app')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">About</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @include('backend.includes.alert')
                            <a href="{{route('admin.abouts.create')}}">Yeni</a>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Başlıqların adı</th>
                                    <th>ƏMƏLİYYATLAR</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($abouts as $about)

                                    <tr>

                                        <td>{{(($abouts->currentPage()-1)*10)+$loop->iteration}}</td>
                                        <td><a href="{{route('admin.abouts.update',['about'=>$about->id])}}" class="">{{$about->translation->title}}</a></td>
                                        <td>

                                            <a href="{{route('admin.abouts.edit',['about'=>$about->id,'language'=>'az'])}}" class="btn btn-primary btn-sm">AZ</a>
                                            <a href="{{route('admin.abouts.edit',['about'=>$about->id,'language'=>'en'])}}" class="btn btn-primary btn-sm">EN</a>

                                            {{--                                            <a href="{{ route('admin.abouts.edit', ['about' => $about->id]) }}" class="btn btn-primary btn-sm">Editlə</a>--}}

                                            <form action="{{ route('admin.abouts.destroy', ['about' => $about->id]) }}" method="POST" style="display: inline;">
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
                                {!! $abouts->links('pagination::bootstrap-4') !!}
                            </ul>
                        </div>
                    </div>
                    <!-- /.card -->

                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection
