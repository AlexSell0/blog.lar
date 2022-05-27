@extends('admin.layouts.admin')
@section('header')
    Посты
@endsection

@section('content')
    <div class="col-12">
        <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Заголовок</label>
                <input type="text" class="form-control" name="title" placeholder="Введите заголовок"
                       value="{{ old('title') }}">
                @error('title')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Добавить превью</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="preview_image" name="preview_image">
                        <label class="custom-file-label" for="preview_image">Выберите изображение</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Загрузка</span>
                    </div>
                </div>
                @error('preview_image')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Добавить главное изображение</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="main_image" name="main_image">
                        <label class="custom-file-label" for="main_image">Выберите изображение</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Загрузка</span>
                    </div>
                </div>
                @error('main_image')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            @if(count($categories))
                <div class="form-group">
                    <label>Категории</label>
                    <select class="form-control" name="category_id">
                        @foreach($categories as $category)
                            <option
                                {{ $category->id == old('category_id') ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>
            @endif

            @if(count($tags))
                <div class="form-group">
                    <label>Теги</label>
                    <select class="select2" name="tags_ids[]" multiple="multiple" data-placeholder="Выберите теги">
                        @foreach($tags as $tag)
                            <option
                                {{ is_array(old('tags_ids')) && in_array($tag->id, old('tags_ids')) ? 'selected' : '' }}
                                value="{{ $tag->id }}">{{ $tag->title }}</option>
                        @endforeach
                    </select>
                </div>
            @endif
            <div class="form-group">
                <label>Контент</label>
                <textarea id="summernote" rows="10" name="content">{{ old('content') }}</textarea>
                @error('content')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <input type="submit" value="Опубликовать" class="btn btn-primary">
            </div>
        </form>
    </div>

@endsection
