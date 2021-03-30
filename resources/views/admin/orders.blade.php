<x-admin-layout>


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
                                <div class="nk-block">
                                    <div class="card card-bordered card-stretch">
                                        <div class="card-inner-group">
                                            <div class="card-inner">
                                                <div class="card-title-group">
                                                    <div class="card-title">
                                                        <h5 class="title">All Orders</h5>
                                                    </div>
                                                    <div class="card-tools mr-n1">
                                                                                                            </div><!-- .card-tools -->
                                                    <div class="card-search search-wrap" data-search="search">
                                                        <div class="search-content">
                                                            <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                                            <input type="text" class="form-control border-transparent form-focus-none" placeholder="Quick search by transaction">
                                                            <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                                        </div>
                                                    </div><!-- .card-search -->
                                                </div><!-- .card-title-group -->
                                            </div><!-- .card-inner -->
                                            <div class="card-inner p-0">
                                                <div class="nk-tb-list nk-tb-tnx">
                                                    <div class="nk-tb-item nk-tb-head">
                                                        <div class="nk-tb-col"><span>Details</span></div>
                                                        <div class="nk-tb-col tb-col-xxl"><span>Source</span></div>
                                                        <div class="nk-tb-col tb-col-lg"><span>Order</span></div>
                                                        <div class="nk-tb-col text-right"><span>Amount</span></div>

                                                        <div class="nk-tb-col nk-tb-col-status"><span class="sub-text d-none d-md-block">Status</span></div>
                                                        <div class="nk-tb-col nk-tb-col-tools"></div>
                                                    </div><!-- .nk-tb-item -->
                                                    @if(count($orders))
                                                    @foreach ($orders as $order)


                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">
                                                            <div class="nk-tnx-type">
                                                                <div class="nk-tnx-type-icon @if($order->status == 1)
                                                                    bg-warning-dim
                                                                    @endif
                                                                    @if($order->status == 2)
                                                                    bg-success-dim
                                                                    @endif
                                                                    @if($order->status == 3)
                                                                    bg-danger-dim
                                                                    @endif

                                                                    @if($order->status == 1)
                                                                    text-warning
                                                                    @endif
                                                                    @if($order->status == 2)
                                                                    text-success
                                                                    @endif
                                                                    @if($order->status == 3)
                                                                    text-danger
                                                                    @endif ">
                                                                    <em class="icon ni ni-arrow-up-right"></em>
                                                                </div>
                                                                <div class="nk-tnx-type-text">
                                                                    <span class="tb-lead">{{ $order->mode }} @if($order->coin == 'BTC')
                                                                        Bitcoin
                                                                        @elseif($order->coin == 'LTC')
                                                                        Litecoin
                                                                        @else
                                                                            Dogecoin
                                                                        @endif</span>
                                                                    <span class="tb-date">{{ $order->created_at->format('d/m/Y') }}</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span class="tb-lead-sub">{{ $order->getAddress() }}</span>
                                                            <span class="badge badge-dot  @if($order->status == 1)
                                                                badge-warning
                                                                @endif
                                                                @if($order->status == 2)
                                                                badge-success
                                                                @endif
                                                                @if($order->status == 3)
                                                                badge-danger
                                                                @endif">Purchase Coin</span>
                                                        </div>
                                                        <div class="nk-tb-col text-right">
                                                            <span class="tb-amount">+ {{ $order->crypto_unit }} <span>{{ $order->coin }}</span></span>
                                                            <span class="tb-amount-sm">{{ number_format($order->amount) }} {{ $order->currency_type }}</span>
                                                        </div>

                                                        <div class="nk-tb-col nk-tb-col-status">
                                                            <div class="dot @if($order->status == 1)
                                                                dot-warning
                                                                @endif
                                                                @if($order->status == 2)
                                                                dot-success
                                                                @endif
                                                                @if($order->status == 3)
                                                                dot-danger
                                                                @endif d-md-none"></div>
                                                            <span class="badge badge-sm badge-dim @if($order->status == 1)
                                                                badge-outline-warning
                                                                @endif
                                                                @if($order->status == 2)
                                                                badge-outline-success
                                                                @endif
                                                                @if($order->status == 3)
                                                                badge-outline-danger
                                                                @endif d-none d-md-inline-flex">@if($order->status == 1)
                                                                Pending
                                                                @endif
                                                                @if($order->status == 2)
                                                                Completed
                                                                @endif
                                                                @if($order->status == 3)
                                                                Rejected
                                                                @endif</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-2">

                                                                <li>
                                                                    <div class="dropdown">
                                                                        <a href="#" class="dropdown-toggle bg-white btn btn-sm btn-outline-light btn-icon" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt">
                                                                                <li><a href="{{ route('admin.approve', $order->id) }}"><em class="icon ni ni-done"></em><span>Approve</span></a></li>


                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    @endforeach
                                                    @else

                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">
                                                            <p>No Transaction</p>
                                                        </div>
                                                    </div>
                                                    @endif
                                                </div><!-- .nk-tb-list -->
                                            </div><!-- .card-inner -->

                                        </div><!-- .card-inner-group -->
                                    </div><!-- .card -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>

    </x-admin-layout>
