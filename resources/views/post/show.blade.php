@extends('layouts.main')

@section('content')

    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">{{ $post->title }}</h1>
            <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">{{ $post['createDate'] }}
                • {{ $post->categories->title }} • {{ $post->commentsPost->count() }} Комментария</p>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ url($post->main_image) }}" alt="featured image" class="w-100">
            </section>
            <section class="post-content">
                {!! $post->content !!}
            </section>
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <section class="related-posts">
                        @if($post->relatedPost->count() > 0)
                        <h2 class="section-title mb-4" data-aos="fade-up">Похожие посты</h2>
                        <div class="row">
                            @foreach($post->relatedPost as $relatedPost)
                                <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                                    <img src="{{ url($relatedPost->preview_image) }}" alt="related post"
                                         class="post-thumbnail">
                                    <p class="post-category">{{ $relatedPost->categories->title }}</p>
                                    <a href="{{ route('post.show', $relatedPost->id) }}"><h5
                                            class="post-title">{{ $relatedPost->title }}</h5></a>
                                </div>
                            @endforeach
                        </div>
                            @endif
                    </section>
                    <section class="comment-section">
                        <h2 class="section-title mb-5" data-aos="fade-up">Комментарии</h2>

                        @foreach($post->commentsPost as $comment)
                            <div class="card-comment p-3 mb-2 bg-light rounded">
                                <!-- User image -->
                                <div class="comment-text">
                                    <span class="username col-12 small">
                                        {{ $comment->userComment->name }}
                                    </span><!-- /.username -->
                                    <span class="text-muted float-right">{{ $comment->getDateAsCarbonAttribyte()->diffForHumans() }}</span>
                                    <div class="col-12 mt-2">
                                        {{ $comment->message }}
                                    </div>
                                </div>
                                <!-- /.comment-text -->
                            </div>
                        @endforeach

                        @auth()
                        <h2 class="section-title mb-5" data-aos="fade-up">Отправить комментарий</h2>
                        <form action="{{ route('post.comment.store', $post->id) }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="form-group col-12" data-aos="fade-up">
                                    <label for="comment" class="sr-only">Comment</label>
                                    <textarea name="message" id="comment" class="form-control"
                                              placeholder="Оставьте комментарий" rows="10"></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 mb-5" data-aos="fade-up">
                                    <input type="submit" value="Отправить сообщение" class="btn btn-warning">
                                </div>
                            </div>
                        </form>
                            @endauth
                    </section>
                </div>
            </div>
        </div>
    </main>

@endsection
