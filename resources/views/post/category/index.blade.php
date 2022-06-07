@extends('layouts.main')

@section('content')

    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">Категории</h1>
            <section class="post-content">
                <ul>
                    @foreach($c)
                </ul>
            </section>

        </div>
    </main>

@endsection
