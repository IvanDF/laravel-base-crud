<header class="mainHeader">
    <nav class="navbar is-link" role="navigation" aria-label="main navigation">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="{{route('home')}}">
                    <h2 class="title has-text-info-light"> My Blog </h2>
                </a>

                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-end">
                <a class="navbar-item" href="{{ route('home') }}">
                    Home
                </a>

                <a class="navbar-item" href="{{ route('posts.index') }}">
                    Posts
                </a>

                <a class="navbar-item" href="{{ route('posts.create')}}">
                    New post
                </a>
            </div>
        </div>
    </nav>
</header>
