@extends('layouts.app')

@section('content')

<div class="container">

    <section class="fxt-template-animation fxt-template-layout31">
        <span class="fxt-shape fxt-animation-active"></span>
        <div class="fxt-content-wrap">
            <div class="fxt-heading-content">
                <div class="fxt-inner-wrap">
                    <div class="fxt-transformY-50 fxt-transition-delay-3">
                        <a href="login-31.html" class="fxt-logo"><img src="assets/img/logo.png" alt="Logo"></a>
                    </div>
                    <div class="fxt-transformY-50 fxt-transition-delay-4">
                        <h1 class="fxt-main-title">Giriş İçin email ve şifrenizi girin</h1>
                    </div>

                </div>
            </div>
            
            <div class="fxt-form-content">
              <div class="fxt-main-form">
                <div class="fxt-inner-wrap">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        
                        
                        <div class="col-10">
                            <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                           

                            <div class="col-md-10">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                         <div class="col-md-10">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label fxt-switcher-text"  for="remember">
                                    {{ __('Hatırla Beni') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Giriş') }}
                            </button>

                            @if (Route::has('password.request'))
                            <center><a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Şifrenizi Unuttunuz mu?') }}
                            </a></center>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>


</div></section>
@endsection
<script src="assets/js/jquery-3.5.0.min.js"></script>
<!-- Bootstrap js -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Imagesloaded js -->
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<!-- Validator js -->
<script src="assets/js/validator.min.js"></script>
<!-- Custom Js -->
<script src="assets/js/main.js"></script>