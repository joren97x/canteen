<nav class="navbar navbar-expand-lg bg-dark ">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="#">Canteen</a>
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
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/sign-up" role="button">
                                Welcome asdasdas
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-light" href="/food-zone" role="button">
                                Food Zone
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-light" href="/cart" role="button">
                                Cart(0)
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-light" href="/sign-in" role="button">
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            @endauth

            <div class="d-flex me-4">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <div class="dropdown navlink me-4">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Sign-up
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="/student/sign-up">Student sign-up</a></li>
                          <li><a class="dropdown-item" href="/admin/sign-up">Admin sign-up</a></li>
                        </ul>
                      </div>
                    <div class="dropdown navlink me-4">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Sign-in
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="/student/sign-in">Student sign-in</a></li>
                          <li><a class="dropdown-item" href="/admin/sign-in">Admin sign-in</a></li>
                        </ul>
                      </div>
                </ul>
            </div>
            
        </div>
    </div>
</nav>