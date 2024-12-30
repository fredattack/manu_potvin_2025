<div class="row">
    <div class="col-12 ">
        <input type="text" placeholder="Votre Nom" name="name" required>
    </div>
    <div class="col-lg-6 mt--20">
        <input type="text" placeholder="Votre téléphone" name="phone" required>
    </div>
    <div class="col-lg-6 mt--20 mt_md--20 mt_sm--20">
        <input type="email" placeholder="Votre Email" name="email" required>
    </div>
    <div class="col-12 mt--20">

        <div class="form-check">
            <input id="chekboxNewsletter"  type="checkbox" name="newsletter" checked>
            <label class="form-check-label" for="chekboxNewsletter" style="font-size: large">
                S'abonner à notre newsletter
            </label>
        </div>

    </div>

    <div class="col-12 mt--20">
        <textarea placeholder="Votre message" name="message" required></textarea>
    </div>
    <div class="col-12 mt--35">
        <button class="rts-btn btn-primary-3 color-h-black" type="submit">{{$submitLabel}}
        </button>
    </div>


</div>
