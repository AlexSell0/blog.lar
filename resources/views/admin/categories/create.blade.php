@extends('admin.layouts.admin')
@section('header')Категории
@endsection

@section('content')
    <div class="col-4">
        <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Добавить категорию</label>
                <input type="text" class="form-control" name="title" placeholder="Добавить категорию">
                @error('title')
                    <div class="text-danger">Поле не должно быть пустым</div>
                @enderror
            </div>
            <input type="submit" value="Добавить" class="btn btn-primary">
        </form>
    </div>
@endsection

