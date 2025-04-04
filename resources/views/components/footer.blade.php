<div class="rts-footer-area footer-three rts-section-gapTop footer-bg-2">
    <div class="container pb--100 pb_sm--40">
        <div class="row g-5">
            <div class="col-xl-3 col-lg-6">
                <div class="footer-three-single-wized left">
                    <a href="index" class="logo_footer">
                        <img src="{{ asset('assets/images/custom/logo/logo_full.png') }}" alt="Logo-image">
                    </a>
                    <p class="disc">N’attendez plus ! Contactez-nous dès aujourd’hui pour donner vie à vos projets et bénéficier de solutions sur mesure parfaitement adaptées à vos besoins.</p>
                    <ul class="social-three-wrapper">
                        <li>
                            <a href="https://www.facebook.com/PotvinManu/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        </li>
{{--                        <li>--}}
{{--                            <a href="#"><i class="fab fa-twitter"></i></a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#"><i class="fab fa-linkedin-in"></i></a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#"><i class="fab fa-instagram"></i></a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#"><i class="fab fa-skype"></i></a>--}}
{{--                        </li>--}}
                    </ul>
                </div>
            </div>
            <!-- footer three mid area -->
            <div class="col-xl-6 col-lg-6">
                <div class="row">
                    <!-- footer mid area left -->
                    <div class="col-lg-6">
                        <div class="footer-three-single-wized mid-left">
                            <h5 class="title">Informations</h5>
                            <div class="body">
                                <div class="info-wrapper">
                                    <div class="single">
                                        <ul class="icon">
                                            <li>
                                                <i class="fas fa-phone-alt"></i>
                                            </li>
                                        </ul>
                                        <div class="info">
                                            <span>Appelez nous 24/7</span>
                                            <a href="#">{{$customerData->phone}}</a>
                                        </div>
                                    </div>
                                    <div class="single">
                                        <ul class="icon">
                                            <li>
                                                <i class="far fa-envelope"></i>
                                            </li>
                                        </ul>
                                        <div class="info">
                                            <span>Des questions ? </span>
                                            <a href="#">{{$customerData->email}}</a>
                                        </div>
                                    </div>
                                    <div class="single">
                                        <ul class="icon">
                                            <li>
                                                <i class="fas fa-map-marker-alt"></i>
                                            </li>
                                        </ul>
                                        <div class="info">
                                            <span>Notre Adresse</span>
                                            <a href="#">{!! $customerData->address !!}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- footer mid area left end -->

                    <!-- footer mid area right -->
                    <div class="col-lg-6">
                        <div class="footer-three-single-wized mid-right">
                            <h5 class="title">Restez informé</h5>
                            <div class="body">
                                <div class="update-wrapper">
                                    <p class="disc">Inscrivez-vous pour recevoir nos dernières actualités et articles. Nous ne vous enverrons pas de courriers indésirables.</p>
                                    <form class="email-footer-area" action="{{route('contact.newsletter')}}" method="post">
                                        @csrf
                                        <input type="email" placeholder="Saisissez votre adresse email" name="email" required>
                                        <button type="submit">
                                            <i class="fas fa-location-arrow"></i>
                                        </button>
                                    </form>
                                    <div class="note-area">
                                        <p>
                                            <span>Remarque&nbsp;:</span> Nous ne partagerons pas votre email.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- footer mid area right end -->
                </div>
            </div>
            <!-- footer three mid area ENd -->
            
            <!-- Intégration des liens SEO locaux -->
            @include('components.footer-seo-links')
            
        </div>
    </div>
    <div class="copyright-area ptb--20">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="disc text-center">
                        Manu potvin - Copyright {{now()->format('Y')}}. All rights reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
