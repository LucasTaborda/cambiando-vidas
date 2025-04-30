

<header class="web-header">
    <div id="title-logo">
        <img src="{{ asset('images/logo.png') }}" alt="logo" id="web-logo">
        <a href="/"><h2 id="web-title">Cambiando Vidas</h2>  </a>        
    </div>
    <div class="navs">
        <nav class="main-nav" id="menuContent">
            <ul class="main-nav-list">
                <li><a href="/">Adoptar</a></li>
                <li><a href="/">Donar</a></li>
                <li><a href="/gallery">Vidas cambiadas</a></li>
                <li><a href="/servicios">Sobre nosotros</a></li>
                <li><a href="/contacto">Contacto</a></li>
            </ul>
        </nav> 
        <nav class="social-nav">
            <ul class="social-nav-list">
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>
            </ul>
        </nav>
    </div>
    
    <div class="burger" id="burger">
        <div class="burger-line line1"></div>
        <div class="burger-line line2"></div>
        <div class="burger-line line3"></div>
    </div>       
</header>

<script>
    const menu = document.getElementById('menu');
    const burger = document.getElementById('burger');
    const menuContent = document.getElementById('menuContent');

    burger.addEventListener('click', () => {
    if (menu.classList.contains('active')) {
        // Si está abierto, primero empezamos el cierre
        menuContent.classList.add('closing');
        menu.classList.remove('active');

        setTimeout(() => {
            menuContent.classList.remove('closing');
        }, 500); // Tiempo del fade-out
    } else {
        // Si está cerrado, abrimos directamente
        menu.classList.add('active');
    }
    });
</script>

