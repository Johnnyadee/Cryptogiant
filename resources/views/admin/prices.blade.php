<x-admin-layout>

    <div class="nk-content-body" style="margin: 5%">
        <div class="nk-content-wrap">
            <div class="nk-block-head nk-block-head-lg">
                <div class="nk-block-head-sub"><span>&nbsp;</span></div>
                <div class="nk-block-between-md g-4">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title fw-normal">Crypto Giant Prices</h2>
                        <div class="nk-block-des">
                            <p>Here is list of prices for trading on crypto giant on the platform. Prices are set to 1 unit of each crypto asset<span class="text-primary"><em class="icon ni ni-info"></em></span></p>
                        </div>
                    </div>
                    <div class="nk-block-head">
                        @if (session()->has('success_message'))
                        <div class="example-alert">
                            <div class="alert alert-warning alert-icon">
                                <em class="icon ni ni-check-circle"></em> {{ session()->get('success_message') }}</div>
                        </div>
                        @endif
                    <div class="nk-block-head-content">
                        <ul class="nk-block-tools gx-3">
                            <li class="order-md-last"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#subscription-change"><span>Update Prices</span></a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- .nk-block-head -->
            <div class="nk-block">
                <div class="card card-bordered sp-plan">
                    <div class="row no-gutters">
                        <div class="col-md-12">
                            <div class="sp-plan-info card-inner">
                                <div class="row gx-0 gy-3">
                                    <div class="col-xl-9 col-sm-8">
                                        <div class="sp-plan-name">
                                            <h6 class="title"><a href="html/subscription/subscriptions-detail.html">Standard Price <span class="badge badge-success badge-pill">Active</span></a></h6>
                                            <p>Crypto Giant</span></p>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-sm-4">
                                        <div class="sp-plan-opt">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="auto-plan-p1" checked>
                                                <label class="custom-control-label text-soft" for="auto-plan-p1">Make Active</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .sp-plan-info -->
                            <div class="sp-plan-desc card-inner">
                                <ul class="row gx-1">
                                    <li class="col-6 col-lg-3">
                                        <p><span class="text-soft">Updated On</span> {{ $price->updated_at->format('d/m/Y') }}</p>
                                    </li>

                                    <li class="col-6 col-lg-3">
                                        <p><span class="text-soft">BTC-NGN</span> &#x20a6;{{ number_format($price->btcngn, 2) }}</p>
                                    </li>
                                    <li class="col-6 col-lg-3">
                                        <p><span class="text-soft">BTC-USD</span> ${{ number_format($price->btcusd, 2) }}</p>
                                    </li>
                                    <li class="col-6 col-lg-3">
                                        <p><span class="text-soft">LTC_NGN</span> &#x20a6;{{ number_format($price->ltcngn, 2) }}</p>
                                    </li>
                                    <li class="col-6 col-lg-3">
                                        <p><span class="text-soft">LTC-USD</span> ${{ number_format($price->ltcusd, 2) }}</p>
                                    </li>
                                    <li class="col-6 col-lg-3">
                                        <p><span class="text-soft">DGC-NGN</span> &#x20a6; {{ number_format($price->dgcngn, 2) }}</p>
                                    </li>
                                    <li class="col-6 col-lg-3">
                                        <p><span class="text-soft">DGC-USD</span> ${{ number_format($price->dgcusd, 2) }}</p>
                                    </li>

                                </ul>
                            </div><!-- .sp-plan-desc -->
                        </div><!-- .col -->

                    </div><!-- .row -->
                </div><!-- .sp-plan -->

            </div><!-- .nk-block -->

        </div>


    </div>


    <div class="modal fade" tabindex="-1" role="dialog" id="subscription-change">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Update Proiices</h5>
                    <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#personal">Set Prices</a>
                        </li>

                    </ul><!-- .nav-tabs -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                        <form method="POST" action="{{ route('admin.update_prices') }}">
                                                    @csrf
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">BTC-NGN</label>
                                        <input type="number" class="form-control form-control-lg" id="phone-no" value="{{ $price->btcngn }}" placeholder="Enter Price" name="btcngn" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">BTC-USD</label>
                                        <input type="number" class="form-control form-control-lg" id="phone-no" value="{{ $price->btcusd }}" placeholder="Enter Price" name="btcusd" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">LTC-NGN</label>
                                        <input type="number" class="form-control form-control-lg" id="phone-no" value="{{ $price->ltcngn }}" placeholder="Enter Price" name="ltcngn" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">LTC-USD</label>
                                        <input type="number" class="form-control form-control-lg date-picker" id="phone-no" placeholder="Enter Price" value="{{ $price->ltcusd }}" name="ltcusd" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">DGC-NGN</label>
                                        <input type="number" class="form-control form-control-lg" id="phone-no" value="{{ $price->dgcngn }}" placeholder="Enter Price" name="dgcngn" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">DGC-USD</label>
                                        <input type="number" class="form-control form-control-lg " id="phone-no" placeholder="Enter Price" value="{{ $price->dgcusd }}" name="dgcusd" required>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <button type="submit" class="btn btn-lg btn-primary">Update Profile</button>
                                        </li>
                                        <li>
                                            <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                        </div><!-- .tab-pane -->

                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->

</x-admin-layout>
