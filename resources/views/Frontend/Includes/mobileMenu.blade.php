<nav class="nav-main mainmenu-nav">
    <ul class="mainmenu">
        <li class="has-droupdown menu-item">
            <a class="menu-link" href="#">Home</a>
            <ul class="submenu">
                <li>
                    <ul>
                        <a href="#0" class="tag">Homepages</a>
                        <li class="mobile-menu-link"><a href ="{{ route('home') }}">Main Home</a></li>
                        <li class="mobile-menu-link"><a href ="{{ route('consulting') }}">Consulting Home</a></li>
                        <li class="mobile-menu-link"><a href ="{{ route('corporate') }}">Corporate Home</a></li>
                        <li class="mobile-menu-link"><a href ="{{ route('insurance') }}">Insurance Home</a></li>
                        <li class="mobile-menu-link"><a href ="{{ route('marketing') }}">Marketing Home</a></li>
                        <li class="mobile-menu-link"><a href ="{{ route('finance') }}">Finance Home</a></li>
                        <li class="mobile-menu-link"><a href ="{{ route('humanResource') }}">Human Resources</a></li>
                        <li class="mobile-menu-link"><a href ="{{ route('itsolution') }}">IT Solutions</a></li>
                        <li class="mobile-menu-link"><a href="{{ route('modernagency') }}">Modern Agency</a></li>
                        <li class="mobile-menu-link"><a href="{{ route('stratupAgency') }}">Startup Agency</a></li>
                        <li class="mobile-menu-link"><a href="{{ route('brandingagency') }}">Branding-Agency</a></li>
                    </ul>
                </li>
                <li>
                    <ul>
                        <a href="#0" class="tag">Onepages</a>
                        <li class="mobile-menu-link"><a href ="{{ route('main') }}">Main Home Onepage</a></li>
                        <li class="mobile-menu-link"><a href ="{{ route('consulting') }}">Consulting Home Onepage</a></li>
                        <li class="mobile-menu-link"><a href ="{{ route('corporate') }}">Corporate Home Onepage</a></li>
                        <li class="mobile-menu-link"><a href ="{{ route('insurance') }}">Insurance Home Onepage</a></li>
                        <li class="mobile-menu-link"><a href ="{{ route('marketing') }}">Marketing Home Onepage</a></li>
                        <li class="mobile-menu-link"><a href ="{{ route('finance') }}">Finance Home Onepage</a></li>
                        <li class="mobile-menu-link"><a href ="{{ route('humanResource') }}">Human Resources Onepage</a></li>
                        <li class="mobile-menu-link"><a href ="{{ route('itsolution') }}">IT Solutions Onepage</a></li>
                        <li class="mobile-menu-link"><a href ="{{ route('modernagency') }}">Modern Agency</a></li>
                        <li class="mobile-menu-link"><a href ="{{ route('stratupAgency') }}">Startup Agency</a></li>
                        <li class="mobile-menu-link"><a href ="{{ route('brandingagency') }}">Branding-Agency</a></li>

                    </ul>
                </li>
            </ul>
        </li>
        <li class="menu-item"><a class="menu-link" href="{{ route('aboutPage') }}">About Us</a></li>
        <li class="has-droupdown menu-item">
            <a class="menu-link" href="#">Services</a>
            <ul class="submenu">
                <li class="has-droupdown sub-droupdown">
                    <a href="#">Our Service</a>
                    <ul class="submenu third-lvl mobile-menu">
                        <li><a href ="{{ route('ourservicePage') }}">Service 1</a></li>
                        <li><a href ="{{ route('service2Page') }}">Service 2</a></li>
                        <li><a href ="{{ route('service3Page') }}">Service 3</a></li>
                    </ul>
                </li>
                <li class="mobile-menu-link"><a href ="{{ route('serviceDetailsPage') }}">Service Details</a></li>
            </ul>
        </li>
        <li class="has-droupdown menu-item">
            <a class="menu-link" href="#">Pages</a>
            <ul class="submenu">
                <li class="mobile-menu-link"><a href="{{ route('portfolioStyle1') }}">Project</a></li>
                <li class="mobile-menu-link"><a href="{{ route('portfolioDetails') }}">Project Details</a></li>
                <li class="mobile-menu-link"><a href="{{ route('teamStyle1') }}">Team</a></li>
                <li class="mobile-menu-link"><a href="{{ route('teamDetails') }}">Team Details</a></li>
                <li class="mobile-menu-link"><a href ="{{ route('appoitment') }}">appoinment</a></li>
                <li class="mobile-menu-link"><a href="{{ route('pricePlans') }}">Price Plan</a></li>
                <li class="mobile-menu-link"><a href="{{ route('errorPage') }}">404 Page</a></li>
            </ul>
        </li>
        <li class="has-droupdown menu-item">
            <a class="menu-link" href="#">Blog</a>
            <ul class="submenu">
                <li class="mobile-menu-link"><a href ="{{ route('blogPage') }}">Blog List</a></li>
                <li class="mobile-menu-link"><a href ="{{ route('blogGridPage') }}">Blog Grid</a></li>
                <li class="mobile-menu-link"><a href ="{{ route('blogDetailsPage') }}">Blog Details</a></li>
            </ul>
        </li>
        <li class="menu-item menu-item"><a class="menu-link" href="{{ route('contactPage') }}">Contact</a></li>
    </ul>
</nav>
