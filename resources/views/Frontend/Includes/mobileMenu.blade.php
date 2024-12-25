<nav class="nav-main mainmenu-nav">
    <ul class="mainmenu">
        <li class="menu-item menu-item"><a class="menu-link" href="{{ route('home') }}">Accueil</a></li>
        <li class="has-droupdown menu-item">
            <a class="menu-link" href="{{route('home') }}">Nos Produits</a>
            <ul class="submenu">
                <li>
                    <ul>
                        <a href="{{ route('pages',['type'=>App\Enums\Categories::CHASSIS->value])  }}" class="tag">Portes-Fenêtres-Chassis</a>
                        <li class="mobile-menu-link"><a href ="{{ route('pagesKinded',['type'=>\App\Enums\Categories::CHASSIS->value,'subType'=>"pvc"])  }}">Chassis PVC</a></li>
                        <li class="mobile-menu-link"><a href ="{{ route('pagesKinded',['type'=>\App\Enums\Categories::CHASSIS->value,'subType'=>"alu"]) }}">Chassis ALU</a></li>
                    </ul>
                </li>
            </ul>
        </li>

        <li class="menu-item menu-item"><a class="menu-link" href="{{ route('pages',['type'=>\App\Enums\Categories::PORTE_DE_GARAGE->value]) }}">Portes de garage</a></li>
        <li class="menu-item menu-item"><a class="menu-link" href="{{ route('pages',['type'=>\App\Enums\Categories::PERGOLAS->value]) }}">Pergolas</a></li>
        <li class="menu-item menu-item"><a class="menu-link" href="{{ route('pages',['type'=>\App\Enums\Categories::MOUSTIQUAIRES->value]) }}">Moustiquaires</a></li>
        <li class="menu-item menu-item"><a class="menu-link" href="{{ route('pages',['type'=>'realisations'])}}">Nos Réalisations</a></li>
        <li class="menu-item menu-item"><a class="menu-link" href="{{ route('contactPage') }}">Contact</a></li>
    </ul>
</nav>
