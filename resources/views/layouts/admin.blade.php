<!DOCTYPE html>
<html {{ str_replace('_', '-', app()->getLocale()) }} class="js">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Crypto Giant is a powerful Bitcoin Crypto Currency Wallet and Transactional Platform for nigerian">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="shortcut icon" href="{{ asset('assets/images') }}/favicon.png">
		<!-- Site Title  -->
		<title>Crypto Giant - Bitcoin Crypto Currency Wallet</title>
    <!-- Page Title  -->

    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('main') }}/css/dashlite.css?ver=1.4.0">
    <link id="skin-default" rel="stylesheet" href="{{ asset('main') }}/css/theme.css?ver=1.4.0">

</head>

<body class="nk-body npc-crypto has-sidebar has-sidebar-fat ui-clean ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            <div class="nk-sidebar nk-sidebar-fat nk-sidebar-fixed" data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand">
                        <a href="{{ url('admin/home') }}" class="logo-link nk-sidebar-logo">

                            <img class="logo-dark logo-img" src="{{ asset('assets') }}/images/logo.png" srcset="{{ asset('assets') }}/images/logo.png" alt="logo-dark">

                        </a>
                    </div>
                    <div class="nk-menu-trigger mr-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                    </div>
                </div><!-- .nk-sidebar-element -->
                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-body" data-simplebar>
                        <div class="nk-sidebar-content">
                            <div class="nk-sidebar-widget d-none d-xl-block">
                                <div class="user-account-info between-center">
                                    <div class="user-account-main">
                                        <h6 class="overline-title-alt">Available Balance</h6>
                                        <div class="user-balance">{{ Auth::guard('admin')->user()->getBtcValue() }} <small class="currency currency-btc">BTC</small></div>
                                        <div class="user-balance">{{ Auth::guard('admin')->user()->getLcValue() }} <small class="currency currency-btc">LTC</small></div>
                                        <div class="user-balance">{{ Auth::guard('admin')->user()->getDcValue() }} <small class="currency currency-btc">DGC</small></div>

                                    </div>
                                    <a href="#" class="btn btn-white btn-icon btn-light"><em class="icon ni ni-line-chart"></em></a>
                                </div>
                                {{-- <ul class="user-account-data gy-1">
                                    <li>
                                        <div class="user-account-label">
                                            <span class="sub-text">Bought</span>
                                        </div>
                                        <div class="user-account-value">
                                            <span class="lead-text">+ 0.00 <span class="currency currency-btc">BTC</span></span>
                                            <span class="text-warning ml-2">0% <em class="icon ni ni-arrow-right"></em></span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="user-account-label">
                                            <span class="sub-text">Sold</span>
                                        </div>
                                        <div class="user-account-value">
                                            <span class="sub-text">0.0000 <span class="currency currency-btc">BTC</span></span>
                                        </div>
                                    </li>
                                </ul> --}}
                                <div class="user-account-actions">
                                    <ul class="g-3">
                                        <li><a href="{{ route('admin.orders') }}" class="btn btn-lg btn-primary"><span>Transactions</span></a></li>
                                        <li><a href="{{ route('admin.wallets') }}" class="btn btn-lg btn-warning"><span>Wallet</span></a></li>
                                    </ul>
                                </div>
                            </div><!-- .nk-sidebar-widget -->
                            <div class="nk-sidebar-widget nk-sidebar-widget-full d-xl-none pt-0">
                                <a class="nk-profile-toggle toggle-expand" data-target="sidebarProfile" href="#">
                                    <div class="user-card-wrap">
                                        <div class="user-card">
                                            <div class="user-avatar">
                                                <span>AB</span>
                                            </div>
                                            <div class="user-info">
                                                <span class="lead-text">{{ Auth::guard('admin')->user()->name }}</span>
                                                <span class="sub-text">{{ Auth::guard('admin')->user()->email }}</span>
                                            </div>
                                            <div class="user-action">
                                                <em class="icon ni ni-chevron-down"></em>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="nk-profile-content toggle-expand-content" data-content="sidebarProfile">
                                    <div class="user-account-info between-center">
                                        <div class="user-account-main">
                                            <h6 class="overline-title-alt">Available Balance</h6>
                                            <div class="user-balance">{{ Auth::guard('admin')->user()->getBtcValue() }} <small class="currency currency-btc">BTC</small></div>
                                            <div class="user-balance">{{ Auth::guard('admin')->user()->getLcValue() }} <small class="currency currency-btc">LTC</small></div>
                                        <div class="user-balance">{{ Auth::guard('admin')->user()->getDcValue() }} <small class="currency currency-btc">DGC</small></div>

                                        </div>
                                        <a href="#" class="btn btn-icon btn-light"><em class="icon ni ni-line-chart"></em></a>
                                    </div>
                                    <ul class="user-account-data">
                                        <li>
                                            <div class="user-account-label">
                                                <span class="sub-text">Sold (7d)</span>
                                            </div>
                                            <div class="user-account-value">
                                                <span class="lead-text">+ 0.000 <span class="currency currency-btc">BTC</span></span>
                                                <span class="text-success ml-2">0% <em class="icon ni ni-arrow-long-up"></em></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="user-account-label">
                                                <span class="sub-text">Bought</span>
                                            </div>
                                            <div class="user-account-value">
                                                <span class="sub-text text-base">0.00000 <span class="currency currency-btc">BTC</span></span>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="user-account-links">
                                        <li><a href="#" class="link"><span>Withdraw Funds</span> <em class="icon ni ni-wallet-out"></em></a></li>
                                        <li><a href="#" class="link"><span>Deposit Funds</span> <em class="icon ni ni-wallet-in"></em></a></li>
                                    </ul>

                                    <ul class="link-list">
                                        <li><a href="{{ route('admin.logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><em class="icon ni ni-signout"></em><span>Sign out</span></a>
                                            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST">
                                            {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- .nk-sidebar-widget -->
                            <div class="nk-sidebar-menu">
                                <!-- Menu -->
                                <ul class="nk-menu">
                                    <li class="nk-menu-heading">
                                        <h6 class="overline-title">Menu</h6>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ url('admin/home') }}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                            <span class="nk-menu-text">Dashboard</span>
                                        </a>
                                    </li>

                                    <li class="nk-menu-item">
                                        <a href="{{ url('admin/wallets') }}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-wallet-alt"></em></span>
                                            <span class="nk-menu-text">Wallets</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ url('admin/users') }}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                            <span class="nk-menu-text">Users</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ url('admin/orders') }}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-repeat"></em></span>
                                            <span class="nk-menu-text">Transaction</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ url('admin/prices') }}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-coins"></em></span>
                                            <span class="nk-menu-text">Prices</span>
                                        </a>
                                    </li>
                                    <li><a href="{{ route('admin.logout') }}" class="nk-menu-link"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <span class="nk-menu-icon"><em class="icon ni ni-signout"></em></span>
                                        <span class="nk-menu-text">Sign out</span>
                                    </a>
                                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST">
                                        {{ csrf_field() }}
                                        </form>
                                    </li>


                                </ul><!-- .nk-menu -->
                            </div><!-- .nk-sidebar-menu -->

                            <div class="nk-sidebar-footer">
                                <ul class="nk-menu nk-menu-footer">
                                    <li class="nk-menu-item">
                                        <a href="{{ url('faq-and-support') }}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-help-alt"></em></span>
                                            <span class="nk-menu-text">Support</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item ml-auto">
                                        <div class="dropup">
                                            <a href="#" class="nk-menu-link dropdown-indicator has-indicator" data-toggle="dropdown" data-offset="0,10">
                                                <span class="nk-menu-icon"><em class="icon ni ni-globe"></em></span>
                                                <span class="nk-menu-text">English</span>
                                            </a>

                                        </div>
                                    </li>
                                </ul><!-- .nk-footer-menu -->
                            </div><!-- .nk-sidebar-footer -->
                        </div><!-- .nk-sidebar-contnet -->
                    </div><!-- .nk-sidebar-body -->
                </div><!-- .nk-sidebar-element -->
            </div>
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <div class="nk-header nk-header-fluid nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ml-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-brand d-xl-none">
                                <a href="{{ url('admin/home') }}" class="logo-link">
                                    <img class="logo-light logo-img" src="{{ asset('assets') }}/images/logo.png" srcset="{{ asset('assets') }}/images/logo.png" alt="logo" width="150px">


                                </a>
                            </div>
                            <div class="nk-header-news d-none d-xl-block">
                                <div class="nk-news-list">
                                    <a class="nk-news-item" href="#">
                                        <div class="nk-news-icon">
                                            <em class="icon ni ni-card-view"></em>
                                        </div>
                                        <div class="nk-news-text">
                                            <p>The best crypto exchange has to offer <span> Read About Crypto-Giant</span></p>
                                            <em class="icon ni ni-external"></em>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                                <div class="user-info d-none d-md-block">

                                                    <div class="user-status user-status-verified">Admin</div>

                                                    <div class="user-name dropdown-indicator">{{ Auth::guard('admin')->user()->name }}</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>CG</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">{{ Auth::guard('admin')->user()->name }}</span>
                                                        <span class="sub-text">{{ Auth::guard('admin')->user()->email }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner user-account-info">
                                                <h6 class="overline-title-alt">Wallet Account</h6>
                                                <div class="user-balance">{{ Auth::guard('admin')->user()->getBtcValue() }} <small class="currency currency-btc">BTC</small></div>
                                                <div class="user-balance">{{ Auth::guard('admin')->user()->getLcValue() }} <small class="currency currency-btc">LTC</small></div>
                                        <div class="user-balance">{{ Auth::guard('admin')->user()->getDcValue() }} <small class="currency currency-btc">DGC</small></div>



                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="{{ url('profile') }}"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                    {{-- <li><a href="html/crypto/profile-security.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li> --}}

                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="{{ route('admin.logout') }}"
                                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><em class="icon ni ni-signout"></em><span>Sign out</span></a>
                                                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST">
                                                        {{ csrf_field() }}
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown notification-dropdown mr-n1">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
                                            <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right dropdown-menu-s1">
                                            <div class="dropdown-head">
                                                <span class="sub-title nk-dropdown-title">Notifications</span>
                                                <a href="#">Mark All as Read</a>
                                            </div>
                                            <div class="dropdown-body">
                                                <div class="nk-notification">

                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">The <span>Admin Account has been</span> activated. Welcome to Crypto-Giant Admin Panel</div>
                                                            <div class="nk-notification-time">{{Auth::guard('admin')->user()->created_at->format('d/M/Y')}}</div>
                                                        </div>
                                                    </div><!-- .dropdown-inner -->

                                                </div>
                                            </div><!-- .nk-dropdown-body -->
                                            <div class="dropdown-foot center">
                                                <a>Crypto-Giant</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            {{$slot}}



 <div class="nk-footer nk-footer-fluid">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; 2021 Crypto-Giant. Developed by <a href="https://arome.dev" target="_blank">Arome</a>
                            </div>
                            <div class="nk-footer-links">
                                <ul class="nav nav-sm">
                                    <li class="nav-item"><a class="nav-link" href="{{ url('faq-and-support') }}">Terms</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ url('faq-and-support') }}">Privacy</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ url('faq-and-support') }}">Help</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{ asset('main') }}/js/bundle.js?ver=1.4.0"></script>
    <script src="{{ asset('main') }}/js/scripts.js?ver=1.4.0"></script>
    <script src="{{ asset('main') }}/js/charts/chart-crypto.js?ver=1.4.0"></script>
</body>

</html>
