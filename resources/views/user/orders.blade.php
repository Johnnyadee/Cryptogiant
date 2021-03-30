<x-user-layout>


<div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="nk-block-head">
                                @if (session()->has('success_message'))
                                <div class="example-alert">
                                    <div class="alert alert-warning alert-icon">
                                        <em class="icon ni ni-check-circle"></em> {{ session()->get('success_message') }}</div>
                                </div>
                                @endif
                            <div class="nk-block-head">
                                <div class="nk-block-between-md g-4">
                                    <div class="nk-block-head-content">
                                        <h2 class="nk-block-title fw-normal">Your Orders</h2>
                                        <div class="nk-block-des">
                                            <p>See full list of your orders of your account</p>
                                        </div>
                                    </div>
                                    <div class="nk-block-head-content">
                                        <ul class="nk-block-tools gx-3">
                                            <li class="order-md-last"><a href="{{ url('user/trade') }}" class="btn btn-primary"><span>Buy Coin</span> <em class="icon ni ni-arrow-long-right"></em></a></li>
                                            <li><a href="#" class="btn btn-white btn-light"><em class="icon ni ni-download-cloud"></em><span><span class="d-none d-sm-inline-block">Get</span> Statement</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head -->
                            <ul class="nk-nav nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link">History</a>
                                </li>

                            </ul><!-- .nav-tabs -->
                            <div class="nk-block nk-block-sm">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h6 class="nk-block-title">All Orders</h6>
                                        </div>

                                    </div>
                                    <div class="search-wrap search-wrap-extend" data-search="search">
                                        <div class="search-content">
                                            <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                            <input type="text" class="form-control form-control-sm border-transparent form-focus-none" placeholder="Quick search by user">
                                            <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                        </div>
                                    </div><!-- .search-wrap -->
                                </div><!-- .nk-block-head -->




                                    <div class="tranx-list tranx-list-stretch card card-bordered">
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
                                    </div><!-- .card -->

                                </div>
                                @else
                                <div class="text-center pt-4">
                                    <a class="link link-soft"><em class="icon ni ni-redo"></em><span>No Order Recored Yet</span></a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

</x-user-layout>
