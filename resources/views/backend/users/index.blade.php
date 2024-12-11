@extends('backend.app')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">İstifadəçilər</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @include('backend.includes.alert')
                            <a href="{{route('admin.users.create')}}">Yeni</a>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>İstifadəçilərin adı</th>
                                    <th>ƏMƏLİYYATLAR</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>

                                        <td>{{(($users->currentPage()-1)*10)+$loop->iteration}}</td>
                                        <td><a href="{{route('admin.users.update',['user'=>$user->id])}}" class="">{{$user->name}}</a></td>
                                        <td>
                                            <a href="{{ route('admin.users.edit', ['user' => $user->id]) }}" class="btn btn-primary btn-sm">Editlə</a>

                                            <form action="{{ route('admin.users.destroy', ['user' => $user->id]) }}" method="POST" style="display: inline;">
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
                                {!! $users->links('pagination::bootstrap-4') !!}
                            </ul>
                        </div>
                    </div>
                    <!-- /.card -->

                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection
