<aside class="col-md-2">
    <ul>
        <li class="{{ request()->is('pages') ? 'active' : '' }}">
            <a href="/pages"><i class="fa-solid fa-window-maximize"></i> Páginas</a>
        </li>
        <li class="{{ request()->is('gallery-images') ? 'active' : '' }}">
            <a href="/gallery-images"><i class="fa-solid fa-camera"></i> Galería</a>
        </li>
        <li class="{{ request()->is('menu-links') ? 'active' : '' }}">
            <a href="/menu-links"><i class="fa-solid fa-list"></i> Menú</a>
        </li>
        <li>
            <a href="/"><i class="fa-solid fa-right-from-bracket"></i> Volver a la web</a>
        </li>
    </ul>
</aside>