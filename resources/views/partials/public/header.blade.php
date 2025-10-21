<header class="web-header">
    <div id="title-logo">
        <img src="{{ asset('images/logo.png') }}" alt="logo" id="web-logo">
        <a href="/"><h2 id="web-title">Cambiando Vidas</h2>  </a>        
    </div>
    <div class="navs">
        <nav class="main-nav" id="menuContent">
            <ul class="main-nav-list">
                @foreach($menuLinks as $menuLink)
                    <li><a href="{{ $menuLink->url }}">{{ $menuLink->name }}</a></li>
                @endforeach
            </ul>
        </nav> 
        <nav class="social-nav">
            <ul class="social-nav-list">
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
            </ul>
        </nav>
    </div>
    
    <div class="burger" id="burger">
        <div class="burger-line line1"></div>
        <div class="burger-line line2"></div>
        <div class="burger-line line3"></div>
    </div>       
</header>

<div class="overlay-nav-menu" id="overlay-nav-menu">
    <div class="close-icon" id="nav-close-icon">
        <i class="fa-solid fa-xmark"></i>
    </div>
    <ul class="main-nav-list">
        @foreach($menuLinks as $menuLink)
            <li><a href="{{ $menuLink->url }}">{{ $menuLink->name }}</a></li>
        @endforeach
    </ul>
</div>

<script>
    const menu = document.getElementById('overlay-nav-menu');
    const closeIcon = document.getElementById('nav-close-icon');
    const burger = document.getElementById('burger');

    burger.addEventListener('click', () => {
        menu.classList.add('active');
    })

    closeIcon.addEventListener('click', () => {
        menu.classList.remove('active');
    })
</script>