@extends('layouts.main')

@section('content')

<main class="blog">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">Blog</h1>
        <section class="featured-posts-section">
            <div class="row">
                @foreach($data['posts'] as $post)

                <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
                    <div class="blog-post-thumbnail-wrapper">
                        <img src="{{ $post->preview_image }}" alt="blog post">
                    </div>
                    <div class="blog-post-category d-flex justify-content-between">
                        <span>{{ $post->categories->title }}</span>
                        @guest()
                        <span>{{ $post->likesPosts->count() }}
                            <i class="ml-1 far fa-heart"></i></span>
                        @endguest
                        @auth()
                        <div class="d-flex">{{ $post->likesPosts->count() }}
                            <form action="{{ route('post.like.store', $post->id) }}" method="post">
                                @csrf
                                <button type="submit" class="bg-transparent border-0">
                                    <i class="ml-1 fa{{ auth()->user()->postLikes->contains($post->id) === true ? 's' : 'r' }} fa-heart"></i>
                                </button>
                            </form>
                        </div>
                        @endauth
                    </div>
                    <a href="{{ route('post.show', $post->id) }}" class="blog-post-permalink">
                        <h6 class="blog-post-title">{{ $post->title }}</h6>
                    </a>
                </div>
                <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
                    <div class="blog-post-thumbnail-wrapper">
                        <img src="{{ $post->preview_image }}" alt="blog post">
                    </div>
                    <p class="blog-post-category">{{ $post->categories->title }}</p>
                    <a href="#!" class="blog-post-permalink">
                        <h6 class="blog-post-title">{{ $post->title }}</h6>
                    </a>
                </div>
                @endforeach
            </div>

            <div class="row justify-content-center mb-5">
                {{ $data['posts']->links() }}
            </div>

            <main class="blog">
                <div class="container">
                    <h1 class="edica-page-title" data-aos="fade-up">Blog</h1>
                    <section class="featured-posts-section">
                        <div class="row">
                            @foreach($data['posts'] as $post)
                            <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="{{ $post->preview_image }}" alt="blog post">
                                </div>
                                <p class="blog-post-category">{{ $post->categories->title }}</p>
                                <a href="#!" class="blog-post-permalink">
                                    <h6 class="blog-post-title">{{ $post->title }}</h6>
                                </a>
                            </div>
                            @endforeach
                        </div>

                        <div class="row justify-content-center mb-5">
                            {{ $data['posts']->links() }}
                        </div>
                    </section>
                    <div class="row">
                        <div class="col-md-8">
                            <section>
                                <div class="row blog-post-row">

                                    @foreach($data['postRandom'] as $post)
                                    <div class="col-md-6 blog-post" data-aos="fade-up">
                                        <div class="blog-post-thumbnail-wrapper">
                                            <img src="{{ $post->preview_image }}" alt="blog post">
                                        </div>
                                        <p class="blog-post-category">{{ $post->categories->title }}</p>
                                        <a href="{{ route('post.show', $post->id) }}" class="blog-post-permalink">
                                            <h6 class="blog-post-title">{{ $post->title }}</h6>
                                        </a>
                                    </div>
                                    @endforeach

                                    <div class="col-md-6 blog-post" data-aos="fade-up">
                                        <div class="blog-post-thumbnail-wrapper">
                                            <img src="{{ @asset('assets/images/blog_4.jpg') }}" alt="blog post">
                                        </div>
                                        <p class="blog-post-category">Blog post</p>
                                        <a href="#!" class="blog-post-permalink">
                                            <h6 class="blog-post-title">Front becomes an official Instagram Marketing Partner</h6>
                                        </a>
                                    </div>

                                </div>
                                @endauth
                        </div>
                        <a href="{{ route('post.show', $post->id) }}" class="blog-post-permalink">
                            <h6 class="blog-post-title">{{ $post->title }}</h6>
                        </a>
                    </div>
                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
                        <div class="blog-post-thumbnail-wrapper">
                            <img src="{{ $post->preview_image }}" alt="blog post">
                        </div>
                        <p class="blog-post-category">{{ $post->categories->title }}</p>
                        <a href="#!" class="blog-post-permalink">
                            <h6 class="blog-post-title">{{ $post->title }}</h6>
                        </a>
                    </div>
                    @endforeach
                </div>

                <div class="row justify-content-center mb-5">
                    {{ $data['posts']->links() }}
                </div>

        </section>
        <div class="row">
            <div class="col-md-8">
                <section>
                    <div class="row blog-post-row">
                        @foreach($data['postRandom'] as $post)
                        <div class="col-md-6 blog-post" data-aos="fade-up">
                            <div class="blog-post-thumbnail-wrapper">
                                <img src="{{ $post->preview_image }}" alt="blog post">
                            </div>
                            <p class="blog-post-category">{{ $post->categories->title }}</p>
                            <a href="{{ route('post.show', $post->id) }}" class="blog-post-permalink">
                                <h6 class="blog-post-title">{{ $post->title }}</h6>
                            </a>
                        </div>
                        @endforeach

                        <div class="col-md-6 blog-post" data-aos="fade-up">
                            <div class="blog-post-thumbnail-wrapper">
                                <img src="{{ @asset('assets/images/blog_4.jpg') }}" alt="blog post">
                            </div>
                            <p class="blog-post-category">Blog post</p>
                            <a href="#!" class="blog-post-permalink">
                                <h6 class="blog-post-title">Front becomes an official Instagram Marketing Partner</h6>
                            </a>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-4 sidebar" data-aos="fade-left">
                <div class="widget widget-post-list">
                    <h5 class="widget-title">Лучшие посты</h5>
                    <ul class="post-list">
                        @foreach($data['likesPosts'] as $post)
                        <li class="post">
                            <a href="{{ route('post.show', $post->id) }}" class="post-permalink media">
                                <img src="{{ $post->preview_image }}" alt="blog post">
                                <div class="media-body">
                                    <h6 class="post-title">{{ $post->title }}</h6>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>

                    <div class="col-md-4 sidebar" data-aos="fade-left">
                        <div class="widget widget-post-list">
                            <h5 class="widget-title">Лучшие посты</h5>
                            <ul class="post-list">
                                @foreach($data['likesPosts'] as $post)
                                <li class="post">
                                    <a href="{{ route('post.show', $post->id) }}" class="post-permalink media">
                                        <img src="{{ $post->preview_image }}" alt="blog post">
                                        <div class="media-body">
                                            <h6 class="post-title">{{ $post->title }}</h6>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                    </div>
                    </section>
                </div>
                <div class="col-md-4 sidebar" data-aos="fade-left">
                    <div class="widget widget-post-list">
                        <h5 class="widget-title">Лучшие посты</h5>
                        <ul class="post-list">
                            @foreach($data['likesPosts'] as $post)
                            <li class="post">
                                <a href="{{ route('post.show', $post->id) }}" class="post-permalink media">
                                    <img src="{{ $post->preview_image }}" alt="blog post">
                                    <div class="media-body">
                                        <h6 class="post-title">{{ $post->title }}</h6>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>
        </div>

</main>

@endsection