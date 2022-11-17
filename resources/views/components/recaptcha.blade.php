@if (env('GOOGLE_RECAPTCHA_KEY'))
    <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}" style="text-align: -webkit-center;margin-top:15px">
    </div>
@endif
@if ($errors->has('g-recaptcha-response'))
    <div style="text-align: -webkit-center;margin-top: 5px">
        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="width: 40%">
            {{ $errors->first('g-recaptcha-response') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
@endif
