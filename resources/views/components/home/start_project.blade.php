<div class="rts-project-area rts-section-gap bg-project-three margin-controlerproject mt_sm--0">
    <div class="container controler">
        <div class="row g-0">
            <div class="col-lg-7">
                <!-- project area left wrapper -->
                <div class="title-area-project-w-in">
                        <span class="sub">
                            Prenez rendez-vous
                        </span>
                    <h2 class="title">
                        Lancez votre projet&nbsp;<br>
                        <span>AVEC NOUS !</span>
                    </h2>
                    <p class="disc w-75">
                        Découvrez nos solutions adaptées à vos besoins pour améliorer votre habitat avec style et efficacité.
                        Nos experts vous accompagnent à chaque étape pour garantir un résultat à la hauteur de vos attentes...
                    </p>
                    <div class="bg-email">
                        <div class="content-wrapper">
                            <!-- single-contact info -->
                            <div class="contact-info">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/custom/shape/01-phone.png') }}" alt="Product_icon">
                                </div>
                                <div class="discription">
                                    <span>Besoin d'aide ?</span>
                                    <h5 class="title-sm">{{$customerData->phone}}</h5>
                                </div>
                            </div>
                            <!-- single-contact info End -->
                            <!-- single-contact info -->
                            <div class="contact-info">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/custom/shape/02-mail.png') }}" alt="Product_icon">
                                </div>
                                <div class="discription">
                                    <span>Envoyez-nous un email à tout moment</span>
                                    <h5 class="title-sm">{{$customerData->email}}</h5>
                                </div>
                            </div>
                            <!-- single-contact info End -->
                        </div>
                    </div>
                </div>
                <!-- project area left wrapper end -->
            </div>
            <div class="col-lg-5">
                <div class="bg-input-project">
                    <div class="product-form">
                        <div id="form-messages"></div>
                        <form id="contact-form" action="mailer.php" method="post">
                            <div class="row">
                                <div class="col-12 ">
                                    <input type="text" placeholder="Votre Nom" name="name">
                                </div>
                                <div class="col-lg-6 mt--20">
                                    <input type="text" placeholder="Votre téléphone" name="phone" required>
                                </div>
                                <div class="col-lg-6 mt--20 mt_md--20 mt_sm--20">
                                    <input type="email" placeholder="Votre Email" name="email" required>
                                </div>

                                <div class="col-12 mt--20">
                                    <textarea placeholder="Votre message" name="message"></textarea>
                                </div>
                                <div class="col-12 mt--35">
                                    <button class="rts-btn btn-primary-3 color-h-black" type="submit">Prenez contact maintenant !
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
