<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edica :: Home</title>
    <link rel="stylesheet" href="{{ @asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ @asset('assets/vendors/font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ @asset('assets/vendors/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ @asset('assets/css/style.css') }}">
    <script src="{{ @asset('assets/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ @asset('assets/js/loader.js') }}"></script>
</head>

<body>

    <div class="edica-loader"></div>
    <header class="edica-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.html"><img src="{{ @asset('assets/images/logo.svg') }}"
                        alt="Edica"></a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav"
                    aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="edicaMainNav">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('home') }}">Главная <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#">Блог</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ route('post.category.index') }}" id="blogDropdown" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">Категории</a>
                            <div class="dropdown-menu" aria-labelledby="blogDropdown">
                                @foreach($categories as $category)

                                <a class="dropdown-item" href="{{ route('post.category.show', $category->id) }}">{{ $category->title }}</a>
                                @endforeach
                            </div>
                        </li>

                        @guest()
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/login') }}">Войти</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/register') }}">Зарегистрироваться</a>
                            </li>
                        @endguest
                        @auth()
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profile.main.index') }}">Профиль</a>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('profile.main.index') }}">Профиль</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span
                                        class="flag-icon flag-icon-squared rounded-circle flag-icon-gb"></span> Eng</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Download</a>

                            </li>
                        @endauth
                    </ul>

                </div>
            </nav>
        </div>
    </header>

    @yield('content')

    <footer class="edica-footer" data-aos="fade-up">
        <div class="container">
            <div class="row footer-widget-area">
                <div class="col-md-3">
                    <a href="index.html" class="footer-brand-wrapper">
                        <img src="{{ url('assets/images/logo.svg') }}" alt="edica logo">
                    </a>
                    <p class="contact-details">hello@edica.com</p>
                    <p class="contact-details">+23 3000 000 00</p>
                    <nav class="footer-social-links">
                        <a href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a href="#!"><i class="fab fa-twitter"></i></a>
                        <a href="#!"><i class="fab fa-behance"></i></a>
                        <a href="#!"><i class="fab fa-dribbble"></i></a>
                    </nav>
                </div>
                <div class="col-md-3">
                    <nav class="footer-nav">
                        <a href="#!" class="nav-link">Company</a>
                        <a href="#!" class="nav-link">Android App</a>
                        <a href="#!" class="nav-link">ios App</a>
                        <a href="#!" class="nav-link">Blog</a>
                        <a href="#!" class="nav-link">Partners</a>
                        <a href="#!" class="nav-link">Careers</a>
                    </nav>
                </div>
                <div class="col-md-3">
                    <nav class="footer-nav">
                        <a href="#!" class="nav-link">FAQ</a>
                        <a href="#!" class="nav-link">Reporting</a>
                        <a href="#!" class="nav-link">Block Storage</a>
                        <a href="#!" class="nav-link">Tools & Integrations</a>
                        <a href="#!" class="nav-link">API</a>
                        <a href="#!" class="nav-link">Pricing</a>
                    </nav>
                </div>
                <div class="col-md-3">
                    <div class="dropdown footer-country-dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="footerCountryDropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="flag-icon flag-icon-gb flag-icon-squared"></span> United Kingdom <i
                                class="fas fa-chevron-down ml-2"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="footerCountryDropdown">
                            <button class="dropdown-item" href="#">
                                <span class="flag-icon flag-icon-us flag-icon-squared"></span> United States
                            </button>
                            <button class="dropdown-item" href="#">
                                <span class="flag-icon flag-icon-au flag-icon-squared"></span> Australia
                            </button>
                        </div>

                        <div class="edica-loader"></div>



                        <script src="{{ @asset('assets/vendors/popper.js/popper.min.js') }}"></script>
                        <script src="{{ @asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
                        <script src="{{ @asset('assets/vendors/aos/aos.js') }}"></script>
                        <script src="{{ @asset('assets/js/main.js') }}"></script>
                        <script>
                            AOS.init({
                                duration: 1000
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
