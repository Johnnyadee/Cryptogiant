<x-base-layout>
    <div id="header" class="banner header-slider">
        <div class="single-slide light row-vm" style="background-image:url(https://res.cloudinary.com/letech-digital-solutions/image/upload/v1614425953/header-bg-b_als0rn.jpg)">
            <div class="container">
                <div class="banner-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="animate-bottom delayms5">Welcome to <br /><span class="ucap">Crypto-Giant</span></h1>
                            <p class="lead animate-bottom delayms7">A Bitcoin investment you can Trust</p>
                            <ul class="btns animate-bottom delayms9">
                                <li><a href="{{ url('about-crypto-gaint') }}" class="btn">View more</a></li>
                                <li><a href="{{ url('register') }}" class="btn btn-outline">Try It</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide light row-vm" style="background-image:url(https://res.cloudinary.com/letech-digital-solutions/image/upload/v1614425953/header-bg-a_qldnbr.jpg)">
            <div class="container">
                <div class="banner-content">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <h1 class="animate-bottom delayms5">Giant is not just <br /><span class="ucap">a name</span></h1>
                            <p class="lead animate-bottom delayms7">it is the character and the merit. Begin your journey with
                                the best traders and investors in the crypto world.</p>
                            <ul class="btns animate-bottom delayms9">
                                <li><a href="{{ url('about-crypto-gaint') }}" class="btn">View more</a></li>
                                <li><a href="{{ url('register') }}" class="btn btn-outline">Try It</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="features-box section section-pad">
      <div class="container">
          <div class="row text-center">
              <div class="col-md-3 col-sm-6 res-m-bttm">
                  <div class="box box-alt-bg round shadow">
                      <img src="{{ asset('assets/images') }}/box-icon-a.png" alt="box-icon" class="box-icon">
                      <h6 class="ucap">Licensed</h6>
                      <p class="small">Digital currency stored on our servers is licensed and covered by our insurance policy</p>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6 res-m-bttm">
                  <div class="box box-alt-bg round shadow">
                      <img src="{{ asset('assets/images') }}/box-icon-b.png" alt="box-icon" class="box-icon">
                      <h6 class="ucap">NO HIDDEN FEES</h6>
                      <p class="small"><br>We charge no hidden fees on all our investments</p>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6 res-m-bttm">
                  <div class="box box-alt-bg round shadow">
                      <img src="{{ asset('assets/images') }}/box-icon-c.png" alt="box-icon" class="box-icon">
                      <h6 class="ucap">INSTANT WITHDRAWAL</h6>
                      <p class="small"><br><br>Withdrawal is fast and easy</p>
                  </div>
              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="box box-alt-bg round shadow">
                      <img src="{{ asset('assets/images') }}/box-icon-d.png" alt="box-icon" class="box-icon">
                      <h6 class="ucap">SECURE trusted</h6>
                      <p class="small"><br>All activities carried out are ssl secured</p>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <div class="section section-pad bg-grey">
       <div class="container">
           <div class="row row-vm">
               <div class="col-md-5">
                   <div class="round mgr--30 res-m-bttm"><img src="https://res.cloudinary.com/letech-digital-solutions/image/upload/v1614425953/photo-md-a_fzgfr2.jpg" alt="photo-md" class="img-shadow"></div>
               </div>
               <div class="col-md-6 col-md-offset-1 ">
                <div class="text-block">
                    <h2>Crypto Giant is a true opportunity to
                         &amp; earn on cryptocurrency.</h2>
                    <p>Nowadays cryptocurrency is one of the main payment instruments, which can be used
                        online. giant-coin has been using this kind of digital payment for quite a while to
                        gain and raise profit.</p>
                    <p>Crypto Giant provides its clients with an opportunity to invest money into mining
                        farms located all around the world to obtain quite a big income later, which can be done
                        even without client's direct participation. The company actively uses trading bots on
                        digital currency stock-markets, which is very convenient and profitable. We also try to
                        attract new partners and share our experience with the like-minded people all over the
                        world.</p>
                    {{-- <a href="#" class="btn btn-alt">Read More</a> --}}
                </div>
               </div>
           </div>
       </div>
    </div>

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
        </div>
    </div><!--End Pricing Tab -->

    <div class="section section-pad has-bg light dark-filter">
       <div class="imagebg has-parallax">
        <img src="{{ asset('assets/images') }}/calc-bg.jpg" alt="calc-bg">
    </div>
       <div class="container">
           <div class="row row-vm">
               <div class="col-md-5">
                <div class="text-block">
                    <h2>Currency Calculator</h2>
                    {{-- <p>Vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint.</p> --}}
                </div>
               </div>
               <div class="col-md-6 col-md-offset-1">
                   <div class="bitcoin-calculator">
                       <script>
                        baseUrl = "https://widgets.cryptocompare.com/";
                        var scripts = document.getElementsByTagName("script");
                        var embedder = scripts[ scripts.length - 1 ];
                        (function (){
                        var appName = encodeURIComponent(window.location.hostname);
                        if(appName==""){appName="local";}
                        var s = document.createElement("script");
                        s.type = "text/javascript";
                        s.async = true;
                        var theUrl = baseUrl+'serve/v1/coin/converter?fsym=BTC&tsyms=USD,EUR,CNY,GBP';
                        s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                        embedder.parentNode.appendChild(s);
                        })();
                    </script>
                   </div>
                   <a href="{{ url('register') }}" class="btn">Invest now</a>
               </div>
           </div>
       </div>
    </div>
    <div class="section section-pad">
       <div class="container">
           <div class="section-head">
            <div class="row text-center">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <h2 class="heading-section">Why choose Us</h2>
                </div>
            </div>
           </div>
           <div class="gaps size-3x"></div>
        <div class="row text-center row-vm">
            <div class="col-md-4 res-m-bttm-lg">
                <div class="box-alt">
                    <span class="pe pe-7s-server"></span>
                    <h4>Payment Options</h4>
                    <p>We accept all credit cards and bitcoin transfer from everywhere around the world</p>
                </div>
                <div class="box-alt">
                    <span class="pe pe-7s-note"></span>
                    <h4>Legal Compliance</h4>
                    <p>We are officially registered by Welsh, Wales Cryptocurrency body ( WCB )as a certified
                        company that meets an overall standard of quality</p>
                </div>
                <div class="box-alt">
                    <span class="pe pe-7s-airplay"></span>
                    <h4>Cross-Platform Investment</h4>
                    <p>You can invest with us directly from your bitcoin wallet provider</p>
                </div>
            </div>
            <div class="col-md-4 res-m-bttm-lg">
                <div class="box-alt">
                    <span class="pe pe-7s-lock"></span>
                    <h4>Strong Security</h4>
                    <p>Each individual within our risk management department is passionate about putting forth their best effort to bring our clients an optimal level of success</p>
                </div>
                <div class="box-alt img">
                    <img src="{{ asset('assets/images') }}/square-md-a.png" alt="square">
                </div>
                <div class="box-alt">
                    <span class="pe pe-7s-cash"></span>
                    <h4>Competitive Commissions</h4>
                    <p>We always work 24/7 around the clock to give you the best services we can provide </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box-alt">
                    <span class="pe pe-7s-global"></span>
                    <h4>World Coverage</h4>
                    <p>Our website is accessible from any part of the world and from any device</p>
                </div>
                <div class="box-alt">
                    <span class="pe pe-7s-graph"></span>
                    <h4>Advanced Reporting</h4>
                    <p>Morbi eget varius risus, ut venenatis libero Pellentesque in porta dui.</p>
                </div>
                <div class="box-alt">
                    <span class="pe pe-7s-graph1"></span>
                    <h4>Margin Trading</h4>
                    <p>Morbi eget varius risus, ut venenatis libero Pellentesque in porta dui.</p>
                </div>
            </div>
        </div>
       </div>
    </div>
    <div class="section section-pad bg-grey">
       <div class="container">
           <div class="row row-vm">
               <div class="col-md-6">
                <div class="trendingview-chart res-m-bttm">
                    <!-- TradingView Widget BEGIN -->
                    <script src="https://s3.tradingview.com/tv.js"></script>
                    <script>
                    new TradingView.widget({
                        "autosize":true,
                        "symbol": "NASDAQ:AAPL",
                        "interval": "60",
                        "timezone": "Etc/UTC",
                        "theme": "Light",
                        "style": "1",
                        "locale": "en",
                        "toolbar_bg": "#f1f3f6",
                        "enable_publishing": false,
                        "allow_symbol_change": true,
                        "hideideas": true
                    });
                    </script>
                </div>
               </div>
               <div class="col-md-5 col-md-offset-1 ">
                <div class="text-block">
                    <h2>No Experience? <br/>No worries</h2>
                    <p>Looking to get started in the world of cryptocurrency world without knowledge of it?</p>
                    <p>With CryptoGiant its easy, we do all the hard work for you, all you have to do is INVEST with us </p>
                    <a href="#" class="btn btn-alt">get started</a>
                </div>
               </div>
           </div>
       </div>
    </div>

    <div class="section section-pad-sm cta-small light">
    <div class="cta-block">
        <div class="container">
            <div class="row mobile-center">
                <div class="col-md-12">
                    <div class="cta-sameline">
                        <h3>Open account for free and start trading Bitcoins now!</h3>
                        <a class="btn btn-outline btn-alt btn-md" href="{{ url('register') }}">get started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="section section-pad-md bg-grey">

    </div>
 </x-base-layout>
