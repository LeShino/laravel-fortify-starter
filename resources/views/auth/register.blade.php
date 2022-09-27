<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials._styles-assets')
</head>
<body>

   <!-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->




    <div class="wrapper">
      <section class="login-content">
         <div class="row m-0 align-items-center bg-white vh-100">
               <div class="col-md-6 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden">
               <img src="{{ asset('assets/images/auth/05.png') }}images/auth/05.png" class="img-fluid gradient-main animated-scaleX" alt="images">
            </div>
            <div class="col-md-6">
               <div class="row justify-content-center">
                  <div class="col-md-10">
                     <div class="card card-transparent auth-card shadow-none d-flex justify-content-center mb-0">
                        <div class="card-body">
                           <a href="../../dashboard/index.html" class="navbar-brand d-flex align-items-center mb-3">
                              <!--Logo start-->
                              <svg width="30" class="" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                                  <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                                  <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                                  <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                              </svg>
                              <!--logo End-->
                              <h4 class="logo-title ms-3">Hope UI</h4>
                           </a>
                           <h2 class="mb-2 text-center">{{ __('Register') }}</h2>
                           <p class="text-center">Create your Hope UI account.</p>
                           <form method="POST" action="{{ route('register') }}">
                               @csrf
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <label for="full-name" class="form-label">Full Name</label>
{{--                                       <input type="text" class="form-control" id="full-name" placeholder=" ">--}}
                                       <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                       @error('email')
                                       <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                       @enderror
                                    </div>
                                 </div>
{{--                                 <div class="col-lg-6">--}}
{{--                                    <div class="form-group">--}}
{{--                                       <label for="last-name" class="form-label">Last Name</label>--}}
{{--                                       <input type="text" class="form-control" id="last-name" placeholder=" ">--}}
{{--                                    </div>--}}
{{--                                 </div>--}}
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <label for="email" class="form-label">Email</label>
{{--                                       <input type="email" class="form-control" id="email" placeholder=" ">--}}
                                       <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                       @error('email')
                                       <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                       @enderror
                                    </div>
                                 </div>
{{--                                 <div class="col-lg-6">--}}
{{--                                    <div class="form-group">--}}
{{--                                       <label for="phone" class="form-label">Phone No.</label>--}}
{{--                                       <input type="text" class="form-control" id="phone" placeholder=" ">--}}
{{--                                    </div>--}}
{{--                                 </div>--}}
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <label for="password" class="form-label">Password</label>
{{--                                       <input type="password" class="form-control" id="password" placeholder=" ">--}}
                                       <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                       @error('password')
                                       <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                       @enderror
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <label for="confirm-password" class="form-label">Confirm Password</label>
{{--                                       <input type="text" class="form-control" id="confirm-password" placeholder=" ">--}}
                                       <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                 </div>
                                 <div class="col-lg-12 d-flex justify-content-center">
                                    <div class="form-check mb-3">
                                       <input type="checkbox" class="form-check-input" id="customCheck1">
                                       <label class="form-check-label" for="customCheck1">I agree with the terms of use</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="d-flex justify-content-center">
{{--                                 <button type="submit" class="btn btn-primary">Sign Up</button>--}}
                                 <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                 </button>
                              </div>
                              <p class="text-center my-3">or sign in with other accounts?</p>
                              <div class="d-flex justify-content-center">
                                 <ul class="list-group list-group-horizontal list-group-flush">
                                    <li class="list-group-item border-0 pb-0">
                                       <a href="#"><img src="{{ asset('assets/images/brands/fb.svg') }}" alt="fb"></a>
                                    </li>
                                    <li class="list-group-item border-0 pb-0">
                                       <a href="#"><img src="{{ asset('assets/images/brands/gm.svg') }}" alt="gm"></a>
                                    </li>
                                    <li class="list-group-item border-0 pb-0">
                                       <a href="#"><img src="{{ asset('assets/images/brands/im.svg') }}" alt="im"></a>
                                    </li>
                                    <li class="list-group-item border-0 pb-0">
                                       <a href="#"><img src="{{ asset('assets/images/brands/li.svg') }}" alt="li"></a>
                                    </li>
                                 </ul>
                              </div>
                              <p class="mt-3 text-center">
                                 Already have an Account <a href="sign-in.html" class="text-underline">Sign In</a>
                              </p>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sign-bg sign-bg-right">
                  <svg width="280" height="230" viewBox="0 0 421 359" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <g opacity="0.05">
                        <rect x="-15.0845" y="154.773" width="543" height="77.5714" rx="38.7857" transform="rotate(-45 -15.0845 154.773)" fill="#3A57E8"/>
                        <rect x="149.47" y="319.328" width="543" height="77.5714" rx="38.7857" transform="rotate(-45 149.47 319.328)" fill="#3A57E8"/>
                        <rect x="203.936" y="99.543" width="310.286" height="77.5714" rx="38.7857" transform="rotate(45 203.936 99.543)" fill="#3A57E8"/>
                        <rect x="204.316" y="-229.172" width="543" height="77.5714" rx="38.7857" transform="rotate(45 204.316 -229.172)" fill="#3A57E8"/>
                     </g>
                  </svg>
               </div>
            </div>
         </div>
      </section>
      </div>

    @include('partials._scripts-assets')

</body>
</html>
