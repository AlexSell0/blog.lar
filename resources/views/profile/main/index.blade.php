@extends('profile.layouts.profile')

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Главная</a></li>
    <li class="breadcrumb-item active">Админка</li>
@endsection

@section('content')

    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $data['likePostsCount'] }}</h3>

                <p>Понравившиеся посты</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
            <a href="{{ route('profile.liked.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $data['PostComment'] }}</h3>

                <p>Комментарии</p>
            </div>
            <div class="icon">
                <i class="far fa-clipboard"></i>
            </div>
            <a href="{{ route('profile.comment.index') }}" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
@endsection

