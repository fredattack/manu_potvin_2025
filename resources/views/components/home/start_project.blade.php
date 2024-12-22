<div class="rts-project-area rts-section-gap bg-project-three margin-controlerproject mt_sm--0">
    <div class="container controler">
        <div class="row g-0">
            <div class="col-lg-7">
                <!-- project area left wrapper -->
                <div class="title-area-project-w-in z-50">
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

            </div>
                <!--#region  project area left wrapper end -->
            <div class="col-lg-5">
                <div class="bg-input-project">
                    <div class="product-form">

                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <form id="contact-form" action="{{route('contact.send-form')}}" method="POST">
                            @csrf
                           @include('components.contact_inputs',['submitLabel' => 'Prenez contact maintenant !'])
                        </form>

                    </div>
                </div>
            </div>
            <!--#endregion -->
        </div>
    </div>
</div>
<script>
    $('#contact-form').on('submit', function(e) {
        e.preventDefault();
        console.log("submit")
        $.ajax({
            url: $(this).attr('action'),
            method: $(this).attr('method'),
            data: $(this).serialize(),
            success: function(response) {
                alert('Message envoyé avec succès!');
                $('#contact-form')[0].reset();
            },
            error: function(xhr) {
                alert('Une erreur est survenue.');
            }
        });
    });

</script>
