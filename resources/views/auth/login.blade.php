<!doctype html>
<html lang="en">
<head>
    @include('partials._styles-assets')
</head>
<body>
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body">
                <img src="{{asset('assets/images/loader.html')}}" alt="loader" class="light-loader img-fluid w-25" width="200" height="200">
            </div>
        </div>
    </div>
    <!-- loader END -->

    <div class="wrapper">
    <section class="login-content">
        <div class="row m-0 align-items-center bg-white h-100">
            <div class="col-md-6">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="card card-transparent shadow-none d-flex justify-content-center mb-0 auth-card iq-auth-form">
                            <div class="card-body">
                                <a href="#" class="navbar-brand d-flex align-items-center mb-3">
                                    <h4 class="logo-title ms-3 mb-0" data-setting="app_name">AdLabro UI</h4>
                                </a>
                                <h2 class="mb-2 text-center">Connexion</h2>
                                <p class="text-center">Login to stay connected.</p>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="email" class="form-label">{{ __('Adresse Email ') }}</label>
                                                <input id="email" aria-describedby="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" aria-describedby="password">

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12 d-flex justify-content-between">
                                            <div class="form-check mb-3">

                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="remember">
                                                    {{ __('Se souvenir de moi') }}
                                                </label>
                                            </div>
                                            <!-- @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif -->
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}">Mot de passe oublié?</a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Connexion') }}
                                        </button>
                                    </div>
                                    <p class="text-center my-3">or sign in with other accounts?</p>
                                    <div class="d-flex justify-content-center">
                                        <ul class="list-group list-group-horizontal list-group-flush">
                                            <li class="list-group-item border-0 pb-0">
                                                <a href="#"><img src="{{asset('assets/images/brands/fb.svg')}}" alt="fb" loading="lazy"></a>
                                            </li>
                                            <li class="list-group-item border-0 pb-0">
                                                <a href="#"><img src="{{asset('assets/images/brands/gm.svg')}}" alt="gm" loading="lazy"></a>
                                            </li>
                                            <li class="list-group-item border-0 pb-0">
                                                <a href="#"><img src="{{asset('assets/images/brands/im.svg')}}" alt="im" loading="lazy"></a>
                                            </li>
                                            <li class="list-group-item border-0 pb-0">
                                                <a href="#"><img src="{{asset('assets/images/brands/li.svg')}}" alt="li" loading="lazy"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <p class="mt-3 text-center">
                                        Vous n'avez pas de compte ? <a href="{{ route('register') }}" class="text-underline">S'inscrire.</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sign-bg">
                    <svg width="280" height="230" viewBox="0 0 431 398" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.05">
                            <rect x="-157.085" y="193.773" width="543" height="77.5714" rx="38.7857" transform="rotate(-45 -157.085 193.773)" fill="#3B8AFF"/>
                            <rect x="7.46875" y="358.327" width="543" height="77.5714" rx="38.7857" transform="rotate(-45 7.46875 358.327)" fill="#3B8AFF"/>
                            <rect x="61.9355" y="138.545" width="310.286" height="77.5714" rx="38.7857" transform="rotate(45 61.9355 138.545)" fill="#3B8AFF"/>
                            <rect x="62.3154" y="-190.173" width="543" height="77.5714" rx="38.7857" transform="rotate(45 62.3154 -190.173)" fill="#3B8AFF"/>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="col-md-6 d-md-block d-none bg-primary p-0 vh-100 overflow-hidden">
                <img src="{{asset('assets/images/auth/01.png')}}" class="img-fluid gradient-main animated-scaleX" alt="images" loading="lazy">
            </div>
        </div>
    </section>
</div>
    @include('partials._scripts-assets')
</body>
</html>
