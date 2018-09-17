<div class="hero-head ">
    <nav class="navbar  is-fixed-top  ">
        <div class="container">
            <div class="navbar-brand ">
                <a class="navbar-item" href="/">
                    <picture>
                        <img src="img/cynergie-logo-white.png" alt="Logo">
                    </picture>

                </a>
                <div class="navbar-burger burger" data-target="navbarMenu"
                     onclick="document.querySelector('.navbar-menu').classList.toggle('is-active');">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

            <div id="navbarMenu" class="navbar-menu "
                 onclick="document.querySelector('.navbar-menu').classList.toggle('is-active');">
                <div class="navbar-end">
                    <a href="#" class="navbar-item ">
                        Projet
                    </a>
                    <a href="#maitrîse" class="navbar-item ">
                        Maitrîse
                    </a>
                    <a href="#technologie" class="navbar-item ">
                        Technologies
                    </a>
                    <a href="#partenaires" class="navbar-item ">
                        Partenaires
                    </a>
                    <a class="navbar-item" href="#contact">
                        Contact
                    </a>
                    <a class="navbar-item" href="/grafana">
                        Grafana
                    </a>
                    @if (Route::has('login'))
                        @auth
                            <a class="navbar-item" href="/home">Home</a>
                        @else
                            <a class="navbar-item" href="{{ route('login') }}">Login</a>
                            <a class="navbar-item" href="{{ route('register') }}">Register</a>

                        @endauth

                    @endif
                    <span class="navbar-item">
                                    <a class="button is-white is-outlined is-small" href="http://cedille.etsmtl.ca/">
                                    <span class="icon">
                                                <i class="far fa-copyright"></i>
                                    </span>
                                    <span>Club cedille</span>
                                    </a>
                                    </span>
                </div>
            </div>
        </div>
    </nav>
</div>