@extends('layouts.app')

@section('content')
  
 <div class="container">
          <div class="fxt-content-wrap">
            <div class="fxt-heading-content">
                <div class="fxt-inner-wrap">
                    <div class="fxt-transformY-50 fxt-transition-delay-3">
                        <a href="/" class="fxt-logo"><img src="assets/img/logo.png" alt="Logo"></a>
                    </div>
                    <div class="fxt-transformY-50 fxt-transition-delay-4">
                        <h1 class="fxt-main-title">Kayıt</h1>
                    </div>
                
                </div>
            </div>
            <div class="fxt-form-content">
          <div class="fxt-main-form">
                    <div class="fxt-inner-wrap">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                              <div class="row">
                           <div class="col-xl-6">
                                    <div class="form-group">

                            
                                <input id="name" type="text"  class="form-control @error('name') is-invalid @enderror" name="name" placeholder="adınız" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="col-xl-6">
                                    <div class="form-group">
                                <input id="email" type="email" placeholder="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="col-xl-6">
                                    <div class="form-group">
                                <input id="password" type="password" placeholder="şifre" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                           <div class="col-xl-6">
                                    <div class="form-group">
                                <input id="password-confirm" type="password" placeholder="tekrar şifre"  class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Kayıt') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
 </div>
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