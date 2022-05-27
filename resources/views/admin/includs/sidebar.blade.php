<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ url('storage/images/avatar.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>
        <li class="nav-item">
            <a href="{{ route('admin.user.index') }}" class="nav-link">
                <i class="nav-icon far fa-user"></i>
                <p>
                    Пользователи
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.posts.index') }}" class="nav-link">
                <i class="nav-icon far fa-clipboard"></i>
                <p>
                    Посты
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.categories.index') }}" class="nav-link">
                <i class="nav-icon fab fa-buffer"></i>
                <p>
                    Категории
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.tags.index') }}" class="nav-link">
                <i class="nav-icon fas fa-tags"></i>
                <p>
                    Теги
                </p>
            </a>
        </li>
    </ul>
</nav>
