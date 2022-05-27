@extends('admin.layouts.admin')
@section('header')Редактировать пользователя {{ $user->name }}
@endsection

@section('content')
    <div class="col-4">
        <form action="{{ route('admin.user.update', $user->id) }}" method="POST">
            @csrf
            @method('patch')
            <div class="form-group">
                <label>Имя</label>
                <input type="text" class="form-control" name="name" placeholder="Имя пользователя" value="{{ $user->name }}">
                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>E-mail</label>
                <input type="text" class="form-control" name="email" placeholder="e-mail пользователя" value="{{ $user->email }}">
                @error('email')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Роли</label>
                <select class="form-control" name="role" data-placeholder="Выберите роль">
                    @foreach($roles as $id => $role)
                        <option
                            {{ $user->role == $id ? 'selected' : '' }}
                            value="{{ $id }}">{{ $role }}</option>
                    @endforeach
                </select>
                @error('role')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <input type="hidden" name="user_id" value="{{ $user->id }}">
            </div>
            <input type="submit" value="Редактировать пользователя" class="btn btn-primary">
        </form>
    </div>
@endsection

