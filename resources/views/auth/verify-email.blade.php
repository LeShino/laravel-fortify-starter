<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials._styles-assets')
</head>
<body>

    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Reset Password') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

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
                          <img src="../../assets/images/auth/mail.html" class="img-fluid" width="80" alt="">
                          <h2 class="mt-3 mb-0">{{ __('Email verification !') }}</h2>
                          <p class="cnf-mail mb-1">
                                @if (session('status') == 'verification-link-sent')
                                    <div class="mb-4 font-medium text-sm text-green-600">
                                        A new email verification link has been emailed to you!
                                        {{-- A email has been send to youremail@domain.com. Please check for an
                                        email from company and click
                                        on the included link to reset your password. --}}
                                    </div>
                                @endif
                            </p>

                             <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                {{-- <input type="hidden" name="token" value="{{ /*$token ?? '' */ $request->route('token') }}"> --}}
                                <div class="row">
                                    <div class="col-lg-12">

                                        <div class="floating-label form-group">
                                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                            <input id="email" 
                                                type="email" 
                                                class="form-control @error('email') is-invalid @enderror" 
                                                name="email" value="{{ old('email') }}" 
                                                required autocomplete="email" 
                                                autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">
                                     {{ __('Send Password Reset Link') }}
                                </button>
                            </form>
                    </div>
                 </div>
              </div>
              <div class="col-md-6 d-md-block d-none bg-primary p-0 vh-100 overflow-hidden">
                 <img src="../../assets/images/auth/03.png" class="img-fluid gradient-main animated-scaleX" alt="images" loading="lazy">
              </div>
           </div>
        </section>
      </div>
      @include('partials._scripts-assets')
</body>
</html>