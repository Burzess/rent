@php
    $current_page = basename(request()->path());
@endphp

<link rel="stylesheet" href="{{ asset('css/user_dashboard.css') }}">

<div class="navigation">
    <div class="profil">
        <div class="user-avatar">
            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
        </div>
        <br>
        <p>{{ Auth::user()->name ?? '' }}</p>
        {{-- <div class="user-email">{{ Auth::user()->email }}</div> --}}
    </div>
    <a href="{{ route('dashboard') }}" class="nav-link {{ $current_page == 'dashboard' ? 'nav-link-dashboard' : '' }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
    <a href="{{ route('profile') }}" class="nav-link {{ $current_page == 'profile' ? 'nav-link-dashboard' : '' }}"><i class="fas fa-user"></i> My Profile</a>
    {{-- <a href="{{ route('orders') }}" class="nav-link {{ $current_page == 'orders' ? 'nav-link-dashboard' : '' }}"><i class="fas fa-clipboard-list"></i> My Order</a> --}}
    <form action="{{ route('logout') }}" method="POST" class="nav-link">
        @csrf
        <button type="submit" class="nav-link btn btn-link p-0 m-0 align-baseline"><i class="fas fa-sign-out-alt"></i> Sign Out</button>
    </form>
</div>
