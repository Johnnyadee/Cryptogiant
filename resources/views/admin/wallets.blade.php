<x-admin-layout>
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-head-sub"><span>Admin Wallet</span> </div><!-- .nk-block-head-sub -->
                        <div class="nk-block-between-md g-4">
                            <div class="nk-block-head-content">
                                <h2 class="nk-block-title fw-normal">Wallet / Assets</h2>
                                    <div class="nk-block-des">
                                            <p>Here is the list of your assets / wallets!</p>
                                    </div>
                                        </div>
                                        <div class="nk-block-head-content">
                                            <ul class="nk-block-tools gx-3">

                                                <li><a href="{{ url('user/trade') }}" class="btn btn-primary"><span>Orders</span> <em class="icon ni ni-arrow-long-right"></em></a></li>
                                                <li><a href="{{ url('user/trade') }}" class="btn btn-dim btn-outline-light"><span>Transactions</span> <em class="icon ni ni-arrow-long-right"></em></a></li>
                                            </ul>
                                        </div>
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="nk-block-head-sm">
                                        <div class="nk-block-head-content">
                                            <h5 class="nk-block-title title">Crypto Accounts</h5>
                                        </div>
                                    </div>
                                    <div class="row g-gs">
                                         <div class="col-sm-6 col-lg-4 col-xl-6 col-xxl-4">
                                            <div class="card card-bordered is-dark">
                                                <div class="nk-wgw">
                                                    <div class="nk-wgw-inner">
                                                        <a class="nk-wgw-name" href="#">
                                                            <div class="nk-wgw-icon is-default">
                                                                <em class="icon ni ni-sign-btc"></em>
                                                            </div>
                                                            <h5 class="nk-wgw-title title">Bitcoin Wallet</h5>

                                                        </a>
                                                        <div class="nk-wgw-balance">
                                                            <div class="amount">{{ Auth::guard('admin')->user()->getBtcValue() }}<span class="currency currency-btc">BTC</span></div>
                                                            <div class="amount-sm">0.00<span class="currency currency-usd">NGN</span></div>
                                                            <p style="color: #fefefe">{{ $user_wallet->bitcoin_address }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="nk-wgw-actions">
                                                        <ul>
                                                            <li><a href="{{ url('user/trade') }}"><em class="icon ni ni-arrow-up-right"></em> <span>Orders</span></a></li>
                                                            <li><a href="{{ url('user/trade') }}"><em class="icon ni ni-arrow-down-left"></em><span>Transactions</span></a></li>

                                                        </ul>
                                                    </div>

                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->

                                        <div class="col-sm-6 col-lg-4 col-xl-6 col-xxl-4">
                                            <div class="card card-bordered">
                                                <div class="nk-wgw">
                                                    <div class="nk-wgw-inner">
                                                        <a class="nk-wgw-name" href="#">
                                                            <div class="nk-wgw-icon">
                                                                <em class="icon ni ni-sign-ltc"></em>
                                                            </div>
                                                            <h5 class="nk-wgw-title title">LiteCoin Wallet</h5>
                                                        </a>
                                                        <div class="nk-wgw-balance">
                                                            <div class="amount">{{ Auth::guard('admin')->user()->getLcValue() }}<span class="currency currency-eth">LTC</span></div>
                                                            <div class="amount-sm">0.00<span class="currency currency-usd">NGN</span></div>
                                                            <p style="color: #2c3782">{{ $user_wallet->litecoin_address }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="nk-wgw-actions">
                                                        <ul>
                                                            <li><a href="{{ url('user/trade') }}"><em class="icon ni ni-arrow-up-right"></em> <span>Orders</span></a></li>
                                                            <li><a href="{{ url('user/trade') }}"><em class="icon ni ni-arrow-down-left"></em><span>Transactions</span></a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-sm-6 col-lg-4 col-xl-6 col-xxl-4">
                                            <div class="card card-bordered">
                                                <div class="nk-wgw">
                                                    <div class="nk-wgw-inner">
                                                        <a class="nk-wgw-name" href="#">
                                                            <div class="nk-wgw-icon">
                                                                <em class="icon ni ni-sign-eth"></em>
                                                            </div>
                                                            <h5 class="nk-wgw-title title">Dogecoin Wallet</h5>
                                                        </a>
                                                        <div class="nk-wgw-balance">
                                                            <div class="amount">{{ Auth::guard('admin')->user()->getDcValue() }}<span class="currency currency-eth">DGC</span></div>
                                                            <div class="amount-sm">0.00<span class="currency currency-usd">NGN</span></div>
                                                            <p style="color: #2c3782">{{ $user_wallet->dogecoin_address }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="nk-wgw-actions">
                                                        <ul>
                                                            <li><a href="{{ url('user/trade') }}"><em class="icon ni ni-arrow-up-right"></em> <span>Orders</span></a></li>
                                                            <li><a href="{{ url('user/trade') }}"><em class="icon ni ni-arrow-down-left"></em><span>Transactions</span></a></li>

                                                        </ul>
                                                    </div>

                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->

                                    </div><!-- .row -->
                                </div>

                            </div>
                        </div>
    </div>


    </x-admin-layout>
