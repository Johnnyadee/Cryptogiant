<x-user-layout>
<div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="kyc-app wide-sm m-auto">
                                <div class="nk-block-head nk-block-head-lg wide-xs mx-auto">
                                    <div class="nk-block-head-content text-center">
                                        <h2 class="nk-block-title fw-normal">Begin your ID-Verification(Required)</h2>
                                        <div class="nk-block-des">
                                            <p>To comply with regulation each participant will have to go through indentity verification (KYC/AML) to prevent fraud causes. </p>
                                        </div>
                                    </div>
                                </div><!-- nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <div class="nk-kycfm">
                                            <div class="nk-kycfm-head">
                                                <div class="nk-kycfm-count">01</div>
                                                <div class="nk-kycfm-title">
                                                    <h5 class="title">Personal Details</h5>
                                                    <p class="sub-title">Your simple personal information required for identification</p>
                                                </div>
                                            </div><!-- .nk-kycfm-head -->
                                            <div class="nk-kycfm-content">
                                                <div class="nk-kycfm-note">
                                                    <em class="icon ni ni-info-fill" data-toggle="tooltip" data-placement="right" title="Tooltip on right"></em>
                                                    <p>Please type carefully and fill out the form with your personal details. Your can’t edit these details once you submitted the form.</p>
                                                </div>
                                                <form method="POST" action="{{ route('account_setup') }}">
                                                    @csrf
                                                <div class="row g-4">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">First Name <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                <input type="text" class="form-control form-control-lg" name="first_name" value="{{Auth::user()->first_name}}" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">Last Name <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                <input type="text" class="form-control form-control-lg" name="last_name" value="{{Auth::user()->last_name}}" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">Email Address <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                <input type="text" class="form-control form-control-lg" name="email" value="{{Auth::user()->email}}" required>
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">Phone Number <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                <input type="text" class="form-control form-control-lg" placeholder="+2349031332592(use this format)" name="phone_number" value="{{Auth::user()->phone_number}}" required>
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">Date of Birth <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                <input type="text" placeholder="Enter Date of Birth" class="form-control form-control-lg date-picker-alt" name="dob" value="{{Auth::user()->dob}}" required>
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->

                                                </div><!-- .row -->

                                            </div><!-- .nk-kycfm-content -->
                                            <div class="nk-kycfm-head">
                                                <div class="nk-kycfm-count">02</div>
                                                <div class="nk-kycfm-title">
                                                    <h5 class="title">Your Address</h5>
                                                    <p class="sub-title">Your simple personal information required for identification</p>
                                                </div>
                                            </div><!-- .nk-kycfm-head -->
                                            <div class="nk-kycfm-content">
                                                <div class="nk-kycfm-note">
                                                    <em class="icon ni ni-info-fill" data-toggle="tooltip" data-placement="right" title="Tooltip on right"></em>
                                                    <p>Your can’t edit these details once you submitted the form.</p>
                                                </div>
                                                <div class="row g-4">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">Address Line 1 <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                <input type="text" class="form-control form-control-lg" name="address_one" value="{{Auth::user()->address_one}}" required>
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">Address Line 2</label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                <input type="text" class="form-control form-control-lg" name="address_two" value="{{Auth::user()->address_two}}">
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">City <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                <input type="text" class="form-control form-control-lg" name="city" value="{{Auth::user()->city}}" required>
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">State <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                <input type="text" class="form-control form-control-lg" name="state" value="{{Auth::user()->state}}" required>
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">Nationality <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                <input type="text" class="form-control form-control-lg" name="nationality" value="{{Auth::user()->nationality}}" required>
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="form-label-group">
                                                                <label class="form-label">Zip Code </label>
                                                            </div>
                                                            <div class="form-control-group">
                                                                <input type="text" class="form-control form-control-lg" name="zip_code" value="{{Auth::user()->zip_code}}">
                                                            </div>
                                                        </div>
                                                    </div><!-- .col -->
                                                </div><!-- .row -->
                                            </div><!-- .nk-kycfm-content -->
                                            <div class="nk-kycfm-head">
                                                <div class="nk-kycfm-count">03</div>
                                                <div class="nk-kycfm-title">
                                                    <h5 class="title">Document Upload</h5>
                                                    <p class="sub-title">To verify your identity, please upload any of your document.</p>
                                                </div>
                                            </div><!-- .nk-kycfm-head -->
                                            <div class="nk-kycfm-content">
                                                <div class="nk-kycfm-note">
                                                    <em class="icon ni ni-info-fill" data-toggle="tooltip" data-placement="right" title="Tooltip on right"></em>
                                                    <p>In order to complete, please upload any of the following personal document.</p>
                                                </div>
                                                <ul class="nk-kycfm-control-list g-3">

                                                    <li class="nk-kycfm-control-item">
                                                        <input class="nk-kycfm-control" type="radio" name="id-proof" id="national-id" data-title="National ID">
                                                        <label class="nk-kycfm-label" for="national-id">
                                                            <span class="nk-kycfm-label-icon">
                                                                <div class="label-icon">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 76 63.0105">
                                                                        <path fill="currentColor" d="M76,18.79,56.53,9.56a6.19,6.19,0,0,0-5.19,0l-19.5,9.23a3.35,3.35,0,0,0-1.9,2.55H8.33A6.26,6.26,0,0,0,2,27.51v38.3A6.27,6.27,0,0,0,8.33,72H71.67A6.27,6.27,0,0,0,78,65.81v-44A3.37,3.37,0,0,0,76,18.79Zm-.56,47a3.77,3.77,0,0,1-3.8,3.71H8.33a3.77,3.77,0,0,1-3.8-3.71V27.51a3.75,3.75,0,0,1,3.7993-3.7H29.87v9.34A34.49,34.49,0,0,0,44,60.41l7.51,5.8a4.11,4.11,0,0,0,4.94,0l7.51-5.8A36.5307,36.5307,0,0,0,75.47,45.62V65.81Zm0-32.66a32.09,32.09,0,0,1-13.1,25.34l-7.51,5.8a1.5,1.5,0,0,1-1.8,0l-7.51-5.8A32.05,32.05,0,0,1,32.4,33.15V21.83A.91.91,0,0,1,33,21l19.5-9.23a3.51,3.51,0,0,1,3,0L74.92,21a.91.91,0,0,1,.55.82V33.15ZM53.87,21.43a12.47,12.47,0,0,0-12.6,12.31,12.62,12.62,0,0,0,25.23,0,12.46,12.46,0,0,0-12.6178-12.3l-.0122,0Zm0,22.14A9.83,9.83,0,1,1,64,33.78a10,10,0,0,1-10.1,9.79Zm3.31-13.22-5.32,5.19-1.18-1.15a1.29,1.29,0,0,0-1.79,0,1.2,1.2,0,0,0-.013,1.697l.013.013h0l2.08,2a1.27,1.27,0,0,0,1.79,0L59,32.09a1.22,1.22,0,0,0,0-1.72h0a1.29,1.29,0,0,0-1.8,0ZM29.87,57.16h-20a1.24,1.24,0,1,0,0,2.47h20a1.24,1.24,0,0,0,0-2.47ZM19.73,62.1H9.89a1.24,1.24,0,0,0,0,2.48h9.84a1.24,1.24,0,0,0,0-2.48Zm8.66-14.28h0L24,45.71a.36.36,0,0,1-.22-.34V44.16a1.878,1.878,0,0,1,.18-.24,10.9991,10.9991,0,0,0,1.35-2.48,2.53,2.53,0,0,0,1.23-2.16V37.51a2.61,2.61,0,0,0-.46-1.43V34a4.69,4.69,0,0,0-1.15-3.43,6.68,6.68,0,0,0-5.19-1.85,6.67,6.67,0,0,0-5.18,1.85A4.61,4.61,0,0,0,13.4,34v2a2.46,2.46,0,0,0-.46,1.43v1.78a2.49,2.49,0,0,0,.78,1.81,10.148,10.148,0,0,0,1.52,3v1.2a.36.36,0,0,1-.21.33l-4.1,2.15A4.79,4.79,0,0,0,8.33,52v1.43a1.26,1.26,0,0,0,.37.88,1.33,1.33,0,0,0,.9.36H29.87a1.31,1.31,0,0,0,.9-.36,1.26,1.26,0,0,0,.37-.88V52.11A4.76,4.76,0,0,0,28.39,47.82Zm.21,4.4H10.87V52a2.27,2.27,0,0,1,1.25-2l4.12-2.16a2.85,2.85,0,0,0,1.54-2.5V43.72a1.3,1.3,0,0,0-.3-.8,7.39,7.39,0,0,1-1.4-2.8,1.53,1.53,0,0,0-.6-.83V37.46a1.22,1.22,0,0,0,.43-.92v-2.7a2.17,2.17,0,0,1,.53-1.58,4.38,4.38,0,0,1,3.28-1,4.43,4.43,0,0,1,3.26,1,2.22,2.22,0,0,1,.55,1.6.8552.8552,0,0,0,0,.16v2.56a1.36,1.36,0,0,0,.46,1l-.08,1.86a1.23,1.23,0,0,0-.84.8,8.5819,8.5819,0,0,1-1.19,2.31c-.1.14-.22.28-.33.41a1.22,1.22,0,0,0-.33.82v1.66A2.86,2.86,0,0,0,22.86,48l4.41,2a2.28,2.28,0,0,1,1.33,2.07v.15Z" transform="translate(-2 -8.9898)" fill="#6476ff" /></svg>
                                                                </div>
                                                            </span>
                                                            <span class="nk-kycfm-label-text">National ID</span>
                                                        </label>
                                                    </li><!-- .nk-kycfm-control-item -->

                                                </ul><!-- .nk-kycfm-control-list -->
                                                <h6 class="title">To avoid delays when verifying account, Please make sure bellow:</h6>
                                                <ul class="list list-sm list-checked">
                                                    <li>Chosen credential must not be expaired.</li>
                                                    <li>Document should be good condition and clearly visible.</li>
                                                    <li>Make sure that there is no light glare on the card.</li>
                                                </ul>
                                                <div class="nk-kycfm-upload">
                                                    <h6 class="title nk-kycfm-upload-title">Upload Here Your Copy</h6>
                                                    <div class="row align-items-center">
                                                        <div class="col-sm-8">
                                                            <div class="nk-kycfm-upload-box">
                                                                <div class="upload-zone">
                                                                    <div class="dz-message" data-dz-message>
                                                                        <span class="dz-message-text">Drag and drop file</span>
                                                                        <span class="dz-message-or">or</span>
                                                                        <button class="btn btn-primary">SELECT</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4 d-none d-sm-block">
                                                            <div class="mx-md-4">
                                                                <img src="{{ asset('main') }}/images/icons/id-front.svg" alt="ID Front">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- nk-kycfm-upload -->

                                            </div><!-- .nk-kycfm-content -->
                                            <div class="nk-kycfm-footer">
                                                <div class="form-group">
                                                    <div class="custom-control custom-control-xs custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="tc-agree">
                                                        <label class="custom-control-label" for="tc-agree">I Have Read The <a href="#">Terms Of Condition</a> And <a href="#">Privacy Policy</a></label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="custom-control custom-control-xs custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="info-assure">
                                                        <label class="custom-control-label" for="info-assure">All The Personal Information I Have Entered Is Correct.</label>
                                                    </div>
                                                </div>
                                                <div class="nk-kycfm-action pt-2">
                                                    <button type="submit" class="btn btn-lg btn-primary">Process for Verify</button>
                                                </div>
                                                </form>
                                            </div><!-- .nk-kycfm-footer -->
                                        </div><!-- .nk-kycfm -->
                                    </div><!-- .card -->
                                </div><!-- nk-block -->
                            </div><!-- kyc-app -->
                        </div>
                    </div>
                </div>



</x-user-layout>
