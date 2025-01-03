<meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="@yield('meta_description', 'Description par défaut de la page')">
<meta name="keywords" content="@yield('meta_keywords', 'châssis, portes, fenêtres')">

<!-- Meta Tags pour Open Graph -->
<meta property="og:title" content="@yield('og_title', 'Titre par défaut du site')">
<meta property="og:description" content="@yield('og_description', 'Description par défaut du site pour les réseaux sociaux')">
<meta property="og:image" content="@yield('og_image', asset('images/default-social.jpg'))">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:type" content="website">
<meta property="og:locale" content="fr_FR">
<meta property="og:site_name" content="Nom de votre société">

<!-- Meta Tags pour Twitter Cards -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="@yield('twitter_title', 'Titre par défaut pour Twitter')">
<meta name="twitter:description" content="@yield('twitter_description', 'Description par défaut pour Twitter')">
<meta name="twitter:image" content="@yield('twitter_image', asset('images/default-social.jpg'))">
<meta name="twitter:site" content="@VotreCompteTwitter">
<meta name="twitter:creator" content="@VotreCompteTwitter">

<!-- Autres meta tags -->
<link rel="canonical" href="{{ url()->current() }}">
<meta name="google-site-verification" content="c5hfFXSFb7nsZGJVL4r4-ELtDr4zzQbnZIdQnrJdeNc">


<title>Manu Potvin - @yield('title')</title>
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/custom/logo/favicon_manu.png') }}">
<link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/plugins/fontawesome-5.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/plugins/unicons.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
