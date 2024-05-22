<header>
    <div class="logo-wrapper container">
        <img src="{{ Vite::asset('resources/img/Logo.png') }}" alt="logo">
        <h1>BOOLTRAIN</h1>
    </div>
    <div class="nav-wrapper">
        <ul>
            <li>
                <a href="{{ route('home') }}">HOME</a>
            </li>
            <li>
                <a href="{{ route('daily') }}">DAILY ARRIVALS</a>
            </li>
        </ul>
    </div>
</header>