<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">Demo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>

                @if (Auth::user() && Auth::user()->is_admin)
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Books
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('create_book') }}">Create New Book</a></li>
                        </ul>
                    </li>
                @endif

            </ul>

            <div class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    @if (Auth::user())
                        <li class="nav-item">
                            <a href="{{route('transactions')}}" class="nav-link">
                                Transactions
                            </a>
                        </li>

                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}" id="logout-form">
                                @csrf
                                <a class="nav-link" id="logout-button">
                                    Logout
                                </a>
                            </form>
                        </li>

                        <!-- Logout form submit -->
                        <script defer>
                            logout_button = document.getElementById('logout-button')

                            logout_button.addEventListener('click', () => {
                                logout_form = document.getElementById('logout-form')
                                logout_form.submit()
                            })
                        </script>

                        <style>
                            #logout-button:hover {
                                cursor: pointer;
                            }
                        </style>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">
                                Login
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">
                                Register
                            </a>
                        </li>
                    @endif

                </ul>
            </div>
        </div>
    </div>
</nav>
