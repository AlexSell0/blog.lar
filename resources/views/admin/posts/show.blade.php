@extends('admin.layouts.admin')
@section('header')
    Пост {{ $posts->title }}
    <a class="text-success ml-3" href="{{ route('admin.posts.edit', $posts->id) }}"><i class="fas fa-edit"></i></a>
    <form class="ml-3" method="POST" action="{{ route('admin.posts.destroy', $posts->id) }}">
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
                <tr class="">
                    <td class="col-3"><b>id</b></td>
                    <td>{{ $posts->id }}</td>
                </tr>
                <tr>
                    <td class="col-3"><b>Заголовок</b></td>
                    <td>{{ $posts->title }}</td>
                </tr>
                <tr>
                    <td class="col-3"><b>Пост</b></td>
                    <td>{!! $posts->content !!}</td>
                </tr>
                <tr>
                    <td class="col-3"><b>Категория</b></td>
                    <td>{{ $categories }}</td>
                </tr>
                <tr>
                    <td class="col-3"><b>Теги</b></td>
                    <td>
                        @foreach($tags as $tag)
                            @foreach($posts->tags as $postTag)
                                @if($tag->id == $postTag->id)
                            <span class="btn btn-primary">{{ $tag->title }}</span>
                                @endif
                            @endforeach
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td class="col-3"><b>Превью</b></td>
                    <td>
                        @if(isset($posts->preview_image))
                            <img class="w-50" src="{{ url($posts->preview_image) }}">
                        @endif
                    </td>
                </tr>
                <tr>
                    <td class="col-3"><b>Главное изображение</b></td>
                    <td>
                        @if(isset($posts->main_image))
                            <img class="w-50" src="{{ url($posts->main_image) }}">
                        @endif
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="col"><a href="{{ route('admin.posts.index') }}" class="btn btn-primary">Назад</a></div>
@endsection
