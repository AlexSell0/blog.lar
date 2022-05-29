@extends('admin.layouts.admin')
@section('header')
    Редактировать комментарий
@endsection

@section('content')
    <div class="col-12">
        <form action="{{ route('profile.comment.update', $comment) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="form-group">
                <label>Контент</label>
                <textarea id="summernote" rows="10" name="message">{{ $comment->message }}</textarea>
                @error('message')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <input type="submit" value="Обновить" class="btn btn-primary">
            </div>
        </form>
    </div>

@endsection
