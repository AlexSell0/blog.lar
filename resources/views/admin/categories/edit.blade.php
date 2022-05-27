@extends('admin.layouts.admin')
@section('header')Категория {{ $categories->title }}
@endsection

@section('content')
    <div class="col-4">
        <form action="{{ route('admin.categories.update', $categories->id) }}" method="POST">
            @csrf
            @method('patch')
            <div class="form-group">
                <label>Редактировать категорию</label>
                <input type="text" class="form-control" name="title" value="{{ $categories->title }}" placeholder="Редактировать категорию">
                @error('title')
                    <div class="text-danger">Поле не должно быть пустым</div>
                @enderror
            </div>
            <input type="submit" value="Обновить" class="btn btn-primary">
        </form>
    </div>
@endsection

