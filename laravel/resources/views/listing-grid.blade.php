<?php $page = 'listing-grid'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Car Listings
        @endslot
        @slot('li_1')
            Listings
        @endslot
        @slot('li_2')
            Car Listings
        @endslot
    @endcomponent

    <div class="sortby-sec">
        <div class="container">
            <div class="sorting-div">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-4 col-lg-3 col-sm-12 col-12">
                        <div class="count-search">
                            <p>Showing <span>1-8</span> of 10 Results</p>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-9 col-sm-12 col-12">
                        <div class="product-filter-group">
                            <div class="sortbyset">
                                <span class="sortbytitle">Show : </span>
                                <div class="sorting-select select-one">
                                    @livewire('select2')
                                </div>
                                <div class="sorting-select select-two">
                                    <select class="form-control select">
                                        <option>Low to High</option>
                                        <option>High to Low</option>
                                    </select>
                                </div>
                                <div class="sorting-select select-three">
                                    <select class="form-control select">
                                        <option>Popular</option>
                                        <option>Toyota Camry SE 350</option>
                                        <option>Audi A3 2019 new</option>
                                        <option>Ferrari 458 MM Speciale</option>
                                        <option>Chevrolet Camaro</option>
                                        <option>Acura Sport Version</option>
                                    </select>
                                </div>
                            </div>
                            <div class="grid-listview">
                                <ul>
                                    <li>
                                        <a href="{{ url('listing-grid') }}" class="active">
                                            <i class="feather-grid"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ url('listing-list') }}">
                                            <i class="feather-list"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Car Grid View -->
    <section class="section car-listing">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 theiaStickySidebar">
                    <form action="javascript:void(0)" autocomplete="off" class="sidebar-form">
                        <!-- Customer -->
                        <div class="sidebar-heading">
                            <h3>What Are You Looking For</h3>
                        </div>
                        <div class="product-search">
                            <div class="form-custom">
                                <input type="text" class="form-control" id="member_search1" placeholder="">
                                <span><img src="{{ URL::asset('/assets/img/icons/search.svg') }}" alt="img"></span>
                            </div>
                        </div>
                        <div class="accordion" id="accordionMain1">
                            <div class="card-header-new" id="headingOne">
                                <h6 class="filter-title">
                                    <a href="javascript:void(0);" class="w-100" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Car Category
                                        <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample1">
                                <div class="card-body-chat">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="checkBoxes1">
                                                <div class="selectBox-cont">
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="username">
                                                        <span class="checkmark"></span> Tesla
                                                    </label>
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="username">
                                                        <span class="checkmark"></span> Ford
                                                    </label>
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="username">
                                                        <span class="checkmark"></span> Mercediz Benz
                                                    </label>
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="username">
                                                        <span class="checkmark"></span> Audi
                                                    </label>
                                                    <!-- View All -->
                                                    <div class="view-content">
                                                        <div class="viewall-One">
                                                            <label class="custom_check w-100">
                                                                <input type="checkbox" name="username">
                                                                <span class="checkmark"></span> Kia
                                                            </label>
                                                            <label class="custom_check w-100">
                                                                <input type="checkbox" name="username">
                                                                <span class="checkmark"></span> Honda
                                                            </label>
                                                            <label class="custom_check w-100">
                                                                <input type="checkbox" name="username">
                                                                <span class="checkmark"></span> Toyota
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <!-- /View All -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Customer -->

                        <div class="accordion" id="accordionMain2">
                            <div class="card-header-new" id="headingTwo">
                                <h6 class="filter-title">
                                    <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        Car Type
                                        <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample2">
                                <div class="card-body-chat">
                                    <div id="checkBoxes2">
                                        <div class="selectBox-cont">
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="username">
                                                <span class="checkmark"></span> Convertible
                                            </label>
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="username">
                                                <span class="checkmark"></span> Crossover
                                            </label>
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="username">
                                                <span class="checkmark"></span> Sedan
                                            </label>
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="username">
                                                <span class="checkmark"></span> Wagon
                                            </label>
                                            <!-- View All -->
                                            <div class="view-content">
                                                <div class="viewall-One">
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="username">
                                                        <span class="checkmark"></span> Pickup
                                                    </label>
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="username">
                                                        <span class="checkmark"></span> Wagon
                                                    </label>
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="username">
                                                        <span class="checkmark"></span> SUV
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- /View All -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- By Status -->
                        <div class="accordion" id="accordionMain3">
                            <div class="card-header-new" id="headingThree">
                                <h6 class="filter-title">
                                    <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="true"
                                        aria-controls="collapseThree">
                                        Capacity
                                        <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample3">
                                <div class="card-body-chat">
                                    <div id="checkBoxes3">
                                        <div class="selectBox-cont">
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="bystatus">
                                                <span class="checkmark"></span> 1-4
                                            </label>
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="bystatus">
                                                <span class="checkmark"></span> 1-6
                                            </label>
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="bystatus">
                                                <span class="checkmark"></span> 4-6
                                            </label>
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="bystatus">
                                                <span class="checkmark"></span>4-8
                                            </label>
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="bystatus">
                                                <span class="checkmark"></span>8+
                                            </label>
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="bystatus">
                                                <span class="checkmark"></span> 10+
                                            </label>
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="bystatus">
                                                <span class="checkmark"></span> 15+
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /By Status -->

                        <!-- Category -->
                        <div class="accordion" id="accordionMain4">
                            <div class="card-header-new" id="headingFour">
                                <h6 class="filter-title">
                                    <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                        Price
                                        <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample4">
                                <div class="card-body-chat">
                                    <div class="filter-range">
                                        @livewire('rangeslider')
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Category -->

                        <div class="accordion" id="accordionMain5">
                            <div class="card-header-new" id="headingFive">
                                <h6 class="filter-title">
                                    <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                        Rating
                                        <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample5">
                                <div class="card-body-chat">
                                    <div id="checkBoxes4">
                                        <div class="selectBox-cont">
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="category">
                                                <span class="checkmark"></span>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                            </label>
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="category">
                                                <span class="checkmark"></span>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                            </label>
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="category">
                                                <span class="checkmark"></span>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                            </label>
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="category">
                                                <span class="checkmark"></span>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                            </label>
                                            <div class="view-content">
                                                <div class="viewall-Two">
                                                    <label class="custom_check w-100">
                                                        <input type="checkbox" name="username">
                                                        <span class="checkmark"></span>
                                                        <i class="fas fa-star filled"></i>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion" id="accordionMain6">
                            <div class="card-header-new" id="headingSix">
                                <h6 class="filter-title">
                                    <a href="javascript:void(0);" class="w-100 collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                        Customer Recommendation
                                        <span class="float-end"><i class="fa-solid fa-chevron-down"></i></span>
                                    </a>
                                </h6>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample6">
                                <div class="card-body-chat">
                                    <div id="checkBoxes5">
                                        <div class="selectBox-cont">
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="category">
                                                <span class="checkmark"></span> 70% & up
                                            </label>
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="category">
                                                <span class="checkmark"></span> 60% & up
                                            </label>
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="category">
                                                <span class="checkmark"></span> 50% & up
                                            </label>
                                            <label class="custom_check w-100">
                                                <input type="checkbox" name="category">
                                                <span class="checkmark"></span> 40% & up
                                            </label>
                                            <div class="viewall-Two">
                                                <label class="custom_check w-100">
                                                    <input type="checkbox" name="username">
                                                    <span class="checkmark"></span>30% & up
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit"
                            class="d-inline-flex align-items-center justify-content-center btn w-100 btn-primary filter-btn">
                            <span><i class="feather-filter me-2"></i></span>Filter Results
                        </button>
                        <a href="javascript:void(0)" class="reset-filter">Reset Filter</a>
                    </form>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <!-- col -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <a href="{{ url('listing-details') }}">
                                        <img src="{{ URL::asset('/assets/img/cars/car-01.jpg') }}" class="img-fluid"
                                            alt="Toyota">
                                    </a>
                                    <div class="fav-item">
                                        <span class="featured-text">Toyota</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features">
                                        <a href="javascript:void(0)" class="author-img">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-0.jpg') }}"
                                                alt="author">
                                        </a>
                                        <h3 class="listing-title">
                                            <a href="{{ url('listing-details') }}">Toyota Camry SE 350</a>
                                        </h3>
                                        <div class="list-rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span>(5.0)</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-05.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-02.svg') }}"
                                                        alt="10 KM"></span>
                                                <p>10 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-03.svg') }}"
                                                        alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-05.svg') }}"
                                                        alt="2018"></span>
                                                <p>2018</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Germany
                                        </div>
                                        <div class="listing-price">
                                            <h6>$400 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <a href="{{ url('listing-details') }}">
                                        <img src="{{ URL::asset('/assets/img/cars/car-02.jpg') }}" class="img-fluid"
                                            alt="KIA">
                                    </a>
                                    <div class="fav-item">
                                        <span class="featured-text">KIA</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features">
                                        <a href="javascript:void(0)" class="author-img">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg') }}"
                                                alt="author">
                                        </a>
                                        <h3 class="listing-title">
                                            <a href="{{ url('listing-details') }}">Kia Soul 2016</a>
                                        </h3>
                                        <div class="list-rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fa-regular fa-star rating-overall"></i>
                                            <span>(4.0)</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-05.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-02.svg') }}"
                                                        alt="22 KM"></span>
                                                <p>22 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-03.svg') }}"
                                                        alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-04.svg') }}"
                                                        alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-05.svg') }}"
                                                        alt="2016"></span>
                                                <p>2016</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Belgium
                                        </div>
                                        <div class="listing-price">
                                            <h6>$80 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <a href="{{ url('listing-details') }}">
                                        <img src="{{ URL::asset('/assets/img/cars/car-03.jpg') }}" class="img-fluid"
                                            alt="Audi">
                                    </a>
                                    <div class="fav-item">
                                        <span class="featured-text">Audi</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features">
                                        <a href="javascript:void(0)" class="author-img">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-03.jpg') }}"
                                                alt="author">
                                        </a>
                                        <h3 class="listing-title">
                                            <a href="{{ url('listing-details') }}">Audi A3 2019 new</a>
                                        </h3>
                                        <div class="list-rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fa-regular fa-star rating-overall"></i>
                                            <span>(4.0)</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-05.svg') }}"
                                                        alt="Manual"></span>
                                                <p>Manual</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-02.svg') }}"
                                                        alt="10 KM"></span>
                                                <p>10 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-03.svg') }}"
                                                        alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-05.svg') }}"
                                                        alt="2019"></span>
                                                <p>2019</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>4 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Newyork, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$45 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <a href="{{ url('listing-details') }}">
                                        <img src="{{ URL::asset('/assets/img/cars/car-04.jpg') }}" class="img-fluid"
                                            alt="Audi">
                                    </a>
                                    <div class="fav-item">
                                        <span class="featured-text">Ferrai</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features">
                                        <a href="javascript:void(0)" class="author-img">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-04.jpg') }}"
                                                alt="author">
                                        </a>
                                        <h3 class="listing-title">
                                            <a href="{{ url('listing-details') }}">Ferrari 458 MM Speciale</a>
                                        </h3>
                                        <div class="list-rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span>(5.0)</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-05.svg') }}"
                                                        alt="Manual"></span>
                                                <p>Manual</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-02.svg') }}"
                                                        alt="14 KM"></span>
                                                <p>14 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-03.svg') }}"
                                                        alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-04.svg') }}"
                                                        alt="Basic"></span>
                                                <p>Basic</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-05.svg') }}"
                                                        alt="2023"></span>
                                                <p>2023</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Newyork, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$160 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <a href="{{ url('listing-details') }}">
                                        <img src="{{ URL::asset('/assets/img/cars/car-05.jpg') }}" class="img-fluid"
                                            alt="Audi">
                                    </a>
                                    <div class="fav-item">
                                        <span class="featured-text">Chevrolet</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features">
                                        <a href="javascript:void(0)" class="author-img">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-05.jpg') }}"
                                                alt="author">
                                        </a>
                                        <h3 class="listing-title">
                                            <a href="{{ url('listing-details') }}">2018 Chevrolet Camaro</a>
                                        </h3>
                                        <div class="list-rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span>(5.0)</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-05.svg') }}"
                                                        alt="Manual"></span>
                                                <p>Manual</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-02.svg') }}"
                                                        alt="18 KM"></span>
                                                <p>18 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-03.svg') }}"
                                                        alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-05.svg') }}"
                                                        alt="2018"></span>
                                                <p>2018</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>4 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Germany
                                        </div>
                                        <div class="listing-price">
                                            <h6>$36 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <a href="{{ url('listing-details') }}">
                                        <img src="{{ URL::asset('/assets/img/cars/car-06.jpg') }}" class="img-fluid"
                                            alt="Audi">
                                    </a>
                                    <div class="fav-item">
                                        <span class="featured-text">Acura</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features">
                                        <a href="javascript:void(0)" class="author-img">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-06.jpg') }}"
                                                alt="author">
                                        </a>
                                        <h3 class="listing-title">
                                            <a href="{{ url('listing-details') }}">Acura Sport Version</a>
                                        </h3>
                                        <div class="list-rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fa-regular fa-star rating-overall"></i>
                                            <span>(4.0)</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-05.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-02.svg') }}"
                                                        alt="12 KM"></span>
                                                <p>12 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-03.svg') }}"
                                                        alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-05.svg') }}"
                                                        alt="2013"></span>
                                                <p>2013</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Newyork, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$30 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <a href="{{ url('listing-details') }}">
                                        <img src="{{ URL::asset('/assets/img/cars/car-07.jpg') }}" class="img-fluid"
                                            alt="Audi">
                                    </a>
                                    <div class="fav-item">
                                        <span class="featured-text">Chevrolet</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features">
                                        <a href="javascript:void(0)" class="author-img">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-07.jpg') }}"
                                                alt="author">
                                        </a>
                                        <h3 class="listing-title">
                                            <a href="{{ url('listing-details') }}">Chevrolet Pick Truck 3.5L</a>
                                        </h3>
                                        <div class="list-rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fa-regular fa-star rating-overall"></i>
                                            <span>(4.0)</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-05.svg') }}"
                                                        alt="Manual"></span>
                                                <p>Manual</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-02.svg') }}"
                                                        alt="10 KM"></span>
                                                <p>10 KM</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-03.svg') }}"
                                                        alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-05.svg') }}"
                                                        alt="2012"></span>
                                                <p>2012</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Spain
                                        </div>
                                        <div class="listing-price">
                                            <h6>$77 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <a href="{{ url('listing-details') }}">
                                        <img src="{{ URL::asset('/assets/img/cars/car-08.jpg') }}" class="img-fluid"
                                            alt="Toyota">
                                    </a>
                                    <div class="fav-item">
                                        <span class="featured-text">Toyota</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features">
                                        <a href="javascript:void(0)" class="author-img">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-08.jpg') }}"
                                                alt="author">
                                        </a>
                                        <h3 class="listing-title">
                                            <a href="{{ url('listing-details') }}">Toyota Tacoma 4WD</a>
                                        </h3>
                                        <div class="list-rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class=""></i>
                                            <i class="fas fa-star filled"></i>
                                            <span>(5.0)</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-05.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-02.svg') }}"
                                                        alt="22 miles"></span>
                                                <p>22 miles</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-03.svg') }}"
                                                        alt="Diesel"></span>
                                                <p>Diesel</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-05.svg') }}"
                                                        alt="2019"></span>
                                                <p>2019</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Dallas, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$30 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <a href="{{ url('listing-details') }}">
                                        <img src="{{ URL::asset('/assets/img/cars/car-09.jpg') }}" class="img-fluid"
                                            alt="Toyota">
                                    </a>
                                    <div class="fav-item">
                                        <span class="featured-text">Accura</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features">
                                        <a href="javascript:void(0)" class="author-img">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-08.jpg') }}"
                                                alt="author">
                                        </a>
                                        <h3 class="listing-title">
                                            <a href="{{ url('listing-details') }}">Acura RDX FWD</a>
                                        </h3>
                                        <div class="list-rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <span>(5.0)</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-05.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-02.svg') }}"
                                                        alt="22 miles"></span>
                                                <p>42 miles</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-03.svg') }}"
                                                        alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-05.svg') }}"
                                                        alt="2019"></span>
                                                <p>2021</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Dallas, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$80 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="listing-item">
                                <div class="listing-img">
                                    <a href="{{ url('listing-details') }}">
                                        <img src="{{ URL::asset('/assets/img/cars/car-02.jpg') }}" class="img-fluid"
                                            alt="Toyota">
                                    </a>
                                    <div class="fav-item">
                                        <span class="featured-text">Kia Soul</span>
                                        <a href="javascript:void(0)" class="fav-icon">
                                            <i class="feather-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="listing-content">
                                    <div class="listing-features">
                                        <a href="javascript:void(0)" class="author-img">
                                            <img src="{{ URL::asset('/assets/img/profiles/avatar-02.jpg') }}"
                                                alt="author">
                                        </a>
                                        <h3 class="listing-title">
                                            <a href="{{ url('listing-details') }}">Kia Soul 2016</a>
                                        </h3>
                                        <div class="list-rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fa-regular fa-star rating-overall"></i>
                                            <span>(4.0)</span>
                                        </div>
                                    </div>
                                    <div class="listing-details-group">
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-05.svg') }}"
                                                        alt="Auto"></span>
                                                <p>Auto</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-02.svg') }}"
                                                        alt="22 miles"></span>
                                                <p>42 miles</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-03.svg') }}"
                                                        alt="Petrol"></span>
                                                <p>Petrol</p>
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-04.svg') }}"
                                                        alt="Power"></span>
                                                <p>Power</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-05.svg') }}"
                                                        alt="2019"></span>
                                                <p>2021</p>
                                            </li>
                                            <li>
                                                <span><img src="{{ URL::asset('/assets/img/icons/car-parts-06.svg') }}"
                                                        alt="Persons"></span>
                                                <p>5 Persons</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="listing-location-details">
                                        <div class="listing-price">
                                            <span><i class="feather-map-pin"></i></span>Dallas, USA
                                        </div>
                                        <div class="listing-price">
                                            <h6>$77 <span>/ Day</span></h6>
                                        </div>
                                    </div>
                                    <div class="listing-button">
                                        <a href="{{ url('listing-details') }}" class="btn btn-order"><span><i
                                                    class="feather-calendar me-2"></i></span>Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /col -->
                    </div>

                    @component('components.pagination')
                    @endcomponent
                </div>
            </div>
        </div>
    </section>
    <!-- /Car Grid View -->

    @component('components.scrolltotop')
    @endcomponent
@endsection
