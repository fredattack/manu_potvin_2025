<nav class="nav-main mainmenu-nav d-none d-xl-block">
    <ul class="mainmenu">
        <li><a class="nav-item" href="{{ route('home') }}">Accueil</a></li>
        <li class="has-droupdown">
            <a class="nav-link" href="#">Nos Produits</a>
            <ul class="submenu menu-link3">
                <li class="sub-droupdown">
                    <a class="sub-menu-link" href="{{ route('pages',['type'=>App\Enums\Categories::CHASSIS->value]) }}">Portes-Fenêtres-Chassis</a>
                    <ul class="submenu third-lvl">
                        <li><a href="{{ route('pagesKinded',['type'=>App\Enums\Categories::CHASSIS->value,'subType'=>"pvc"]) }}">Chassis PVC</a></li>
                        <li><a href="{{ route('pagesKinded',['type'=>App\Enums\Categories::CHASSIS->value,'subType'=>"alu"]) }}">Chassis ALU</a></li>
                    </ul>
                </li>
                <li><a href ="{{ route('pages',['type'=>App\Enums\Categories::PORTE_DE_GARAGE->value]) }}">Portes de garage</a></li>
                <li>
                    <a class="nav-item" href="{{ route('pages',['type'=>App\Enums\Categories::PERGOLAS->value]) }}">Pergolas</a>
                </li>
                <li>
                    <a class="nav-item" href="{{ route('pages',['type'=>App\Enums\Categories::MOUSTIQUAIRES->value]) }}">Moustiquaires</a>
                </li>
            </ul>
        </li>
        <li><a class="nav-item" href="{{ route('pages',['type'=>'realisations']) }}">Nos Réalisations</a></li>
        <li><a class="nav-item" href="{{ route('about') }}">À propos</a></li>
        <li><a class="nav-item" href="{{ route('contactPage') }}">Contact</a></li>
    </ul>
</nav>
