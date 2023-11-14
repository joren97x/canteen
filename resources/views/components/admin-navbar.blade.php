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
            
                <div class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link text-light" href="/sign-up" role="button">
                                Welcome {{ auth()->user()->username }}!
                            </a>
                        </li>
                        <li class="nav-item nav-link text-light dropdown">
                                Admin control panel
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-light" href="/logout" role="button">
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            
        </div>
    </div>
</nav>