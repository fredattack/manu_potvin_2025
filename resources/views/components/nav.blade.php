<nav class="nav-main mainmenu-nav d-none d-xl-block">
    <ul class="mainmenu">
{{--        <li class="has-droupdown">--}}
{{--            <a class="nav-link" href="#">Accueil</a>--}}
{{--            <ul class="submenu menu-link1">--}}
{{--                <li class="menu-item">--}}
{{--                    <a class="tag" href="#">Portes-Fenêtres-Chassis</a>--}}
{{--                    <ul>--}}
{{--                        <li><a href="{{ route('home') }}">Main Home</a></li>--}}
{{--                        <li><a href="{{ route('consulting') }}">Consulting Home</a></li>--}}
{{--                        <li><a href="{{ route('corporate') }}">Corporate Home</a></li>--}}
{{--                        <li><a href="{{ route('insurance') }}">Insurance Home</a></li>--}}
{{--                        <li><a href="{{ route('marketing') }}">Marketing Home</a></li>--}}
{{--                        <li><a href="{{ route('finance') }}">Home finance</a></li>--}}
{{--                        <li><a href="{{ route('humanResource') }}">Human Resources</a></li>--}}
{{--                        <li><a href="{{ route('itsolution') }}">IT Solutions</a></li>--}}
{{--                        <li><a href="{{ route('modernagency') }}">Modern Agency</a></li>--}}
{{--                        <li><a href="{{ route('stratupAgency') }}">Startup Agency</a></li>--}}
{{--                        <li><a href="{{ route('brandingagency') }}">Branding Agency</a></li>--}}
{{--                        <li><a href="{{ route('businessagency') }}">Business Agency</a></li>--}}
{{--                        <li><a href="{{ route('businessmanagement') }}">Business Management</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="menu-item">--}}
{{--                    <a class="tag" href="#">Onepages</a>--}}
{{--                    <ul>--}}
{{--                        <li><a href="{{ route('main') }}">Main Home</a></li>--}}
{{--                        <li><a href="{{ route('OnePageConsulting') }}">Consulting Home</a></li>--}}
{{--                        <li><a href="{{ route('OnePageCorporate') }}">Corporate Home</a></li>--}}
{{--                        <li><a href="{{ route('OnePageInsurance') }}">Insurance Home</a></li>--}}
{{--                        <li><a href="{{ route('OnePageMarketing') }}">Marketing Home</a></li>--}}
{{--                        <li><a href="{{ route('OnePageFinance') }}">Finance Home</a></li>--}}
{{--                        <li><a href="{{ route('OnePageHumanResource') }}">Human resource</a></li>--}}
{{--                        <li><a href="{{ route('OnePageItsolution') }}">IT Solutions</a></li>--}}
{{--                        <li><a href="{{ route('OnePageModernAgency') }}">Modern Agency</a></li>--}}
{{--                        <li><a href="{{ route('OnePageStratupAgency') }}">Startup Agency</a></li>--}}
{{--                        <li><a href="{{ route('OnePageBrandingAgency') }}">Branding Agency</a></li>--}}
{{--                        <li><a href="{{ route('OnePageBusinessAgency') }}">Business Agency</a></li>--}}
{{--                        <li><a href="{{ route('OnePageBusinessManagement') }}">Business Management</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}
        <li><a class="nav-item" href="{{ route('contactPage') }}">Accueil</a></li>
        <li class="has-droupdown">
            <a class="nav-link" href="#">Nos Produits</a>
            <ul class="submenu menu-link3">
                <li class="sub-droupdown">
                    <a class="sub-menu-link" href="#">Portes-Fenêtres-Chassis</a>
                    <ul class="submenu third-lvl">
                        <li><a href ="{{ route('ourservicePage') }}">Chassis PVC</a></li>
                        <li><a href ="{{ route('service2Page') }}">Chassis ALU</a></li>
                    </ul>
                </li>
                <li><a href ="{{ route('serviceDetailsPage') }}">Portes de garage</a></li>
                <li>
                    <a class="nav-item" href="{{ route('contactPage') }}">Pergolas</a>
                </li>
                <li>
                    <a class="nav-item" href="{{ route('contactPage') }}">Moustiquaires</a>
                </li>
            </ul>
        </li>
        <li><a class="nav-item" href="{{ route('contactPage') }}">Nos Réalisations</a></li>
        <li><a class="nav-item" href="{{ route('contactPage') }}">Contact</a></li>
    </ul>
</nav>
