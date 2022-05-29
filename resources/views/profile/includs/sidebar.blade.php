<nav class="mt-2">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ url('storage/images/avatar.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
    </div>
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                    Главная
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('profile.liked.index') }}" class="nav-link">
                <i class="nav-icon far fa-user"></i>
                <p>
                    Понравившиеся посты
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('profile.comment.index') }}" class="nav-link">
                <i class="nav-icon far fa-clipboard"></i>
                <p>
                    Комментарии
                </p>
            </a>
        </li>
    </ul>
</nav>
