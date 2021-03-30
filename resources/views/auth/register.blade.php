<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Crypto-Giant">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Crypto Giant is a powerful Bitcoin Crypto Currency Wallet and Transactional Platform for nigerian">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('assets/images') }}/favicon.png">

    <!-- Page Title  -->
    <title>Registration | Crypto-Giant</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('main') }}/css/dashlite.css?ver=1.4.0">
    <link id="skin-default" rel="stylesheet" href="{{ asset('main') }}/css/theme.css?ver=1.4.0">
</head>

<body class="nk-body npc-crypto ui-clean pg-auth">
    <!-- app body @s -->
    <div class="nk-app-root">
        <div class="nk-split nk-split-page nk-split-md">
            <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container w-lg-45">
                <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                    <a href="#" class="toggle btn btn-white btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                </div>
                <div class="nk-block nk-block-middle nk-auth-body">
                    <div class="brand-logo pb-5">
                        <a href="/" class="logo-link">
                            <img class="logo-light logo-img logo-img-lg" src="{{ asset('assets') }}/images/logo.png" srcset="{{ asset('assets') }}/images/logo.png" alt="logo">
                            <img class="logo-dark logo-img logo-img-lg" src="{{ asset('assets') }}/images/logo.png" srcset="{{ asset('assets') }}/images/logo.png" alt="logo-dark">
                        </a>
                    </div>
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">Register</h5>
                            <div class="nk-block-des">
                                <p>Create New Crypto-Giant Account</p>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <x-jet-validation-errors class="mb-4" />
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="first_name">First Name</label>
                            <input type="text" class="form-control form-control-lg" id="first_name" placeholder="Enter your first name" name="first_name" :value="old('first_name')" required autofocus autocomplete="first_name" >
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="last_name">Last Name</label>
                            <input type="text" class="form-control form-control-lg" id="last_name" placeholder="Enter your last name" name="last_name" :value="old('last_name')" required autofocus autocomplete="last_name" >
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" class="form-control form-control-lg" id="email" placeholder="Enter your email" name="email" :value="old('email')" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="password">Password</label>
                            <div class="form-control-wrap">
                                <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                </a>
                                <input type="password" class="form-control form-control-lg" id="password" placeholder="Enter your password" name="password" required autocomplete="new-password" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="password1">Confirm Password</label>
                            <div class="form-control-wrap">
                                <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                </a>
                                <input type="password" class="form-control form-control-lg" id="password1" placeholder="Confirm your password" name="password_confirmation" required autocomplete="new-password" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-control-xs custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkbox">
                                <label class="custom-control-label" for="checkbox">I agree to Crypto-Giant <a tabindex="-1">Privacy Policy</a> &amp; <a tabindex="-1" href="#"> Terms.</a></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
                        </div>
                    </form><!-- form -->
                    <div class="form-note-s2 pt-4"> Already have an account ? <a href="{{ url('login') }}"><strong>Sign in instead</strong></a>
                    </div>
                    <div class="text-center pt-4 pb-3">

                    </div>
                    <ul class="nav justify-center gx-8">
                        {{-- <li class="nav-item"><a class="nav-link" href="#">Facebook</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Google</a></li> --}}
                    </ul>
                </div><!-- .nk-block -->
                <div class="nk-block nk-auth-footer">
                    <div class="nk-block-between">
                        <ul class="nav nav-sm">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Terms & Condition</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Privacy Policy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Help</a>
                            </li>
                            <li class="nav-item dropup">
                                <a class="dropdown-toggle dropdown-indicator has-indicator nav-link" data-toggle="dropdown" data-offset="0,10"><small>English</small></a>
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                    <ul class="language-list">
                                        <li>
                                            <a href="#" class="language-item">
                                                <img src="{{ asset('main') }}/images/flags/english.png" alt="" class="language-flag">
                                                <span class="language-name">English</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                        </ul><!-- nav -->
                    </div>
                    <div class="mt-3">
                        <p>&copy; 2021 Crypto-Giant. All Rights Reserved.</p>
                    </div>
                </div><!-- nk-block -->
            </div><!-- nk-split-content -->
            <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
                <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
                    <div class="slider-init" data-slick='{"dots":true, "arrows":false}'>
                        <div class="slider-item">
                            <div class="nk-feature nk-feature-center">
                                <div class="nk-feature-img">
                                    <img class="round" src="https://res.cloudinary.com/letech-digital-solutions/image/upload/v1614425953/header-bg-b_als0rn.jpg" srcset="https://res.cloudinary.com/letech-digital-solutions/image/upload/v1614425953/header-bg-b_als0rn.jpg" alt="">
                                </div>
                                <div class="nk-feature-content py-4 p-sm-5">
                                    <h4>Crypto-Giant</h4>
                                    <p>Trade your digital coins with ease and little service charge using Crypto-Giant</p>
                                </div>
                            </div>
                        </div><!-- .slider-item -->
                        <div class="slider-item">
                            <div class="nk-feature nk-feature-center">
                                <div class="nk-feature-img">
                                    <img class="round" src="https://res.cloudinary.com/letech-digital-solutions/image/upload/v1614425953/header-bg-b_als0rn.jpg" srcset="https://res.cloudinary.com/letech-digital-solutions/image/upload/v1614425953/header-bg-b_als0rn.jpg" alt="">
                                </div>
                                <div class="nk-feature-content py-4 p-sm-5">
                                    <h4>Crypto-Giant</h4>
                                    <p>Trade your digital coins with ease and little service charge using Crypto-Giant</p>
                                </div>
                            </div>
                        </div><!-- .slider-item -->
                        <div class="slider-item">
                            <div class="nk-feature nk-feature-center">
                                <div class="nk-feature-img">
                                    <img class="round" src="https://res.cloudinary.com/letech-digital-solutions/image/upload/v1614425953/header-bg-b_als0rn.jpg" srcset="https://res.cloudinary.com/letech-digital-solutions/image/upload/v1614425953/header-bg-b_als0rn.jpg" alt="">
                                </div>
                                <div class="nk-feature-content py-4 p-sm-5">
                                    <h4>Crypto-Giant</h4>
                                    <p>Trade your digital coins with ease and little service charge using Crypto-Giant</p>
                                </div>
                            </div>
                        </div><!-- .slider-item -->
                    </div><!-- .slider-init -->
                    <div class="slider-dots"></div>
                    <div class="slider-arrows"></div>
                </div><!-- .slider-wrap -->
            </div><!-- nk-split-content -->
        </div><!-- nk-split -->
    </div><!-- app body @e -->
    <!-- JavaScript -->
    <script src="{{ asset('main') }}/js/bundle.js?ver=1.4.0"></script>
    <script src="{{ asset('main') }}/js/scripts.js?ver=1.4.0"></script>
</body>

</html>
