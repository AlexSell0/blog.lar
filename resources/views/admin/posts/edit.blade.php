@extends('admin.layouts.admin')
@section('header')
    Редактировать пость {{ $posts->title }}
@endsection

@section('content')
    <div class="col-12">
        <form action="{{ route('admin.posts.update', $posts) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="form-group">
                <label>Заголовок</label>
                <input type="text" class="form-control" name="title" placeholder="Введите заголовок"
                       value="{{ $posts->title }}">
                @error('title')
                <div class="text-danger">Поле не должно быть пустым</div>
                @enderror
            </div>
            <div class="form-group">
                @if($posts->preview_image)
                    <div>
                        <div><b>Превью</b></div>
                        <img class="w-25" src="{{ url($posts->preview_image) }}">
                    </div>
                @endif
                <label>{{ isset($posts->preview_image) ? 'Изменить' : 'Добавить'}} превью</label>
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
                <div class="text-danger">Поле не должно быть пустым</div>
                @enderror
            </div>
            <div class="form-group">

                @if($posts->preview_image)
                    <div>
                        <div><b>Главное изображение</b></div>
                        <img class="w-25" src="{{ url($posts->main_image) }}">
                    </div>
                @endif
                <label>{{ isset($posts->preview_image) ? 'Изменить' : 'Добавить'}} главное изображение</label>
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
                <div class="text-danger">Поле не должно быть пустым</div>
                @enderror
            </div>
            @if(count($categories))
                <div class="form-group">
                    <label>Категории</label>
                    <select class="form-control" name="category_id">
                        @foreach($categories as $category)
                            <option
                                {{ $category->id == $posts->category_id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->title }}</option>
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
                                    {{ is_array($posts->tags->pluck('id')->toArray()) && in_array($tag->id, $posts->tags->pluck('id')->toArray()) ? 'selected' : '' }}
                                value="{{ $tag->id }}">{{ $tag->title }}</option>
                        @endforeach
                    </select>
                </div>
            @endif
            <div class="form-group">
                <label>Контент</label>
                <textarea id="summernote" rows="10" name="content">{{ $posts->content }}</textarea>
                @error('content')
                <div class="text-danger">Поле не должно быть пустым</div>
                @enderror
            </div>

            <div class="form-group">
                <input type="submit" value="Обновить" class="btn btn-primary">
            </div>
        </form>
    </div>

@endsection
