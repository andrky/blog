<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffffff;">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ $gambar === 'Valdo' ? '../img/valdo_new.png' : 'img/valdo_new.png' }}"
                alt="Valdo Sumber Daya Mandiri">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'about' ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'blog' ? 'active' : '' }}" href="/post">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $active === 'category' ? 'active' : '' }}" href="/category">Category</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Welcome, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" style="font-size: 13px" href="/dashboard"><i class="bi bi-house-check pe-2"></i>My Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
															<form action="/logout" method="post">
																@csrf
																<button class="dropdown-item" style="font-size: 13px"><i class="bi bi-box-arrow-right pe-2"></i>Logout</button>
															</form>
														</li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'login' ? 'active' : '' }}" href="/login"><i
                                class="bi bi-box-arrow-in-right pe-2"></i>Login</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
