<nav class="main-header navbar
    {{ config('adminlte.classes_topnav_nav', 'navbar-expand') }} 
    {{ config('adminlte.classes_topnav', 'navbar-white navbar-light') }}">

    {{-- Navbar left links --}}
    {{-- Delete the class ml-auto Mr.H --}}
    <ul class="navbar-nav">
        {{-- Custom right links --}}
        @yield('content_top_nav_right')

        {{-- Configured right links --}}
        @each('adminlte::partials.navbar.menu-item', $adminlte->menu('navbar-right'), 'item')

        {{-- User menu link --}}
        @if(Auth::user())
            @if(config('adminlte.usermenu_enabled'))
                @include('adminlte::partials.navbar.menu-item-dropdown-user-menu')
            @else
                @include('adminlte::partials.navbar.menu-item-logout-link')
            @endif
        @endif

        {{-- Right sidebar toggler link --}}
        @if(config('adminlte.right_sidebar'))
            @include('adminlte::partials.navbar.menu-item-right-sidebar-toggler')
        @endif
    </ul>

    {{-- Navbar right links --}}
    <ul class="navbar-nav">
        {{-- Configured left links --}}
        @each('adminlte::partials.navbar.menu-item', $adminlte->menu('navbar-left'), 'item')

        {{-- Custom left links --}}
        @yield('content_top_nav_left')
    </ul>

    {{-- Left sidebar toggler link --}}
    <ul class="navbar-nav ml-auto custom-click" onclick="custom_link()">
        @include('adminlte::partials.navbar.menu-item-left-sidebar-toggler')
    </ul>

</nav>
