<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

<nav class="navbar navbar-expand-xl navbar-dark bg-dark custom-navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            GOKGOK
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('rentals') ? 'active' : '' }}" href="{{ url('rentals') }}">Rental</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contact_us') ? 'active' : '' }}" href="{{ url('contact_us') }}">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{ url('about') }}">About</a>
                </li>
            </ul>
        </div>
        <div class="d-flex">
            <a class="nav-link" href="{{ url('dashboard') }}">
                <img src="{{ asset('img/luffy_face.png') }}" alt="Profile" width="40" height="40" class="rounded-circle">
            </a>
        </div>
    </div>
</nav>