<x-admin-layout>

    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-head-sub"><span>Welcome!</span>
                    </div>
                    <div class="nk-block-between-md g-4">
                        <div class="nk-block-head-content">
                            <h2 class="nk-block-title fw-normal">Admin Crypto-Gaint</h2>
                            <div class="nk-block-des">
                                <p>At a glance summary of your account. Have fun!</p>
                            </div>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <ul class="nk-block-tools gx-3">
                                <li><a href="{{ route('admin.orders') }}" class="btn btn-primary"><span>Transactions</span> <em class="icon ni ni-arrow-long-right"></em></a></li>
                                <li><a href="{{ route('admin.wallets') }}" class="btn btn-white btn-light"><span>Wallet</span> <em class="icon ni ni-arrow-long-right d-none d-sm-inline-block"></em></a></li>

                            </ul>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row gy-gs">
                        <div class="col-lg-5 col-xl-4">
                            <div class="nk-block">
                                <div class="nk-block-head-xs">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title title">Overview</h5>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-bordered text-light is-dark h-100">
                                        <div class="card-inner">
                                            <div class="nk-wg7">
                                                <div class="nk-wg7-stats">
                                                    <div class="nk-wg7-title">Total Volume of Sales</div>
                                                    <div class="number-lg amount">&#x20a6;{{ number_format($total_sales_ngn) }}</div>
                                                    <div class="number-lg amount">${{ number_format($total_sales_usd) }}</div>
                                                </div>
                                                <div class="nk-wg7-stats-group">
                                                    <div class="nk-wg7-stats w-50">
                                                        <div class="nk-wg7-title">Wallets</div>
                                                        <div class="number-lg">3</div>
                                                    </div>
                                                    <div class="nk-wg7-stats w-50">
                                                        <div class="nk-wg7-title">Transactions</div>
                                                        <div class="number">{{ count($orders) }}</div>
                                                    </div>
                                                </div>

                                            </div><!-- .nk-wg7 -->
                                        </div><!-- .card-inner -->
                                    </div><!-- .card -->
                                </div><!-- .nk-block -->
                            </div><!-- .nk-block -->
                        </div><!-- .col -->
                        <div class="col-lg-7 col-xl-8">
                            <div class="nk-block">
                                <div class="nk-block-head-xs">
                                    <div class="nk-block-between-md g-2">
                                        <div class="nk-block-head-content">
                                            <h5 class="nk-block-title title">Digital Wallets</h5>
                                        </div>
                                        <div class="nk-block-head-content">
                                            <a href="#" class="link link-primary">See All</a>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="row g-2">
                                    <div class="col-sm-4">
                                        <div class="card bg-light">
                                            <div class="nk-wgw sm">
                                                <a class="nk-wgw-inner" href="#">
                                                    <div class="nk-wgw-name">
                                                        <div class="nk-wgw-icon">
                                                            <em class="icon ni ni-sign-btc"></em>
                                                        </div>
                                                        <h5 class="nk-wgw-title title">Bitcoin Wallet</h5>
                                                    </div>
                                                    <div class="nk-wgw-balance">
                                                        <div class="amount">{{ $btc_balance }}<span class="currency currency-btc">BTC</span></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                    <div class="col-sm-4">
                                        <div class="card bg-light">
                                            <div class="nk-wgw sm">
                                                <a class="nk-wgw-inner" href="#">
                                                    <div class="nk-wgw-name">
                                                        <div class="nk-wgw-icon">
                                                            <em class="icon ni ni-sign-btc"></em>
                                                        </div>
                                                        <h5 class="nk-wgw-title title">Dogecoin</h5>
                                                    </div>
                                                    <div class="nk-wgw-balance">
                                                        <div class="amount">{{ $dgc_balance }}<span class="currency currency-nio">DGC</span></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div><!-- .col -->

                                    <div class="col-sm-4">
                                        <div class="card bg-light">
                                            <div class="nk-wgw sm">
                                                <a class="nk-wgw-inner" href="#">
                                                    <div class="nk-wgw-name">
                                                        <div class="nk-wgw-icon">
                                                            <em class="icon ni ni-sign-ltc"></em>
                                                        </div>
                                                        <h5 class="nk-wgw-title title">LiteCoin Wallet</h5>
                                                    </div>
                                                    <div class="nk-wgw-balance">
                                                        <div class="amount">{{ $lc_balance }}<span class="currency currency-eth">LTC</span></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .nk-block -->

                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .nk-block -->
                <div class="nk-block nk-block-lg">
                    <div class="row gy-gs">
                        <div class="col-md-6">
                            <div class="card-head">
                                <div class="card-title  mb-0">
                                    <h5 class="title">Recent Activities</h5>
                                </div>
                                <div class="card-tools">
                                    <ul class="card-tools-nav">

                                        <li class="active"><a href="#">Recent</a></li>
                                    </ul>
                                </div>
                            </div><!-- .card-head -->
                            <div class="tranx-list card card-bordered">
                                @if(count($orders))
                                @foreach ($orders as $order)
                                <div class="tranx-item">
                                    <div class="tranx-col">
                                        <div class="tranx-info">
                                            <div class="tranx-badge">
                                                <span class="tranx-icon icon ni ni-coins"></span>
                                            </div>
                                            <div class="tranx-data">
                                                <div class="tranx-label">{{ $order->mode }} @if($order->coin == 'BTC')
                                                Bitcoin
                                                @elseif($order->coin == 'LTC')
                                                Litecoin
                                                @else
                                                    Dogecoin
                                                @endif
                                                @if($order->status == 1)
                                                <span class="text-warning"> &nbsp;(Pending)</span>
                                                @else
                                                <span class="text-success"> &nbsp;(Completed)</span>
                                                @endif
                                                </div>
                                                <div class="tranx-date">{{ $order->created_at->format('d/m/Y') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tranx-col">
                                        <div class="tranx-amount">
                                            <div class="number">{{ $order->crypto_unit }} <span class="currency currency-btc">{{ $order->coin }}</span></div>
                                            <div class="number-sm">{{ number_format($order->amount) }} <span class="currency currency-usd">{{ $order->currency_type }}</span></div>
                                        </div>
                                    </div>
                                </div><!-- .nk-tranx-item -->
                                @endforeach
                                @else
                                <div class="tranx-item">
                                    <div class="tranx-col">
                                        <div class="tranx-info">
                                            <div class="tranx-data">
                                                No Transaction Yet
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif

                            </div><!-- .tranx-list -->
                        </div><!-- .col -->
                        <div class="col-md-6">
                            <div class="card-head">
                                <div class="card-title mb-0">
                                    <h5 class="title">Balance Flow</h5>
                                </div>
                                <div class="card-tools">
                                    <ul class="card-tools-nav">

                                        <li class="active"><a href="#">This Year</a></li>
                                    </ul>
                                </div>
                            </div><!-- .card-title -->
                            <div class="card card-bordered">
                                <div class="card-inner">
                                    <div class="nk-wg4">
                                        <div class="nk-wg4-group justify-center gy-3 gx-4">
                                            <div class="nk-wg4-item">
                                                <div class="sub-text">
                                                    <div class="dot dot-lg sq" data-bg="#5ce0aa"></div> <span>Received</span>
                                                </div>
                                            </div>
                                            <div class="nk-wg4-item">
                                                <div class="sub-text">
                                                    <div class="dot dot-lg sq" data-bg="#798bff"></div> <span>Send</span>
                                                </div>
                                            </div>
                                            <div class="nk-wg4-item">
                                                <div class="sub-text">
                                                    <div class="dot dot-lg sq" data-bg="#f6ca3e"></div><span>Withdraw</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-ck3">
                                        <canvas class="chart-account-summary" id="summaryBalance"></canvas>
                                    </div>
                                </div><!-- .card-inner -->
                            </div><!-- .card -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .nk-block -->

                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-inner card-inner-lg">
                            <div class="align-center flex-wrap flex-md-nowrap g-4">
                                <div class="nk-block-image w-120px flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 118">
                                        <path d="M8.916,94.745C-.318,79.153-2.164,58.569,2.382,40.578,7.155,21.69,19.045,9.451,35.162,4.32,46.609.676,58.716.331,70.456,1.845,84.683,3.68,99.57,8.694,108.892,21.408c10.03,13.679,12.071,34.71,10.747,52.054-1.173,15.359-7.441,27.489-19.231,34.494-10.689,6.351-22.92,8.733-34.715,10.331-16.181,2.192-34.195-.336-47.6-12.281A47.243,47.243,0,0,1,8.916,94.745Z" transform="translate(0 -1)" fill="#f6faff" />
                                        <rect x="18" y="32" width="84" height="50" rx="4" ry="4" fill="#fff" />
                                        <rect x="26" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                        <rect x="50" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                        <rect x="74" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                        <rect x="38" y="60" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                        <rect x="62" y="60" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                        <path d="M98,32H22a5.006,5.006,0,0,0-5,5V79a5.006,5.006,0,0,0,5,5H52v8H45a2,2,0,0,0-2,2v4a2,2,0,0,0,2,2H73a2,2,0,0,0,2-2V94a2,2,0,0,0-2-2H66V84H98a5.006,5.006,0,0,0,5-5V37A5.006,5.006,0,0,0,98,32ZM73,94v4H45V94Zm-9-2H54V84H64Zm37-13a3,3,0,0,1-3,3H22a3,3,0,0,1-3-3V37a3,3,0,0,1,3-3H98a3,3,0,0,1,3,3Z" transform="translate(0 -1)" fill="#798bff" />
                                        <path d="M61.444,41H40.111L33,48.143V19.7A3.632,3.632,0,0,1,36.556,16H61.444A3.632,3.632,0,0,1,65,19.7V37.3A3.632,3.632,0,0,1,61.444,41Z" transform="translate(0 -1)" fill="#6576ff" />
                                        <path d="M61.444,41H40.111L33,48.143V19.7A3.632,3.632,0,0,1,36.556,16H61.444A3.632,3.632,0,0,1,65,19.7V37.3A3.632,3.632,0,0,1,61.444,41Z" transform="translate(0 -1)" fill="none" stroke="#6576ff" stroke-miterlimit="10" stroke-width="2" />
                                        <line x1="40" y1="22" x2="57" y2="22" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        <line x1="40" y1="27" x2="57" y2="27" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        <line x1="40" y1="32" x2="50" y2="32" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        <line x1="30.5" y1="87.5" x2="30.5" y2="91.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                                        <line x1="28.5" y1="89.5" x2="32.5" y2="89.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                                        <line x1="79.5" y1="22.5" x2="79.5" y2="26.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                                        <line x1="77.5" y1="24.5" x2="81.5" y2="24.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                                        <circle cx="90.5" cy="97.5" r="3" fill="none" stroke="#9cabff" stroke-miterlimit="10" />
                                        <circle cx="24" cy="23" r="2.5" fill="none" stroke="#9cabff" stroke-miterlimit="10" /></svg>
                                </div>
                                <div class="nk-block-content">
                                    <div class="nk-block-content-head px-lg-4">
                                        <h5>We’re here to help you!</h5>
                                        <p class="text-soft">Ask a question or file a support ticket, manage request, report an issues. Our team support team will get back to you by email.</p>
                                    </div>
                                </div>
                                <div class="nk-block-content flex-shrink-0">
                                    <a href="#" class="btn btn-lg btn-outline-primary">Get Support Now</a>
                                </div>
                            </div>
                        </div><!-- .card-inner -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</x-admin-layout>
