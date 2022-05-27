@extends('admin.layouts.admin')
@section('header')Пользователи
@endsection

@section('content')
    <div class="col-4">
        <form action="{{ route('admin.user.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Имя</label>
                <input type="text" class="form-control" name="name" placeholder="Имя пользователя" value="{{ old('name') }}">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>E-mail</label>
                <input type="text" class="form-control" name="email" placeholder="e-mail пользователя" value="{{ old('email') }}">
                @error('email')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Пароль</label>
                <input type="text" class="form-control" name="password" placeholder="пароль пользователя">
                @error('password')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Роли</label>
                <select class="form-control" name="role" data-placeholder="Выберите роль">
                    @foreach($roles as $id => $role)
                        <option
                            {{ old('role') !== null && old('role') == $id ? 'selected' : '' }}
                            value="{{ $id }}">{{ $role }}</option>
                    @endforeach
                </select>
                @error('role')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <input type="submit" value="Добавить пользователя" class="btn btn-primary">
        </form>
    </div>
@endsection

