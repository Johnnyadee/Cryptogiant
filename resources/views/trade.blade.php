<x-base-layout>
    <div class="page-head section row-vm light">
        <div class="imagebg">
            <img src="{{ asset('assets/images') }}/page-bitcoin-bg.jpg" alt="page-head">
        </div>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2>INVEST</h2>
                    <div class="page-breadcrumb">
                        <ul class="breadcrumb">
                            <li><a href="/">Home</a></li>
                            <li class="active"><span>Buy Bitcoin</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Box -->
    <div class="features-box section section-pad no-pb">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 res-m-bttm">
                    <div class="box round shadow-alt">
                        <img src="{{ asset('assets/images') }}/box-icon-a.png" alt="box-icon" class="box-icon">
                        <h6 class="ucap">We sell bitcoin</h6>
                        {{-- <p class="small">Compliant with dolorts adipis sit <br/> ametcon sectetur.</p> --}}
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 res-m-bttm">
                    <div class="box round shadow-alt">
                        <img src="{{ asset('assets/images') }}/box-icon-e.png" alt="box-icon" class="box-icon">
                        <h6 class="ucap">Buy with credit card</h6>
                        {{-- <p class="small">Lorem ipsum dolor sit amet cont <br/> etur adipiscing eli.</p> --}}
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2">
                    <div class="box round shadow-alt">
                        <img src="{{ asset('assets/images') }}/box-icon-c.png" alt="box-icon" class="box-icon">
                        <h6 class="ucap">Fast-track verification</h6>
                        {{-- <p class="small">Dolore magna aliqa. Ut enim ad <br/> minim venim quis.</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div><!--End Features Box -->


  <!-- Pricing Tab -->
    <div class="pricing-tab  section-pad section">
        <div class="container">
            <div class="tab-custom">
              <div class="row">
                  <div class="col-md-6 col-md-offset-3">
                      <ul class="nav nav-tabs ucap">
                          <li class="active"><a href="#tab1" data-toggle="tab">USD</a></li>
                          <li><a href="#tab2" data-toggle="tab">EUR</a></li>
                          <li><a href="#tab3" data-toggle="tab">GBP</a></li>
                          <li><a href="#tab4" data-toggle="tab">YEN</a></li>
                      </ul>
                  </div>
              </div>
              <div class="gaps size-2x"></div>
              <!-- Tab panes -->
              <div class="tab-content no-pd">
                  <div class="tab-pane fade in active" id="tab1">
                      <div class="row">
                          <div class="col-md-3 col-sm-6 res-m-bttm">
                              <div class="pricing-box ucap shadow">
                                  <span class="pricing-title">BIG PLAN</span>
                                  <span class="pricing-sub-title">$ 30.00 minimum <br> $ 499.00 maximum</span>
                                  <span class="pricing-sap">20% profit</span>
                                  <span class="pricing-price"><br>24 Hours</span>
                                  <a href="{{ url('register') }}" class="btn btn-xs btn-outline btn-color">Buy</a>
                              </div>
                          </div>
                          <div class="col-md-3 col-sm-6 res-m-bttm">
                            <div class="pricing-box ucap shadow">
                                <span class="pricing-title">LARGE PLAN</span>
                                <span class="pricing-sub-title">$ 500.00 minimum <br> $ 999.00 maximum</span>
                                <span class="pricing-sap">30% profit</span>
                                <span class="pricing-price"><br>48 Hours</span>
                                <a href="{{ url('register') }}" class="btn btn-xs btn-outline btn-color">Buy</a>
                            </div>
                          </div>
                          <div class="col-md-3 col-sm-6 res-m-bttm">
                            <div class="pricing-box ucap shadow">
                                <span class="pricing-title">GIANT PLAN</span>
                                <span class="pricing-sub-title">$ 1000.00 minimum <br> $ unlimited maximum</span>
                                <span class="pricing-sap">50% profit</span>
                                <span class="pricing-price"><br>72 Hours</span>
                                <a href="{{ url('register') }}" class="btn btn-xs btn-outline btn-color">Buy</a>
                            </div>
                          </div>
                          <div class="col-md-3 col-sm-6 res-m-bttm">
                            <div class="pricing-box highlited white ucap shadow">
                                <span class="pricing-title">EXECUTIVE PLAN</span>
                                <span class="pricing-sub-title">$ 500.00 minimum <br> $ unlimited maximum</span>
                                <span class="pricing-sap">100% profit</span>
                                <span class="pricing-price"><br>24 Hours</span>
                                <a href="{{ url('register') }}" class="btn btn-xs btn-outline btn-alt">Buy</a>
                            </div>
                          </div>
                      </div>
                  </div>
                  <div class="tab-pane fade" id="tab2">
                      <div class="row">
                        <div class="col-md-3 col-sm-6 res-m-bttm">
                            <div class="pricing-box ucap shadow">
                                <span class="pricing-title">BIG PLAN</span>
                                <span class="pricing-sub-title">€ 30.00 minimum <br> € 499.00 maximum</span>
                                <span class="pricing-sap">20% profit</span>
                                <span class="pricing-price"><br>48 Hours</span>
                                <a href="{{ url('register') }}" class="btn btn-xs btn-outline btn-color">Buy</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 res-m-bttm">
                          <div class="pricing-box ucap shadow">
                              <span class="pricing-title">LARGE PLAN</span>
                              <span class="pricing-sub-title">€ 500.00 minimum <br> € 999.00 maximum</span>
                              <span class="pricing-sap">30% profit</span>
                              <span class="pricing-price"><br>48 Hours</span>
                              <a href="{{ url('register') }}" class="btn btn-xs btn-outline btn-color">Buy</a>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 res-m-bttm">
                          <div class="pricing-box ucap shadow">
                              <span class="pricing-title">GIANT PLAN</span>
                              <span class="pricing-sub-title">€ 1000.00 minimum <br> € unlimited maximum</span>
                              <span class="pricing-sap">50% profit</span>
                              <span class="pricing-price"><br>72 Hours</span>
                              <a href="{{ url('register') }}" class="btn btn-xs btn-outline btn-color">Buy</a>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 res-m-bttm">
                          <div class="pricing-box highlited white ucap shadow">
                              <span class="pricing-title">EXECUTIVE PLAN</span>
                              <span class="pricing-sub-title">€ 500.00 minimum <br> € unlimited maximum</span>
                              <span class="pricing-sap">100% profit</span>
                              <span class="pricing-price"><br>24 Hours</span>
                              <a href="{{ url('register') }}" class="btn btn-xs btn-outline btn-alt">Buy</a>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="tab-pane fade" id="tab3">
                      <div class="row">
                        <div class="col-md-3 col-sm-6 res-m-bttm">
                            <div class="pricing-box ucap shadow">
                                <span class="pricing-title">BIG PLAN</span>
                                <span class="pricing-sub-title">£ 30.00 minimum <br> £ 499.00 maximum</span>
                                <span class="pricing-sap">20% profit</span>
                                <span class="pricing-price"><br>24 Hours</span>
                                <a href="{{ url('register') }}" class="btn btn-xs btn-outline btn-color">Buy</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 res-m-bttm">
                          <div class="pricing-box ucap shadow">
                              <span class="pricing-title">LARGE PLAN</span>
                              <span class="pricing-sub-title">£ 500.00 minimum <br> £ 999.00 maximum</span>
                              <span class="pricing-sap">30% profit</span>
                              <span class="pricing-price"><br>48 Hours</span>
                              <a href="{{ url('register') }}" class="btn btn-xs btn-outline btn-color">Buy</a>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 res-m-bttm">
                          <div class="pricing-box ucap shadow">
                              <span class="pricing-title">GIANT PLAN</span>
                              <span class="pricing-sub-title">£ 1000.00 minimum <br> £ unlimited maximum</span>
                              <span class="pricing-sap">50% profit</span>
                              <span class="pricing-price"><br>72 Hours</span>
                              <a href="{{ url('register') }}" class="btn btn-xs btn-outline btn-color">Buy</a>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 res-m-bttm">
                          <div class="pricing-box highlited white ucap shadow">
                              <span class="pricing-title">EXECUTIVE PLAN</span>
                              <span class="pricing-sub-title">£ 500.00 minimum <br> £ unlimited maximum</span>
                              <span class="pricing-sap">100% profit</span>
                              <span class="pricing-price"><br>24 Hours</span>
                              <a href="{{ url('register') }}" class="btn btn-xs btn-outline btn-alt">Buy</a>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="tab-pane fade" id="tab4">
                      <div class="row">
                        <div class="col-md-3 col-sm-6 res-m-bttm">
                            <div class="pricing-box ucap shadow">
                                <span class="pricing-title">BIG PLAN</span>
                                <span class="pricing-sub-title">¥ 30.00 minimum <br> ¥ 499.00 maximum</span>
                                <span class="pricing-sap">20% profit</span>
                                <span class="pricing-price"><br>24 Hours</span>
                                <a href="{{ url('register') }}" class="btn btn-xs btn-outline btn-color">Buy</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 res-m-bttm">
                          <div class="pricing-box ucap shadow">
                              <span class="pricing-title">LARGE PLAN</span>
                              <span class="pricing-sub-title">¥ 500.00 minimum <br> ¥ 999.00 maximum</span>
                              <span class="pricing-sap">30% profit</span>
                              <span class="pricing-price"><br>48 Hours</span>
                              <a href="{{ url('register') }}" class="btn btn-xs btn-outline btn-color">Buy</a>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 res-m-bttm">
                          <div class="pricing-box ucap shadow">
                              <span class="pricing-title">GIANT PLAN</span>
                              <span class="pricing-sub-title">¥ 1000.00 minimum <br> ¥ unlimited maximum</span>
                              <span class="pricing-sap">50% profit</span>
                              <span class="pricing-price"><br>72 Hours</span>
                              <a href="{{ url('register') }}" class="btn btn-xs btn-outline btn-color">Buy</a>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-6 res-m-bttm">
                          <div class="pricing-box highlited white ucap shadow">
                              <span class="pricing-title">EXECUTIVE PLAN</span>
                              <span class="pricing-sub-title">¥ 500.00 minimum <br> ¥ unlimited maximum</span>
                              <span class="pricing-sap">100% profit</span>
                              <span class="pricing-price"><br>24 Hours</span>
                              <a href="{{ url('register') }}" class="btn btn-xs btn-outline btn-alt">Buy</a>
                          </div>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
           {{-- <div class="inline-form text-center">
               <div class="row">
                   <div class="col-md-8 col-md-offset-2">
                   <h4>Buy a different amount </h4>
                       <div class="clearfix">
                          <div class="form-field form-m-bttm">
                              <input name="btc-amount" placeholder="BTC Amount" class="form-control required" aria-required="true" type="email">
                          </div>
                          <div class="form-field form-m-bttm">
                              <select name="quote-request-hear" class="form-control" aria-invalid="false">
                                  <option value="usd">US Dollar (USD)</option>
                                  <option value="euro">European (Euro)</option>
                              </select>
                          </div>
                          <div class="form-field form-button form-m-bttm">
                              <a href="#" class="btn btn-alt">Buy Now</a>
                          </div>
                       </div>
                   </div>
               </div>
           </div> --}}
        </div>
    </div><!--End Pricing Tab -->

    <!--HR Line -->
  <div class="container hr-line"></div>

  <!--Section -->
  {{-- <div class="section section-pad">
      <div class="container">
          <div class="row">
              <div class="col-md-8">
                  <div class="text-block">
                      <h3>Buy Bitcoin Instantly from a Safe Exchange</h3>
                      <p>Many services nowadays offer their users to buy Bitcoins, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et lorem nec felis finibus laoreet. The company is officially registered in the UK, has a Money Services Busialiquam tellus, sit amet tristique ipsum. </p>
                      <p>Many services nowadays offer their users to buy Bitcoins, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et lorem nec felis finibus laoreet. The company is officially registered in the UK has a Money Services Business status.</p>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="icon-block">
                      <div class="icon-image">
                          <img src="{{ asset('assets/images') }}/icon-a.png" alt="icon">
                      </div>
                      <p>Many services nowadays offer their users to buy Bitcoins, Lorem ipsum dolor sit</p>
                      <ul>
                          <li>Lorem ipsum dolor sit amet.</li>
                          <li>Many services nowadays offer.</li>
                          <li>Busialiquam tellus, sit amet.</li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="gaps size-2x"></div>
          <div class="row">
              <div class="col-md-8">
                  <div class="text-block">
                      <h3>Buy Bitcoin Instantly from a Safe Exchange</h3>
                      <p>Many services nowadays offer their users to buy Bitcoins, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et lorem nec felis finibus laoreet. The company is officially registered in the UK, has a Money Services Busialiquam tellus, sit amet tristique ipsum. </p>
                      <p>Many services nowadays offer their users to buy Bitcoins, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et lorem nec felis finibus laoreet. The company is officially registered in the UK has a Money Services Business status.</p>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="icon-block">
                      <div class="icon-image">
                          <img src="{{ asset('assets/images') }}/icon-b.png" alt="icon">
                      </div>
                      <p>Many services nowadays offer their users to buy Bitcoins, Lorem ipsum dolor sit</p>
                      <p>Nowadays offer their Many services users to buy Bitcoins, Lorem ipsum dolor sit amet Many services nowadays offer their users to buy Bitcoins, Lorem ipsum dolor sit amet</p>
                  </div>
              </div>
          </div>
      </div>
  </div><!-- End Section --> --}}
  <div class="section section-pad cta-section">
      <div class="imagebg has-parallax">
          <img src="{{ asset('assets/images') }}/cta-light-bg.jpg" alt="cta-light">
      </div>
      <div class="container">
          <div class="row text-center">
              <div class="col-md-8 col-md-offset-2">
                  <h3>Are you searching for a quick, cheap, and safe way to buy Bitcoins? </h3>
                  <a href="#" class="btn btn-md btn-alt">buy bitcoin</a>
              </div>
          </div>
      </div>
  </div>




</x-base-layout>
