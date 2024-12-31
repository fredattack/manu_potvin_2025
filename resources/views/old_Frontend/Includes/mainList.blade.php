<nav class="nav-main mainmenu-nav d-none d-xl-block">
    <ul class="mainmenu">
        <li class="has-droupdown">
            <a class="nav-link" href="#">Home</a>
            <ul class="submenu menu-link1">
                <li class="menu-item">
                    <a class="tag" href="#">Multipages</a>
                    <ul>
                        <li><a href="{{ route('home') }}">Main Home</a></li>
                        <li><a href="{{ route('consulting') }}">Consulting Home</a></li>
                        <li><a href="{{ route('corporate') }}">Corporate Home</a></li>
                        <li><a href="{{ route('insurance') }}">Insurance Home</a></li>
                        <li><a href="{{ route('marketing') }}">Marketing Home</a></li>
                        <li><a href="{{ route('finance') }}">Home finance</a></li>
                        <li><a href="{{ route('humanResource') }}">Human Resources</a></li>
                        <li><a href="{{ route('itsolution') }}">IT Solutions</a></li>
                        <li><a href="{{ route('modernagency') }}">Modern Agency</a></li>
                        <li><a href="{{ route('stratupAgency') }}">Startup Agency</a></li>
                        <li><a href="{{ route('brandingagency') }}">Branding Agency</a></li>
                        <li><a href="{{ route('businessagency') }}">Business Agency</a></li>
                        <li><a href="{{ route('businessmanagement') }}">Business Management</a></li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a class="tag" href="#">Onepages</a>
                    <ul>
                        <li><a href="{{ route('main') }}">Main Home</a></li>
                        <li><a href="{{ route('OnePageConsulting') }}">Consulting Home</a></li>
                        <li><a href="{{ route('OnePageCorporate') }}">Corporate Home</a></li>
                        <li><a href="{{ route('OnePageInsurance') }}">Insurance Home</a></li>
                        <li><a href="{{ route('OnePageMarketing') }}">Marketing Home</a></li>
                        <li><a href="{{ route('OnePageFinance') }}">Finance Home</a></li>
                        <li><a href="{{ route('OnePageHumanResource') }}">Human resource</a></li>
                        <li><a href="{{ route('OnePageItsolution') }}">IT Solutions</a></li>
                        <li><a href="{{ route('OnePageModernAgency') }}">Modern Agency</a></li>
                        <li><a href="{{ route('OnePageStratupAgency') }}">Startup Agency</a></li>
                        <li><a href="{{ route('OnePageBrandingAgency') }}">Branding Agency</a></li>
                        <li><a href="{{ route('OnePageBusinessAgency') }}">Business Agency</a></li>
                        <li><a href="{{ route('OnePageBusinessManagement') }}">Business Management</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="has-droupdown">
            <a class="nav-link" href="#">Services</a>
            <ul class="submenu menu-link3">
                <li class="sub-droupdown">
                    <a class="sub-menu-link" href="#">Our Service</a>
                    <ul class="submenu third-lvl">
                        <li><a href ="{{ route('ourservicePage') }}">Service 1</a></li>
                        <li><a href ="{{ route('service2Page') }}">Service 2</a></li>
                        <li><a href ="{{ route('service3Page') }}">Service 3</a></li>
                    </ul>
                </li>
                <li><a href ="{{ route('serviceDetailsPage') }}">Service Details</a></li>
            </ul>
        </li>
        <li class="has-droupdown">
            <a class="nav-link" href="#">Pages</a>
            <ul class="submenu menu-link">
                <li class="menu-item">
                    <a class="tag" href="#">Pages</a>
                    <ul>
                        <li><a href ="{{ route('appoitment') }}">Appoinment</a></li>
                        <li><a href="{{ route('aboutPage') }}">About Us</a></li>
                        <li><a href="{{ route('pricePlans') }}">Price Plans</a></li>
                        <li><a href ="{{ route('ourservicePage') }}">Our Services</a></li>
                        <li><a href="{{ route('testimonialStyle') }}">Testimonial</a></li>
                        <li><a href="{{ route('errorPage') }}">404 Page</a></li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a class="tag" href="#">Portfolio</a>
                    <ul>
                        <li><a href="{{ route('portfolioStyle1') }}">Portfolio Style 1</a></li>
                        <li><a href="{{ route('portfolioStyle2') }}">Portfolio Style 2</a></li>
                        <li><a href="{{ route('portfolioStyle3') }}">Portfolio Style 3</a></li>
                        <li><a href="{{ route('portfolioStyle4') }}">Portfolio Style 4</a></li>
                        <li><a href="{{ route('portfolioStyle5') }}">Portfolio Style 5</a></li>
                        <li><a href="{{ route('portfolioDetails') }}">Portfolio Details</a></li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a class="tag" href="#">Our Teams</a>
                    <ul>
                        <li><a href="{{ route('teamStyle1') }}">Team Style 1</a></li>
                        <li><a href="{{ route('teamStyle2') }}">Team Style 2</a></li>
                        <li><a href="{{ route('teamStyle3') }}">Team Style 3</a></li>
                        <li><a href="{{ route('teamStyle4') }}">Team Style 4</a></li>
                        <li><a href="{{ route('teamStyle5') }}">Team Style 5</a></li>
                        <li><a href="{{ route('teamDetails') }}">Team Details</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="has-droupdown">
            <a class="nav-link" href="#">Blog</a>
            <ul class="submenu">
                <li><a href ="{{ route('blogPage') }}">Blog List</a></li>
                <li><a href ="{{ route('blogGridPage') }}">Blog Grid</a></li>
                <li><a href ="{{ route('blogDetailsPage') }}">Blog Details</a></li>
            </ul>
        </li>
        <li class="has-droupdown">
            <a class="nav-link" href="#">Elements</a>
            <ul class="submenu menu-link2">
                <li class="menu-item">
                    <ul>
                        <li><a href="{{ route('accordianPage') }}">Accordion</a></li>
                        <li><a href="{{ route('addressBox') }}">Address Box</a></li>
                        <li><a href="{{ route('buttonPage') }}">Button</a></li>
                        <li><a href ="{{ route('blogGridPage') }}">Blog Grid</a></li>
                        <li><a href="{{ route('blogSlider') }}">Blog Slider</a></li>
                        <li><a href="{{ route('blogQuote') }}">Blog Quote</a></li>
                    </ul>
                </li>
                <li class="menu-item">
                    <ul>
                        <li><a href="{{ route('headingPage') }}">Heading</a></li>
                        <li><a href="{{ route('callToA') }}">Call To Action</a></li>
                        <li><a href="{{ route('contactForm') }}">Contact Form</a></li>
                        <li><a href="{{ route('counterUp') }}">Counter Up</a></li>
                        <li><a href="{{ route('brandPage') }}">Brand Logo</a></li>
                        <li><a href="{{ route('videoAddon') }}">Video Addon</a></li>
                    </ul>
                </li>
                <li class="menu-item">
                    <ul>
                        <li><a href="{{ route('PricingPage') }}">Pricing Table</a></li>
                        <li><a href="{{ route('typoGraphy') }}">Typography</a></li>
                        <li><a href="{{ route('tabAddon') }}">Tab Addon</a></li>
                        <li><a href="{{ route('progressBar') }}">Progress Bar</a></li>
                        <li><a href="{{ route('testimonialPage') }}">Testimonial</a></li>
                        <li><a href="{{ route('workingProgress') }}">Working Process</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a class="nav-item" href="{{ route('contactPage') }}">Contact</a></li>
    </ul>
</nav>
