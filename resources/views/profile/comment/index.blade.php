@extends('profile.layouts.profile')
@section('header')
    Комментарии
@endsection

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Главная</a></li>
    <li class="breadcrumb-item"><a href="{{ route('profile.main.index') }}">Личный кабинет</a></li>
    <li class="breadcrumb-item active">Комментарии</li>
@endsection

@section('content')
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
                    <th>Комментарий к посту</th>
                    <th>Комментарий</th>
                    <th colspan="3">Действие</th>
                </tr>
                </thead>
                <tbody>
                @if(count($data['comments'])>0)
                    @for($i=0; $i<count($data['comments']); $i++)
                        <tr>
                            <td>{{ $data['comments'][$i]->id }}</td>
                            <td>{{ $data['post'][$i]->title }}</td>
                            <td>{{ $data['comments'][$i]->message }}</td>
                            <td><a class="text-success mr-3" href="{{ route('profile.comment.edit', $data['comments'][$i]->id) }}"><i class="fas fa-edit"></i></a></td>
                            <td>
                                <form method="POST" action="{{ route('profile.comment.destroy', $data['comments'][$i]->id) }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="text-danger border-0 bg-transparent"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endfor
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
