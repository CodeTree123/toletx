@extends('frontend.master.master')
@section('content')

<title>ToletX-Swimming Pool</title>

<!-- Header Start -->
<header>
    <div class="container-fluid">
        <div class="">
            <div class="row  ">
                <a class="col-md-2 col-small mx-2 main-service text-center single_box" href="{{route('swimming_pool')}}">
                    <span class="icon-swimming_pool service_item"></span>
                    <br>
                    <span class="service_item_name"> Swimming Pool</span>
                </a>
            </div>
            <form class="form-horizontal top-form" action="{{route('swimmingpool_search')}}" role="form">
                @csrf
                <div class="row mt-3 ">
                    @include('frontend.include.selector_section')
                    <div class=" col-12 search_form_sec d-none">
                        <div class="row  justify-content-between ">
                            <div class="col-12 top-from">
                                <input type="text" name="filter[address]" class="form-control" id="pool_search_autocomplete" placeholder="Location" aria-label=" location">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12 mt-2  top-from">
                                <input type="date" name="filter[date]" class="form-control" id="check-in-date" placeholder="Add Dates" aria-label="Add Dates">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12  mt-2  top-from">
                                <input type="date" class="form-control" id="check-out-date" placeholder="Add Dates" aria-label="Add Dates">
                            </div>
                        </div>
                        <!-- Checkbox filters -->
                        <div class="my-4 ps-2">
                            <div class="form-check form-check-inline mx-3 pt-2">
                                <input class="form-check-input" type="checkbox" name="filter[shed]" id="shed">
                                <label class="form-check-label checkboxes-label" for="shed">Shed</label>
                            </div>
                            <div class="form-check form-check-inline mx-3 pt-2">
                                <input class="form-check-input" type="checkbox" name="filter[change_room]" id="change_room">
                                <label class="form-check-label checkboxes-label" for="change_room">Changing room</label>
                            </div>
                            <div class="form-check form-check-inline mx-3 pt-2">
                                <input class="form-check-input" type="checkbox" name="filter[toilet]" id="toilet">
                                <label class="form-check-label checkboxes-label" for="toilet">Toilet</label>
                            </div>
                            <div class="form-check form-check-inline mx-3 pt-2">
                                <input class="form-check-input" type="checkbox" name="filter[wifi]" id="wifi">
                                <label class="form-check-label checkboxes-label" for="wifi">Wifi</label>
                            </div>
                            <div class="form-check form-check-inline mx-3 pt-2">
                                <input class="form-check-input" type="checkbox" name="filter[laundry]" id="laundry">
                                <label class="form-check-label checkboxes-label" for="laundry">Laundry</label>
                            </div>
                            <div class="form-check form-check-inline mx-3 pt-2">
                                <input class="form-check-input" type="checkbox" name="filter[parking]" id="parking">
                                <label class="form-check-label checkboxes-label" for="parking">Parking</label>
                            </div>
                        </div>
                        <div class="price-range-block mb-3">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="sliderText"> Rent Range </div>
                                    <div class="d-flex  ">
                                        <input type="number" name="filter[price]" min=100 max="9900000" id="min_price" class="price-range-field form-control me-2" placeholder="Min-rent" />
                                        <input type="number" name="filter[price]" min=100 max="10000000" id="max_price" class="price-range-field form-control" placeholder="Max-rent" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="sliderText"> Area Range </div>
                                    <div class="d-flex  ">
                                        <input type="number" name="filter[size]" min=100 max="9900000" id="min_price" class="price-range-field form-control me-2" placeholder="Min-Size" />
                                        <input type="number" name="filter[size]" min=100 max="10000000" id="max_price" class="price-range-field form-control" placeholder="Max-Size" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 mt-2  top-from ">
                            <button type="submit" class=" btn btn-primary  w-100 rounded-pill white-text" id="">Search</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</header>
<!-- Header End -->




<!-- Option 2: Separate Popper and Bootstrap JS -->


@endsection