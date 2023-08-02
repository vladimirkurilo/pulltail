<?php $page = 'booking'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Order Confirmation
        @endslot
        @slot('li_1')
            Pages
        @endslot
        @slot('li_2')
            Order Confirmation
        @endslot
    @endcomponent
    <section class="order-confirmation">
        <div class="container">
            <div class="confirm-order">
                <div class="section-title">
                    <h3>Order Confirmation</h3>
                    <h5>Order Total : <span>$315</span></h5>
                </div>
                <div class="booking-details order-confirm-box">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="confirmation-title">
                                <h4>Car Details</h4>
                                <a href="javascript:void(0)">Edit</a>
                            </div>
                            <div class="order-car">
                                <span><img src="{{ URL::asset('/assets/img/detail-smallcar-img-2.jpg') }}"
                                        alt=""></span>
                                <h5>Chevrolet Camaro<span>$315</span></h5>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="confirmation-title">
                                <h4>Extra Service</h4>
                                <a href="javascript:void(0)">Edit</a>
                            </div>
                            <ul class="address-info">
                                <li>Baby Seat : $10</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="confirmation-title">
                                <h4>Payment details</h4>
                                <a href="javascript:void(0)">Edit</a>
                            </div>
                            <div class="visa-card">
                                <a href=""><img src="{{ URL::asset('/assets/img/visa.svg') }}" alt=""></a>
                                <h6>Visa card ending in 1245</h6>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="confirmation-title">
                                <h4>Pickup Location & Date</h4>
                                <a href="javascript:void(0)">Edit</a>
                            </div>
                            <ul class="address-info">
                                <li>45, 4th Avanue Mark Street USA</li>
                                <li>04 Jun 2023 - 11:00 PM</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="confirmation-title">
                                <h4>Your Information</h4>
                                <a href="javascript:void(0)">Edit</a>
                            </div>
                            <ul class="address-info">
                                <li>Casandra</li>
                                <li>casandra@example.com</li>
                                <li>+1 73940 45355</li>
                                <li>45, 4th Avanue Mark Street USA</li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="confirmation-title">
                                <h4>Drop Off Location</h4>
                                <a href="javascript:void(0)">Edit</a>
                            </div>
                            <ul class="address-info mb-0">
                                <li>45, 4th Avanue Mark Street USA</li>
                                <li>06 Jun 2023 - 11:00 PM</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="place-order-btn">
                    <a href="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pages_edit"><i
                            class="feather-bar-chart me-2"></i>Place Order</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal custom-modal fade check-availability-modal payment-success-modal" id="pages_edit" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="payment-success">
                        <span class="check"><i class="fa-solid fa-check-double"></i></span>
                        <h5>Order Confirmed</h5>
                        <p>You Payment has been successfully done.
                            Trasaction id :<span> #5064164454</span>
                        </p>
                        <button type="submit"
                            class="d-inline-flex align-items-center justify-content-center btn w-50 btn-primary ok-btn" data-bs-dismiss="modal" aria-label="Close">
                            OK
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Modal -->



    @component('components.scrolltotop')
    @endcomponent
@endsection
