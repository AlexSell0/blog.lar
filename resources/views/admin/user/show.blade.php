@extends('admin.layouts.admin')
@section('header')
    Пользователь {{ $user->name }}
    <a class="text-success ml-3" href="{{ route('admin.user.edit', $user->id) }}"><i class="fas fa-edit"></i></a>
    <form class="ml-3" method="POST" action="{{ route('admin.user.destroy', $user->id) }}">
        @csrf
        @method('delete')
        <button type="submit" class="text-danger border-0 bg-transparent"><i class="fas fa-trash-alt"></i></button>
    </form>
@endsection

@section('content')
    <div class="card col-12">
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <td><b>id</b></td>
                    <td>{{ $user->id }}</td>
                </tr>
                <tr>
                    <td><b>Пользователь</b></td>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <td><b>E-mail</b></td>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <td><b>Роль</b></td>
                    <td>{{ $roles[$user->role] }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="col"><a href="{{ route('admin.user.index') }}" class="btn btn-primary">Назад</a></div>
@endsection
