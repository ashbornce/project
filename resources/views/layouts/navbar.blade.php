{{-- header --}}
<div class="container-fluid navtop mt-0 h-auto">
    <div class="container w-50 top border rounded-top-0 px-5 d-flex justify-content-center">
        <div class="top1 pb-1 mx-2">
            <a href="https://wa.me/083879367174?text=Hallo%2C%20selamat%20datang%20di%20toko%20kami"
                class="nav_link mx-auto" id="icon">
                <i class="fa-brands fa-whatsapp" style="color: #000000;"></i>
            </a>
        </div>
        <div class="top1 pb-1 mx-2">
            <a href="https://www.instagram.com/zer0_log1c" class="nav_link mx-auto" id="icon">
                <i class="fa-brands fa-instagram" style="color: #000000;"></i>
            </a>
        </div>
        <div class="top1 pb-1 mx-2">
            <a href="#" class="nav_link mx-auto" id="icon">
                <i class="fa-brands fa-facebook" style="color: #000000;"></i>
            </a>
        </div>
        <div class="top1 pb-1 mx-2">
            <a href="#" class="nav_link mx-auto" id="icon">
                <i class="fa-solid fa-phone" style="color: #000000;"></i>
            </a>
        </div>
    </div>
</div>

{{-- navbar --}}
<nav class="navbar navbar-expand-lg px-5">
    <div class="container-fluid P-1">
        <a class="navbar-brand ms-5" href="{{ url('/') }}">
            <img src="{{ asset('img/ceritane_logo-removebg-preview.png') }}" alt="logo" id="navlogo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-0 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('produk.index') }}">Product</a>
                </li>
            </ul>
            <div class="me-5">
                <div class="login me-5">
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" id="login" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" id="logout" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

<style>
    /* General Styles */
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    .navtop {
        background-color: #BF935E;
        padding: 0;
    }

    .navtop .top {
        background-color: #F2E5D5;
        border: none;
        border-radius: 30px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .navtop .top .top1 {
        margin: 0 10px;
    }

    .navtop .top .nav_link {
        color: #000000;
        text-decoration: none;
        font-size: 1.5rem;
    }

    .navtop .top .nav_link:hover {
        color: #333;
    }

    nav {
        background-color: #BF935E;
        width: 100%;
        position: sticky;
        top: 0;
        z-index: 1000;
    }

    /* Logo style */
    #navlogo {
        width: 50px;
        height: 50px;
    }

    /* Icon style */
    #icon {
        margin-left: 20px;
    }

    /* Login and Logout button style */
    #login,
    #logout {
        background-color: #F2E5D5;
        border: none;
        border-radius: 10px;
        padding: 5px 10px;
        margin: 0 5px;
        color: #000;
    }

    #login:hover,
    #logout:hover {
        background-color: #ddd2c3;
    }

    /* Media Queries for Responsiveness */
    @media (max-width: 992px) {
        .navtop .top {
            flex-direction: column;
            padding: 10px;
        }

        #icon {
            margin-left: 0;
            margin-bottom: 10px;
        }

        .navbar-collapse {
            margin-top: 10px;
        }
    }

    @media (max-width: 768px) {
        .container-fluid.navtop {
            padding: 0 10px;
        }

        .navtop .top {
            padding: 5px;
            border-radius: 15px;
        }

        nav {
            height: auto;
        }

        .navbar-nav {
            text-align: center;
            margin-top: 10px;
        }

        #navlogo {
            width: 40px;
            height: 40px;
        }

        .navbar-collapse {
            display: flex;
            justify-content: center;
        }

        .login ul {
            flex-direction: column;
            align-items: center;
        }

        #login,
        #logout {
            padding: 5px;
            font-size: 0.9rem;
            margin: 5px;
        }
    }

    @media (max-width: 576px) {
        #navlogo {
            width: 30px;
            height: 30px;
        }

        #login,
        #logout {
            padding: 3px;
            font-size: 0.8rem;
        }

        .navtop .top .nav_link {
            font-size: 1.2rem;
        }
    }
</style>