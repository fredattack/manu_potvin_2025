<div class="loader-wrapper">
    <div class="loader">
    </div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- End loader -->

<!-- progress Back to top -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
    </svg>
</div>
<!-- progress Back to top End -->

<!-- scripts start form hear -->
<script src="{{ asset('assets/js/vendor/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jqueryui.js') }}"></script>
<script src="{{ asset('assets/js/vendor/waypoint.js') }}"></script>
<script src="{{ asset('assets/js/plugins/swiper.js') }}"></script>
<script src="{{ asset('assets/js/plugins/counterup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/sal.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/waw.js') }}"></script>
<script src="{{ asset('assets/js/plugins/contact.form.js') }}"></script>
<!-- main Js -->
<script src="{{ asset('assets/js/main.js') }}"></script>
<script>
    grecaptcha.ready(function () {
        grecaptcha.execute('{{ config('app.recaptcha.site_key') }}', {action: 'contact_form'})
            .then(function (token) {
                console.log('recaptcha token', token);
                document.getElementById('recaptcha_token').value = token;
            });
    });
</script>
