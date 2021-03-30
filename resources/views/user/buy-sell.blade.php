<x-user-layout>
<div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="buysell wide-xs m-auto">
                                <div class="buysell-nav text-center">
                                    <ul class="nk-nav nav nav-tabs nav-tabs-s2">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Buy Coin</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Sell Coin</a>
                                        </li>
                                    </ul>
                                </div><!-- .buysell-nav -->
                                <div class="buysell-title text-center">
                                    <h2 class="title">What do you want to buy!</h2>
                                </div><!-- .buysell-title -->
                                <div class="buysell-block">
                                    <form action="{{ route('send_coin') }}" class="buysell-form" method="POST">
                                        @csrf
                                        <input type="hidden" name="amount" id="amountget"> {{-- required in kobo --}}

                    <input type="hidden" name="currency" value="NGN">
                    <input type="hidden" name="metadata" value="{{ json_encode($array = ['first_name' => 'Abraham', 'last_name' => 'Onoja']) }}" >
                    <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}


                    <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
                                        <div class="buysell-field form-group">
                                            <div class="invest-field form-group">
                                                <div class="form-label-group">
                                                    <label class="form-label">Choose Crypto Asset</label>
                                                </div>
                                                <div class="invest-amount-group g-2">
                                                    <div class="invest-amount-item">
                                                        <input type="radio" class="invest-amount-control" name="iv-amount" value="BTC" id="iv-amount-1" checked="checked">
                                                        <label class="invest-amount-label" for="iv-amount-1">BTC(Bitcoin)</label>
                                                    </div>
                                                    <div class="invest-amount-item">
                                                        <input type="radio" class="invest-amount-control" name="iv-amount" value="LTC" id="iv-amount-2">
                                                        <label class="invest-amount-label" for="iv-amount-2">LTC(Litecoin)</label>
                                                    </div>
                                                    <div class="invest-amount-item">
                                                        <input type="radio" class="invest-amount-control" name="iv-amount" value="DGC" id="iv-amount-3">
                                                        <label class="invest-amount-label" for="iv-amount-3">DGC(Dogecoin)</label>
                                                    </div>

                                            </div>
                                        </div>
                                        <input type="hidden" name="email" id="inputemail" class="form-control form-account" value="{{ Auth::user()->email }}">
                                        <div class="buysell-field form-group">
                                            <div class="invest-field form-group">
                                                <div class="form-label-group">
                                                    <label class="form-label">Select Currency</label>
                                                </div>
                                                <div class="invest-amount-group g-2">
                                                    <div class="invest-amount-item">
                                                        <input type="radio" class="invest-amount-control" name="iv-cur" value="NGN" id="iv-cur-1" checked="checked">
                                                        <label class="invest-amount-label" for="iv-cur-1">Naira(&#x20a6;)</label>
                                                    </div>
                                                    <div class="invest-amount-item">
                                                        <input type="radio" class="invest-amount-control" name="iv-cur" value="USD" id="iv-cur-2">
                                                        <label class="invest-amount-label" for="iv-cur-2">Dollars($)</label>
                                                    </div>


                                            </div>
                                        </div>
                                                                                    </div><!-- .buysell-field -->
                                        <div class="buysell-field form-group">
                                            <div class="form-label-group">
                                                <label class="form-label" for="buysell-amount">I want to spend?</label>
                                            </div>
                                            <div class="form-control-group">
                                                <input class="form-control form-control-lg form-control-number" id="buysell-amount" name="bs-amount" placeholder="1000" type="number" min="5000">
                                                <div class="form-dropdown">
                                                    <div class="text"><spam id="cryp_type">BTC</spam><span>/</span></div>
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-indicator-caret" data-toggle="dropdown" data-offset="0,2"><span id="cur_type">NGN</span></a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-note-group">
                                                <span class="buysell-min form-note-alt">Minimum: (&#x20a6;5,000 & $10) </span>

                                            </div>
                                        </div><!-- .buysell-field -->
                                        <div class="buysell-field form-group">
                                            <div class="form-label-group">
                                                <label class="form-label" for="buysell-value">For this much:</label>
                                            </div>
                                            <div class="form-control-group">
                                                <input type="text" class="form-control form-control-lg form-control-number" id="buysell-value" name="bs-value" placeholder="0.00" type="number" readonly>
                                                <div class="form-dropdown">
                                                    <div class="text"><spam id="cryp_type_four">BTC</spam></div>

                                                </div>
                                            </div>
                                            <div class="form-note-group">

                                            </div>
                                        </div><!-- .buysell-field -->
                                        <div class="buysell-field form-group">
                                            <div class="form-label-group">
                                                <label class="form-label">Payment Method</label>
                                            </div>

                                                    <li class="buysell-pm-item">
                                                        
                                                       <span class="pm-icon"><em class="icon ni ni-cc-alt-fill"></em></span>
                                                        <button class="btn btn-lg btn-block btn-primary" id="get_button" >Pay with Card</button>
                                                    </li>
                                                    
                                                    <li class="buysell-pm-item">
                                                        
                                                        <button class="btn btn-lg btn-block btn-primary" id="get_button" >Pay with Bitcoin</button>
                                                    </li>
            
                                                </ul>
                                            
                                            <!-- .buysell-field -->
                                        <div class="form-note text-base text-center">Note: our transfer fee included(will be auto deducted).</div>
                                    </form><!-- .buysell-form -->
                                </div><!-- .buysell-block -->
                            </div><!-- .buysell -->
                        </div>
                    </div>
                </div>


@section('js')
    <script>

        var crypto_type = "BTC";
        var cur_type = "NGN";
        var btc_value_ngn = parseFloat({!! json_encode($price->btcngn) !!});
        var btc_value_usd = parseFloat({!! json_encode($price->btcusd) !!});

        var ltc_value_ngn = parseFloat({!! json_encode($price->ltcngn) !!});
        var ltc_value_usd = parseFloat({!! json_encode($price->ltcusd) !!});

        var dgc_value_ngn = parseFloat({!! json_encode($price->dgcngn) !!});
        var dgc_value_usd = parseFloat({!! json_encode($price->dgcusd) !!});



        var value_btc;
        $('input[type=radio][name=iv-amount]').change(function() {

            if (this.value == 'BTC') {
                value_btc = document.getElementById("buysell-amount").value = 0;
                document.getElementById("buysell-value").value = 0;
                crypto_type = "BTC";
                document.getElementById("cryp_type").innerHTML = "BTC";
                document.getElementById("cryp_type_four").innerHTML = "BTC";
            }
            else if (this.value == 'LTC') {
                value_btc = document.getElementById("buysell-amount").value = 0;
                document.getElementById("buysell-value").value = 0;
                crypto_type = "LTC";
                document.getElementById("cryp_type").innerHTML = "LTC";
                document.getElementById("cryp_type_four").innerHTML = "LTC";
            }
            else if (this.value == 'DGC') {
                value_btc = document.getElementById("buysell-amount").value = 0;
                document.getElementById("buysell-value").value = 0;
                crypto_type = "DGC";
                document.getElementById("cryp_type").innerHTML = "DGC";
                document.getElementById("cryp_type_four").innerHTML = "DGC";
            }
        });
        $('input[type=radio][name=iv-cur]').change(function() {
            if (this.value == 'NGN') {
                value_btc = document.getElementById("buysell-amount").value = 0;
                document.getElementById("buysell-value").value = 0;
                cur_type = 'NGN';
                document.getElementById("cur_type").innerHTML = "NGN";

            }
            else if (this.value == 'USD') {
                value_btc = document.getElementById("buysell-amount").value = 0;
                document.getElementById("buysell-value").value = 0;
                cur_type = 'USD';
                document.getElementById("cur_type").innerHTML = "USD";
            }
        });

        $('input[name=bs-amount]').keyup(function() {

            if(crypto_type == 'BTC' && cur_type == 'NGN') {
                if(document.getElementById("buysell-amount").value >= 30) {
                    $("#get_button").prop("disabled", false);

                }
                else{
                    $("#get_button").prop("disabled", true);
                }
                value_btc = (document.getElementById("buysell-amount").value / btc_value_ngn).toFixed(6);
                document.getElementById("buysell-value").value = value_btc;
            }
            else if(crypto_type == 'BTC' && cur_type == 'USD') {
                if(document.getElementById("buysell-amount").value >= 30) {
                    $("#get_button").prop("disabled", false);

                }
                else{
                    $("#get_button").prop("disabled", true);
                }
                value_btc = (document.getElementById("buysell-amount").value / btc_value_usd).toFixed(6);
                document.getElementById("buysell-value").value = value_btc;
            }
            else if(crypto_type == 'LTC' && cur_type == 'USD') {
                if(document.getElementById("buysell-amount").value >= 30) {
                    $("#get_button").prop("disabled", false);

                }
                else{
                    $("#get_button").prop("disabled", true);
                }
                value_ltc = (document.getElementById("buysell-amount").value / ltc_value_usd).toFixed(6);
                document.getElementById("buysell-value").value = value_ltc;
            }
            else if(crypto_type == 'LTC' && cur_type == 'NGN') {
                if(document.getElementById("buysell-amount").value >= 30) {
                    $("#get_button").prop("disabled", false);

                }
                else{
                    $("#get_button").prop("disabled", true);
                }
                value_ltc = (document.getElementById("buysell-amount").value / ltc_value_ngn).toFixed(6);
                document.getElementById("buysell-value").value = value_ltc;
            }
            else if(crypto_type == 'DGC' && cur_type == 'NGN') {
                if(document.getElementById("buysell-amount").value >= 30) {
                    $("#get_button").prop("disabled", false);

                }
                else{
                    $("#get_button").prop("disabled", true);
                }
                value_dgc = (document.getElementById("buysell-amount").value / dgc_value_ngn).toFixed(6);
                document.getElementById("buysell-value").value = value_dgc;
            }
            else if(crypto_type == 'DGC' && cur_type == 'USD') {
                if(document.getElementById("buysell-amount").value >= 30) {
                    $("#get_button").prop("disabled", false);

                }
                else{
                    $("#get_button").prop("disabled", true);
                }
                value_dgc = (document.getElementById("buysell-amount").value / dgc_value_usd).toFixed(6);
                document.getElementById("buysell-value").value = value_dgc;
            }
            document.getElementById("amountget").value = (document.getElementById("buysell-amount").value * 100);

        });


    </script>
@endsection
</x-user-layout>
