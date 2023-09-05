<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{ url('/') }}" class="nav-link px-2 text-white">Home</a></li>
            </ul>
            <div class="text-end">
                @guest
                    <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-warning">Sign-up</a>
                    @else
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <a href="#" class="btn btn-outline-light me-2">{{ Auth::user()->name }}</a>
                        <button type="submit" class="btn btn-outline-light me-2">Logout</button>
                    </form>
                @endguest
            </div>
        </div>
    </div>
</header>
