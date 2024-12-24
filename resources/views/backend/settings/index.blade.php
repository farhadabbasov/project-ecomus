@extends('backend.app')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Settingslər</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @include('backend.includes.alert')
                            <a href="{{route('admin.settings.create')}}">Yeni</a>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Settingslərin adı</th>
                                    <th>ƏMƏLİYYATLAR</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($settings as $setting)
                                    <tr>

                                        <td>{{(($settings->currentPage()-1)*10)+$loop->iteration}}</td>
                                        <td><a href="{{route('admin.settings.update',['setting'=>$setting->id])}}" class="">{{$setting->key}}</a></td>
                                        <td>
                                            <a href="{{ route('admin.settings.edit', ['setting' => $setting->id]) }}" class="btn btn-primary btn-sm">Editlə</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                {!! $settings->links('pagination::bootstrap-4') !!}
                            </ul>
                        </div>
                    </div>
                    <!-- /.card -->

                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection
