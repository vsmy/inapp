<footer  id="contact_us">
    <div  class="container container-footer">
        <br>
        <br>
        <br>
        <br>
        <div class="footer-wrapper ">
            <h4 class="text-center title text-green-light" style="font-family: Comic Sans MS"> Contact Us</h4>
            <form id="contact_form" method="POST" action="{{ route('contact_us') }}">
                @csrf
                @method('post')
                <input  name="name" class="form-control" placeholder="Name" aria-label="Name" required/>
                <input name="email" type="email" class="form-control" placeholder="Email" aria-label="Email" required/>
                <p class="text-danger error-msg error-msg-email error-msg-email-required">Empty field</p>
                <p class="text-danger error-msg error-msg-email error-msg-email-email">Incorrect value</p>
                <input name="company" class="form-control" placeholder="Company" aria-label="Company" required/>

                <textarea name="message" class="form-control " style="margin-top: 20px" id="textarea" placeholder="Message" rows="3" required></textarea>

                <button class="btn btn-primary g-recaptcha"  data-callback="recaptchaCallback" type="submit">Send</button>
                <p class="text-danger error-msg error-msg-GLOBAL-">Something went wrong! Try again later</p>
                <p class="text-danger error-msg error-msg-recaptcha error-msg-recaptcha-failed">Incorrect value</p>


                <div class="success-msg">
                    <div class="success-msg-icon-close success-msg-close"></div>
                    <div class="success-msg-icon-checkmark mb-4"></div>
                    <p class="text-center text-white">Thank you! <br>We will be touch within 24 hours.</p>
                    <button type="button" class="btn btn-primary success-msg-close mx-auto">OK</button>
                </div>
            </form>
        </div>
    </div>
</footer>