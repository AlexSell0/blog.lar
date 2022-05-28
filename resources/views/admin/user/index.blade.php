@extends('admin.layouts.admin')
@section('header')
    Пользователи
@endsection

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Главная</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.main') }}">Админка</a></li>
    <li class="breadcrumb-item active">Пользователи</li>
@endsection

@section('content')
    <div class="w-25 mb-3">
        <a href="{{ route('admin.user.create') }}">
            <button type="button" class="btn btn-block btn-primary">Добавить пользователя</button>
        </a>
    </div>

    <div class="card col-12">
        <div class="card-header">
            <h3 class="card-title">Список</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Пользователи</th>
                    <th colspan="3">Действие</th>
                </tr>
                </thead>
                <tbody>
                @if( count($data) > 0)
                    @foreach($data as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>
                                <a class="mr-3" href="{{ route('admin.user.show', $user->id) }}"><i class="fas fa-eye"></i></a>
                            <td>
                                <a class="text-success mr-3" href="{{ route('admin.user.edit', $user->id) }}"><i class="fas fa-edit"></i></a>
                            </td>
                            <td>
                                <form method="POST" action="{{ route('admin.user.destroy', $user->id) }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="text-danger border-0 bg-transparent"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
