<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials._styles-assets')
    </head>
    <body>
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body">
                <img src="../../assets/images/loader.html" alt="loader" class="light-loader img-fluid w-25" width="200" height="200">
            </div>
        </div>
    </div>
    <!-- loader END -->

    <div class="wrapper">
        <section class="login-content">
            <div class="row m-0 align-items-center bg-white vh-100">
                <div class="col-md-6 p-0">
                    <div class="card card-transparent auth-card shadow-none d-flex justify-content-center mb-0">
                        <div class="card-body">
                            <a href="../index.html" class="navbar-brand d-flex align-items-center mb-3">

                                <!--Logo start-->
                                <div class="logo-main">
                                    <div class="logo-normal">
                                        <svg class=" icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                                            <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                                            <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                                            <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                                        </svg>
                                    </div>
                                    <div class="logo-mini">
                                        <svg class=" icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                                            <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                                            <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                                            <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                                        </svg>
                                    </div>
                                </div>
                                <!--logo End-->
                                <h4 class="logo-title ms-3 mb-0" data-setting="app_name">Hope UI</h4>
                            </a>
{{--                            <img src="../../assets/images/avatars/01.png" class="rounded avatar-80 mb-3" alt="">--}}
{{--                            <h2 class="mb-2">Hi ! Ruben Dokidis </h2>--}}
                            <p>Enter your password to access the admin.</p>
                            <form method="POST" action="{{ route('password.update') }}">
                            {{-- <form method="POST" action="{{ route('password.confirm') }}"> --}}
                                @csrf
                                <input type="hidden" name="token" value="{{ /*$token ?? '' */ $request->route('token') }}">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="floating-label form-group">
                                            <label for="password" class="form-label">{{ __('Email Address') }}</label>
                                            <input id="email" type="email"
                                                   class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror"
                                                   value="{{ $request->email }}"
                                                   name="email"
                                                   required autocomplete="email" autofocus
                                                   aria-describedby="email"
                                                   placeholder=" ">
                                        </div>

                                        <div class="floating-label form-group">
                                            <label for="password" class="form-label">{{ __('Password') }}</label>
                                            <input type="password"
                                                   class="form-control @error('password') is-invalid @enderror"
                                                   id="password"
                                                   name="password"
                                                   required autocomplete="new-password"
                                                   aria-describedby="password" placeholder=" ">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
                                            @enderror
                                        </div>

                                        <div class="floating-label form-group">
                                            <label for="password" class="form-label">{{ __('Confirm Password') }}</label>
                                            <input class="form-control"
                                                   id="password"
                                                   type="password"
                                                   name="password_confirmation"
                                                   required autocomplete="new-password"
                                                   aria-describedby="password"
                                                   placeholder=" ">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="sign-bg">
                        <svg width="280" height="230" viewBox="0 0 431 398" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.05">
                                <rect x="-157.085" y="193.773" width="543" height="77.5714" rx="38.7857" transform="rotate(-45 -157.085 193.773)" fill="#3B8AFF"></rect>
                                <rect x="7.46875" y="358.327" width="543" height="77.5714" rx="38.7857" transform="rotate(-45 7.46875 358.327)" fill="#3B8AFF"></rect>
                                <rect x="61.9355" y="138.545" width="310.286" height="77.5714" rx="38.7857" transform="rotate(45 61.9355 138.545)" fill="#3B8AFF"></rect>
                                <rect x="62.3154" y="-190.173" width="543" height="77.5714" rx="38.7857" transform="rotate(45 62.3154 -190.173)" fill="#3B8AFF"></rect>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="col-md-6 d-md-block d-none bg-primary p-0 vh-100 overflow-hidden">
                    <img src="../../assets/images/auth/04.png" class="img-fluid gradient-main animated-scaleX" alt="images" loading="lazy">
                </div>
            </div>
        </section>
    </div>

        @include('partials._scripts-assets')

    </body>
</html>