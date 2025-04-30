<aside class="col-md-2">
    <ul>
        <li class="{{ request()->is('pages') ? 'active' : '' }}">
            <a href="/pages"><i class="fa-solid fa-window-maximize"></i> Páginas</a>
        </li>
        <li class="{{ request()->is('gallery-images') ? 'active' : '' }}">
            <a href="/gallery-images"><i class="fa-solid fa-camera"></i> Galería</a>
        </li>
    </ul>
</aside>