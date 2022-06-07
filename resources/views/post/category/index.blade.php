@extends('layouts.main')

@section('content')

    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Категории</h1>
            <section class="post-content pb-5">
                <ul>
                    @foreach($data['categories'] as $category)
                        <li><a href="{{ route('post.category.show', $category->id) }}">{{ $category->title }}</a></li>
                    @endforeach
                </ul>
            </section>

        </div>
    </main>

@endsection
