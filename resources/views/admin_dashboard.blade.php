@extends('layouts.admin')

@section('title', trans('dashboard'))

@section('content')
<div class="page-content-wrapper">
<div class="content-wrapper container">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title">
            <h4 class="float-left">Dashboard</h4>
            <ol class="breadcrumb float-left float-md-right">
                <li class="breadcrumb-item"><a href="javascript: void(0);"><i class="fa fa-home"></i></a></li>
                <li class="breadcrumb-item">Dashboard</li>
            </ol>
            </div>
        </div>
    </div>
    <!-- end .page title-->

    <div class="row">

        <div class="col-md-6 col-lg-4">
            <div class="card dashboard-bg-one white-text clearfix text-center dashboard-border  boxminheight">
            <div class="card-content clearfix">
                <i class="icon-settings dashboard-icon"></i>
                <h4 class=" h5-style">Send your first fax</h4>
                <p class="dashboard-p">256-bit encryption. Real-time notifications.</p>
                <button type="button" class="btn btn-primary dashboard-btn  btn-sm" data-toggle="modal" data-target="#myModal"> Send Fax</button>
                <div class="clearfix"></div>
            </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card  dashboard-bg-two white-text clearfix text-center dashboard-border  boxminheight">
            <div class="card-content clearfix">
                <i class="icon-layers dashboard-icon"></i>
                <h4 class=" h5-style">Start recieving faxes</h4>
                <p class="dashboard-p">Get a local number. Configure notifications.</p>
                <button type="button" class="btn btn-warning dashboard-btn btn-sm " data-toggle="modal" data-target="#myModalone"  > Get A Fax Number</button>
                <div class="clearfix"></div>
            </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="card dashboard-bg-four  white-text clearfix text-center dashboard-border  boxminheight">
            <div class="card-content clearfix">

                <i class="fa fa-lightbulb-o dashboard-icon"></i>
                <h4 class=" h5-style"> Did you know ?</h4>
                <p class="dashboard-p">99% of faxes are delivered to recipients in under 2 minutes</p>
                <div class="clearfix"></div>
            </div>
            </div>
        </div>


    </div>
</div>
<div class="clearfix"></div>
<div class="modal fade modalone" id="myModal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header text-center">
                <div class="col-sm-12">
                <div class="dashboard-bg-top">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group text-left form-group-padding-bottom">
                            <button class="btn btn-primary btn-sm" type="submit">Send</button>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <p class="NewFax">New Fax</p>
                            <p class="NewFax-Delivery dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Delivery by 04:13 PM</p>
                            <div class="dropdown-menu panel-dropdown" role="menu">
                            <a class="dropdown-item" href="#"> Sent with 256-bit encryption</a>
                            <a class="dropdown-item" href="#"> Real-time delivery updates</a>
                            <a class="dropdown-item" href="#">   Transmission Receipt provided</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="panel panel-card ">
                <div class="panel-body  p-xl-3">
                    <form method="get" class="form-horizontal" >
                        <div class="form-group row">
                            <div class="col-sm-12">
                            <div class="dashboard-date-two-absolute">
                                <div class="btn-group dashboard-date-two-absolute">
                                    <i class="icon-grid dropdown-toggle" data-toggle="dropdown" aria-expanded="false"></i>
                                    <div class="dropdown-menu panel-dropdown" role="menu">
                                        <a class="dropdown-item" href="#">Edit Logo</a>
                                        <a class="dropdown-item" href="#">Remove Cover Page</a>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-sm-6 col-6">
                            <h2 class=" dashboard-border-fax-head">Fax</h2>
                            </div>
                            <div class="col-sm-6 col-6 text-right">
                            <p class="dashboard-date">03/22/2021</p>
                            <p class="dashboard-date-two">1 page</p>
                            </div>
                        </div>
                        <div class="form-group row ">
                            <label class="col-sm-12 form-control-label">Recipient fax number </label>
                            <div class="col-sm-12 form-relative">
                            <img  class="imgrelative" src="{{asset('admin/images/12.png')}}">
                            <input type="text" class="form-control" required>
                            <i class="fa fa-pencil relativepencil" data-toggle="modal" data-target="#myModalfour"></i>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 form-control-label">To</label>
                            <div class="col-sm-12"><input type="text" class="form-control"> <span class="form-text m-b-none"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 form-control-label">From</label>
                            <div class="col-sm-12"><input type="password" class="form-control" name="password"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 form-control-label">Subject</label>
                            <div class="col-sm-12"><input type="" class="form-control" name="Subject"></div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 form-control-label">comments</label>
                            <div class="col-sm-12"><textarea class="form-control" rows="6" cols="12" ></textarea>
                            </div>
                            <div class="form-group row">
                            <label class="col-sm-10 form-control-label"></label>
                            <div class="col-sm-12"><label class="checkbox-inline checkbox-inline-dashboard">
                                <label class="checkbox-inline"><input type="checkbox" value="option2" id="inlineCheckbox2" required>
                                <span>Please Reply </span>
                                </label>
                                <label class="checkbox-inline"><input type="checkbox" value="option3" id="inlineCheckbox3" required>
                                <span>For Review </span>
                                </label>
                                <label class="checkbox-inline"><input type="checkbox" value="option2" id="inlineCheckbox2" required>
                                <span>Please Reply </span>
                                </label>
                                <label class="checkbox-inline"><input type="checkbox" value="option3" id="inlineCheckbox3" required>
                                <span>For Review </span>
                                </label>
                            </div>
                            </div>
                            <div class="form-group row text-center">
                            <div class="col-md-12">
                                <span class="btn btn-success btn-sm fileinput-button">
                                <i class="fa fa-fw fa-upload"></i>
                                <span>Drop an attachment here</span>
                                <input type="file" name="files[]" multiple="">
                                </span>
                            </div>
                            </div>
                    </form>
                    </div>
                </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-accent btn-sm btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="modal fade SelectFax" id="myModalone" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content modalp">
                <!-- <div class="modal-header text-center"> -->

                <!-- <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small> -->
                <!-- </div> -->
                <div class="modal-body">
                    <!-- <h4 class="modal-title"> </h4> -->

                <div class="row">

        <div class="col-md-8 col-lg-8 body-style">


        <div class="" data-dismiss="modal"> <i class="fa fa-times cross-style"></i> </div>

            <h4 class="modal-title-two">Select Fax Number </h4>

            <div class="form-group ">
            <label class="col-sm-2 form-control-label">Country</label>

                                        <div class="col-sm-12"><select class="form-control m-b" name="account">
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                            </select>


                                        </div>
                                    </div>


                        <div class="form-group "><label class="col-sm-2 form-control-label">Area</label>

                                        <div class="col-sm-12">
                                        <select class="form-control m-b" name="account">
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                            </select>


                                        </div>
                                    </div>


                                    <div class="form-group form-group-padding">
                                    <label class="col-sm-12 form-control-label">Fax number</label>
                                        <div class="row">
                                        <div class="col-sm-3">
                                        <select class="form-control m-b" name="account">
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                            </select>


                                        </div>
                                        <div class="col-sm-3">
                                        <select class="form-control m-b" name="account">
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                            </select>


                                        </div>

                                        <div class="col-sm-3"><select class="form-control m-b" name="account">
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                            </select>


                                        </div>

                                        </div>

                                    </div>

                                    <p class="SecureCheckout"><span><i class="fa fa-lock"></i></span> Secure Checkout</p>

                                    <div class="form-group col-sm-10">

                                    <button type="button" class="btn btn-block btn-primary dashboard-btn " > Continue With +1 (205) 255-5261</button>

                                    </div>

                                    <p class="Secureprice"> iFax Plus is ₹14,472.98/yr (₹1206.08/mo). Cancel anytime.</p>
                                    <p class="Secureagree"> By continuing you agree to our      Terms and   Privacy policies. </p>



        </div>


        <div class="col-md-4 col-lg-4 dashboard-bg">
            <div class="   ">
            <h2 class="h2-four">What You Get</h2>
            </div>


            <div class="row">
            <div class="col-md-6 col-lg-6 col-padding-six">
            <div class="sale-state-box">
                                <h3>654</h3>
                                <span>Real-time email updates</span>
                            </div>
            </div>

            <div class="col-md-6 col-lg-6 col-padding-six">
            <div class="sale-state-box">
                                <h3>654</h3>
                                <span>256-Bit HIPAA compliant</span>
                            </div>
            </div>



            <div class="col-md-6 col-lg-6 col-padding-six">
            <div class="sale-state-box">
                                <h3>654</h3>
                                <span>Unlimited cloud storage</span>
                            </div>
            </div>



            <div class="col-md-6 col-lg-6 col-padding-six">
            <div class="sale-state-box">
                                <h3>654</h3>
                                <span>24/7/365 human support</span>
                            </div>
            </div>
            </div>



            <div class="Join"> Join 5 million users at 20,000 companies.  </div>



            <div class="text-center"><img class="margin-top-second" alt=""  src="{{asset('admin/images/rating.svg')}}"></div>
            <div class="Average">Average 4.8 rating by 30,000+ users </div>

        </div>







    </div>


                </div>

            </div>
        </div>
    </div>



    <div class="modal fade" id="myModalfour" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center">
                <h4 class="modal-title text-head">Oops!</h4>
                </div>
                <div class="modal-body">
                <h4 class="m-t-none modal-h4">Broadcast faxing is only available with iFax Professional. Please upgrade to continue.</h4>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn  btn-sm btn-primary">Upgrade now</button>
                </div>
            </div>
        </div>
    </div>


    </div>
    <!-- END CONTENT BODY -->
</div>
<!-- /wrapper -->
@endsection

@push('scripts_start')

@endpush
