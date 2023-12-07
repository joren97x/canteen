<nav class="navbar navbar-expand-lg bg-dark ">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-light" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="/contact-us">Contact Us</a>
                </li>
            </ul>

            @auth
            <div class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item nav-link text-light dropdown">
                        Welcome {{auth()->user()->fullname}}!
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-light" href="/student/food-zone" role="button">
                            Food Zone
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-light" href="/student/cart" role="button">
                            Cart(n)
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-light" href="/student/order-history" role="button">
                            Order-history
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-light" href="/logout" role="button">
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
            @else
            <div class="d-flex me-4">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <a class="dropdown-item" href="/student/sign-up">
                        <button class="btn btn-dark" type="button">
                            Sign-up
                        </button>
                    </a>
                    <div class="dropdown navlink me-4">
                        <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Sign-in
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/student/sign-in">Student sign-in</a></li>
                            <li><a class="dropdown-item" href="/admin/sign-in">Admin sign-in</a></li>
                        </ul>
                    </div>
                </ul>
            </div>
            @endauth



        </div>
    </div>
</nav>