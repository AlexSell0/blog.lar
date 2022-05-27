@extends('admin.layouts.admin')
@section('header')Теги
@endsection

@section('content')
    <div class="col-4">
        <form action="{{ route('admin.tags.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Добавить тег</label>
                <input type="text" class="form-control" name="title" placeholder="Добавить тег">
                @error('title')
                    <div class="text-danger">Поле не должно быть пустым</div>
                @enderror
            </div>
            <input type="submit" value="Добавить" class="btn btn-primary">
        </form>
    </div>
@endsection

