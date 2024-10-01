<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{url('/')}}">
            <img src="{{asset('assets/img/rogo-logo-removebg-preview.png')}}" alt="Logo" width="50" height="34"
                class="d-inline-block align-text-top">
            Republic of Gamers
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item">
                    <a class="nav-link mx-2 {{ Request::is('/') ? 'active' : '' }} "  aria-current="page" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2 {{ Request::is('products') ? 'active' : '' }}" href="{{ url('products') }}">Products</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Company
                    </a>
                    <ul class="dropdown-menu bg-light" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item {{ Request::is('blog') ? 'active' : '' }}" href="{{ url('blog') }}">Blog</a></li>
                        <li><a class="dropdown-item {{ Request::is('about-us') ? 'active' : '' }}" href="{{url('about-us')}}">About Us</a></li>
                        <li><a class="dropdown-item {{ Request::is('contact') ? 'active' : '' }}" href="{{url('contact')}}">Contact us</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto d-none d-lg-inline-flex">
                <li class="nav-item mx-2">
                    <a class="nav-link text-dark h5" href="" target="blank"><i
                            class="fab fa-google-plus-square"></i></a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-dark h5" href="" target="blank"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link text-dark h5" href="" target="blank"><i
                            class="fab fa-facebook-square"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
