@extends('layouts.main')

@section('content')
    <main class="blog">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Посты категории: {{ $data['category']->title }}</h1>
            {{-- Start section blog --}}
            <section class="featured-posts-section">
                <div class="row">
                    @foreach ($data['posts'] as $post)
                        <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
                            <div class="blog-post-thumbnail-wrapper">
                                <img src="{{ url($post->preview_image) }}" alt="blog post">
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
                                            <button type="submit" class="bg-transparent border-0" style="outline: 0;>
                                                <i
                                                    class="ml-1 fa{{ auth()->user()->postLikes->contains($post->id) === true? 's': 'r' }} fa-heart"></i>
                                            </button>
                                        </form>
                                    </div>
                                @endauth
                            </div>
                            <a href="{{ route('post.show', $post->id) }}" class="blog-post-permalink">
                                <h6 class="blog-post-title">{{ $post->title }}</h6>
                            </a>
                        </div>
                    @endforeach
                </div>

                <div class="row justify-content-center mb-5">
                    {{ $data['posts']->links() }}
                </div>

            </section>
            {{-- end section blog --}}

        </div>

    </main>
@endsection
