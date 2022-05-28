@extends('admin.layouts.admin')

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Главная</a></li>
    <li class="breadcrumb-item active">Админка</li>
@endsection

@section('content')

    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $data['usersCount'] }}</h3>

                <p>Пользователи</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
            <a href="{{ route('admin.user.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $data['postsCount'] }}</h3>

                <p>Посты</p>
            </div>
            <div class="icon">
                <i class="far fa-clipboard"></i>
            </div>
            <a href="{{ route('admin.posts.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{ $data['categoriesCount'] }}</h3>

                <p>Категории</p>
            </div>
            <div class="icon">
                <i class="fab fa-buffer"></i>
            </div>
            <a href="{{ route('admin.categories.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>{{ $data['tagsCount'] }}</h3>

                <p>Теги</p>
            </div>
            <div class="icon">
                <i class="fas fa-tags"></i>
            </div>
            <a href="{{ route('admin.tags.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
@endsection

