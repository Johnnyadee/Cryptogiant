<x-user-layout>

 <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="nk-block-head">
                                <div class="nk-block-head-sub"><span>Account Balance</span></div>
                                <div class="nk-block-between-md g-4">
                                    <div class="nk-block-head-content">
                                        <h2 class="nk-block-title fw-normal">My Account</h2>
                                        <div class="nk-block-des">
                                            <p>At a glance summary of your account. Have fun!</p>
                                        </div>
                                    </div>
                                    <div class="nk-block-head-content">
                                        <ul class="nk-block-tools gx-3">
                                            <li class="btn-wrap"><a href="{{ url('user/trade') }}" class="btn btn-icon btn-xl btn-dim btn-outline-light"><em class="icon ni ni-arrow-from-right"></em></a><span class="btn-extext">Send</span></li>
                                            <li class="btn-wrap"><a href="{{ url('user/trade') }}" class="btn btn-icon btn-xl btn-success"><em class="icon ni ni-wallet-in"></em></a><span class="btn-extext">Deposit</span></li>
                                            <li class="btn-wrap"><a href="#" class="btn btn-icon btn-xl btn-warning"><em class="icon ni ni-wallet-out"></em></a><span class="btn-extext">Withdraw</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="card card-bordered">
                                    <div class="card-inner">
                                        <div class="nk-wg1 mb-3">
                                            <div class="nk-wg1-group g-2">
                                                <div class="nk-wg1-item mr-xl-4">
                                                    <div class="nk-wg1-title">Available Balance / <div class="dropdown">
                                                            <a class="dropdown-indicator-caret" data-offset="0,10" href="#" data-toggle="dropdown">NGN</a>
                                                            <div class="dropdown-menu dropdown-menu-xxs dropdown-menu-center">
                                                                <ul class="link-list-plain sm text-center">
                                                                    <li><a href="#">BTC</a></li>
                                                                    <li><a href="#">ETH</a></li>
                                                                    <li><a href="#">YEN</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-wg1-amount">
                                                        <div class="amount">{{ Auth::user()->getBtcValue() }} <small class="currency currency-btc">BTC</small></div>
                                                    </div>
                                                </div><!-- .nk-wg1-item -->
                                                <div class="nk-wg1-item ml-lg-auto">
                                                    <div class="nk-wg1-title">In this month</div>
                                                    <div class="nk-wg1-group g-2">
                                                        <div class="nk-wg1-sub">
                                                            <div class="sub-text"><span>Send</span>
                                                                <div class="dot" data-bg="#9cabff"></div>
                                                            </div>
                                                            <div class="lead-text">0.00000</div>
                                                        </div>
                                                        <div class="nk-wg1-sub">
                                                            <div class="sub-text"><span>Receive</span>
                                                                <div class="dot" data-bg="#baaeff"></div>
                                                            </div>
                                                            <div class="lead-text">0.00000</div>
                                                        </div>
                                                        <div class="nk-wg1-sub">
                                                            <div class="sub-text"><span>Withdraw</span>
                                                                <div class="dot" data-bg="#a7ccff"></div>
                                                            </div>
                                                            <div class="lead-text">0.00000</div>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-wg1-item -->
                                            </div><!-- .nk-wg1-group -->
                                        </div><!-- .nk-wg1 -->
                                        <div class="nk-ck1">
                                            <canvas class="chart-account-balance" id="mainBalance"></canvas>
                                        </div><!-- .nk-ck1 -->
                                    </div><!-- .card-inner -->
                                </div><!-- .card -->
                                <div class="card card-bordered">
                                    <div class="card-inner">
                                        <div class="card-head ui-v2">
                                            <div class="card-title">
                                                <h5 class="title">Balance Summary</h5>
                                            </div>
                                            <div class="card-tools">
                                                <ul class="card-tools-nav">
                                                    <li><a href="#">This Month</a></li>
                                                    <li><a href="#">Months</a></li>
                                                    <li class="active"><a href="#">Years</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- .card-head -->
                                        <div class="nk-wg4">
                                            <div class="nk-wg4-group flex-lg-nowrap justify-between g-3">
                                                <div class="nk-wg4-item">
                                                    <div class="nk-wg4-group g-3">
                                                        <div class="nk-wg4-sub">
                                                            <div class="sub-text">
                                                                <div class="dot dot-lg sq" data-bg="#5ce0aa"></div> <span>Total Received</span>
                                                            </div>
                                                            <div class="lead-text-lg">0.0000 <span class="currency currency-btc">BTC</span></div>
                                                        </div>
                                                        <div class="nk-wg4-sub">
                                                            <div class="sub-text">
                                                                <div class="dot dot-lg sq" data-bg="#798bff"></div> <span>Total Send</span>
                                                            </div>
                                                            <div class="lead-text-lg">0.0000<span class="currency currency-btc">BTC</span></div>
                                                        </div>
                                                        <div class="nk-wg4-sub">
                                                            <div class="sub-text">
                                                                <div class="dot dot-lg sq" data-bg="#f6ca3e"></div><span>Total Withdraw</span>
                                                            </div>
                                                            <div class="lead-text-lg">0.0000<span class="currency currency-btc">BTC</span></div>
                                                        </div>
                                                    </div><!-- .nk-wg4-group -->
                                                </div><!-- .nk-wg4-item -->
                                                <div class="nk-wg4-item text-lg-right">
                                                    <ul class="nk-wg4-switcher">
                                                        <li>
                                                            <div class="dropdown">
                                                                <a class="dropdown-indicator" href="#" data-toggle="dropdown">January</a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-plain li-col3x text-center">
                                                                        <li><a href="#">Jan</a></li>
                                                                        <li><a href="#">Feb</a></li>
                                                                        <li><a href="#">Mar</a></li>
                                                                        <li><a href="#">Apr</a></li>
                                                                        <li><a href="#">May</a></li>
                                                                        <li><a href="#">Jun</a></li>
                                                                        <li><a href="#">Jul</a></li>
                                                                        <li><a href="#">Aug</a></li>
                                                                        <li><a href="#">Sep</a></li>
                                                                        <li><a href="#">Oct</a></li>
                                                                        <li><a href="#">Nov</a></li>
                                                                        <li><a href="#">Dec</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="dropdown">
                                                                <a class="dropdown-indicator" href="#" data-toggle="dropdown">2019</a>
                                                                <div class="dropdown-menu dropdown-menu-auto">
                                                                    <ul class="link-list-plain sm text-center">
                                                                        <li><a href="#">2018</a></li>
                                                                        <li><a href="#">2017</a></li>
                                                                        <li><a href="#">2016</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul><!-- .nk-wg4-switcher -->
                                                    <div class="nk-wg4-note">Total <span>0</span> transaction made</div>
                                                </div><!-- .nk-wg4-item -->
                                            </div><!-- .nk-wg4-group -->
                                        </div><!-- .nk-wg4 -->
                                        <div class="nk-ck2">
                                            <canvas class="chart-account-summary" id="summaryBalance"></canvas>
                                        </div><!-- .nk-ck2 -->
                                    </div><!-- .card-inner -->
                                </div><!-- .card -->
                            </div><!-- .nk-block -->
                        </div>
                    </div>
                </div>

</x-user-layout>
