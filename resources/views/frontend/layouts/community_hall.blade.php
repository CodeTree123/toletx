@extends('frontend.master.master')
@section('content')
<title>ToletX-Community Hall</title>
<!-- Header Start -->
<header>
    <div class="container-fluid">
        <div class="">
            <div class="row  ">
                <a class="col-md-2 col-small mx-2 main-service text-center single_box" href="{{route('community_hall')}}">
                    <span class="icon-community_hall service_item"></span>
                    <br>
                    <span class="service_item_name"> Community Hall</span>
                </a>
            </div>
            <form class="form-horizontal top-form" action="{{route('community_search')}}" method="get" role="form">
                @csrf
                <div class="row mt-3">
                    @include('frontend.include.selector_section')
                    <div class=" col-12 search_form_sec d-none">
                        <div class="row justify-content-between">
                            <div class="col-12 top-from">
                                <input type="text" name="filter[address]" class="form-control" id="community_search_autocomplete" placeholder="Location" aria-label=" location">
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
                                <input class="form-check-input" type="checkbox" name="filter[electricity]" id="electricity">
                                <label class="form-check-label checkboxes-label" for="electricity">Electricity</label>
                            </div>
                            <div class="form-check form-check-inline mx-3 pt-2">
                                <input class="form-check-input" type="checkbox" name="filter[gas]" id="gas">
                                <label class="form-check-label checkboxes-label" for="gas">Gas</label>
                            </div>
                            <div class="form-check form-check-inline mx-3 pt-2">
                                <input class="form-check-input" type="checkbox" name="filter[water]" id="water">
                                <label class="form-check-label checkboxes-label" for="water">Water</label>
                            </div>
                            <div class="form-check form-check-inline mx-3 pt-2">
                                <input class="form-check-input" type="checkbox" name="filter[ac]" id="ac">
                                <label class="form-check-label checkboxes-label" for="ac">A.C</label>
                            </div>

                            <div class="form-check form-check-inline mx-3 pt-2">
                                <input class="form-check-input" type="checkbox" name="filter[lift]" id="lift">
                                <label class="form-check-label checkboxes-label" for="lift">Lift</label>
                            </div>

                            <div class="form-check form-check-inline mx-3 pt-2">
                                <input class="form-check-input" type="checkbox" name="filter[fire_safety]" id="fire">
                                <label class="form-check-label checkboxes-label" for="fire">Fire Exit</label>
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
                                        <input type="number" name="filter[floor_size]" min=100 max="9900000" id="min_price" class="price-range-field form-control me-2" placeholder="Min-Size" />
                                        <input type="number" name="filter[floor_size]" min=100 max="10000000" id="max_price" class="price-range-field form-control" placeholder="Max-Size" />
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
@endsection