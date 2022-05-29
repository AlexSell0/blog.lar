@extends('profile.layouts.profile')
@section('header')
    Понравившиесяя посты
@endsection

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Главная</a></li>
    <li class="breadcrumb-item"><a href="{{ route('profile.main.index') }}">Личный кабинет</a></li>
    <li class="breadcrumb-item active">Понравившиеся посты</li>
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
                    <th>Понравившиесяя посты</th>
                    <th colspan="3">Действие</th>
                </tr>
                </thead>
                <tbody>
                    @if(count($data)>0)
                        @foreach($data as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>
                                    <form method="POST" action="{{ route('profile.liked.destroy', $post->id) }}">
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
