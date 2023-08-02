<?php $page = 'booking-payment'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Booking
        @endslot
        @slot('li_1')
            Pages
        @endslot
        @slot('li_2')
            Booking
        @endslot
    @endcomponent

    <!-- Booking  -->
    <section class="booking-section">
        <div class="container">
            <ul class="nav nav-pills booking-tab" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-booking-tab" data-bs-toggle="pill" href="#pills-booking" role="tab"
                        aria-controls="pills-booking" aria-selected="true">
                        <span>Step 1</span>
                        <h5>Booking Details</h5>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-payment-tab" data-bs-toggle="pill" href="#pills-payment" role="tab"
                        aria-controls="pills-payment" aria-selected="false">
                        <span>Step 2</span>
                        <h5>Payments Details</h5>
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-booking" role="tabpanel"
                    aria-labelledby="pills-booking-tab">
                    <div class="booking-details">
                        <div class="booking-title">
                            <h3>Booking Details</h3>
                        </div>
                        <div class="row booking-info">
                            <div class="col-md-4 col-sm-6 pickup-address">
                                <h5>Pickup</h5>
                                <p>45, 4th Avanue Mark Street USA</p>
                                <span>Date & time : 04 Jun 2023</span>
                            </div>
                            <div class="col-md-4 col-sm-6 drop-address">
                                <h5>Drop Off</h5>
                                <p>78, 10th street Laplace USA</p>
                                <span>Date & time : 06 Jun 2023</span>
                            </div>
                            <div class="col-md-4 col-sm-6 booking-amount">
                                <h5>Amount to be paid</h5>
                                <h6><span>$315 </span><i class="feather-info"></i></h6>
                            </div>
                        </div>
                        <div class="booking-form">
                            <div class="booking-title">
                                <h5>Enter Below details</h5>
                            </div>
                            <form class="#">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Enter Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Email Address <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" placeholder="Your Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Phone Number <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="+ 1 65656565656">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Address <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Adderss">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Comments <span class="text-danger"> *</span> </label>
                                            <textarea rows="4" class="form-control" placeholder="Comments"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="payment-btn">
                                    <button class="btn btn-primary submit-review" type="submit">Go to Payment<i
                                            class="fa-solid fa-arrow-right ms-2"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="back-detail-page">
                        <a href="{{ url('listing-details') }}"><i class="fa-solid fa-arrow-left me-2"></i> Back to detail
                            page</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-payment" role="tabpanel" aria-labelledby="pills-payment-tab">
                    <div class="booking-details payment-details">
                        <div class="booking-title">
                            <h3>Payment Details</h3>
                        </div>
                        <div class="booking-info">
                            <div class="booking-amount">
                                <h5>Your Payment</h5>
                                <h6><span>$315 </span><i class="feather-info"></i></h6>
                            </div>
                        </div>
                        <div class="payment-method">
                            <h4>Choose Your Payment Method</h4>
                            <ul>
                                <li><a href=""><img src="{{ URL::asset('/assets/img/icons/payment-1.svg') }}"
                                            alt=""></a></li>
                                <li><a href=""><img src="{{ URL::asset('/assets/img/icons/payment-2.svg') }}"
                                            alt=""></a></li>
                                <li><a href=""><img src="{{ URL::asset('/assets/img/icons/payment-3.svg') }}"
                                            alt=""></a></li>
                                <li><a href=""><img src="{{ URL::asset('/assets/img/icons/payment-4.svg') }}"
                                            alt=""></a></li>
                            </ul>
                            <div class="booking-form">
                                <div class="booking-title">
                                    <h5>Enter Below Details</h5>
                                </div>
                                <form class="#">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Card Number <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="45612212255455">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Expiration Date <span class="text-danger">*</span></label>
                                                <input type="number" class="form-control" placeholder="12/25">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Security Number <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group payment-checkbox m-0">
                                            <label class="custom_check">
                                                <input type="checkbox" name="rememberme" class="rememberme">
                                                <span class="checkmark"></span>
                                                Save this account for future transaction
                                            </label>
                                        </div>
                                    </div>
                                    <div class="payment-btn">
                                        <button class="btn btn-primary submit-review w-100" type="button"
                                            data-bs-toggle="modal" data-bs-target="#pages_edit">Pay $315</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="back-detail-page">
                        <a href="{{ url('booking') }}"><i class="fa-solid fa-arrow-left me-2"></i> Back to Booking
                            Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Booking  -->
    <!-- Modal -->
    <div class="modal custom-modal fade check-availability-modal payment-success-modal" id="pages_edit" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="payment-success">
                        <span class="check"><i class="fa-solid fa-check-double"></i></span>
                        <h5>Payment Successful</h5>
                        <p>You Payment has been successfully done.
                            Trasaction id :<span> #5064164454</span>
                        </p>
                        <div class="order-confirm">
                            <a href="{{ url('booking') }}">Go to Order Confirmation<i
                                    class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /Modal -->
    @component('components.scrolltotop')
    @endcomponent
@endsection
