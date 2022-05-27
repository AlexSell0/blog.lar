@extends('admin.layouts.admin')
@section('header')Тег {{ $tags->title }}
@endsection

@section('content')
    <div class="col-4">
        <form action="{{ route('admin.tags.update', $tags->id) }}" method="POST">
            @csrf
            @method('patch')
            <div class="form-group">
                <label>Редактировать тег</label>
                <input type="text" class="form-control" name="title" value="{{ $tags->title }}" placeholder="Редактировать тег">
                @error('title')
                    <div class="text-danger">Поле не должно быть пустым</div>
                @enderror
            </div>
            <input type="submit" value="Обновить" class="btn btn-primary">
        </form>
    </div>
@endsection

