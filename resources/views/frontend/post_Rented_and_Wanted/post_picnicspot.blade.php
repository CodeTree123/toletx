@extends('frontend.master.post_master')

@section('content')

<div class="container  post_container">
    <div class="row shadow p-4 rounded mb-5 mt-2    ">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Picnic Spot</li>
            </ol>
        </nav>
        @include('frontend.include.selector_section')

        <div class="col-12" id="Rent" style="display: {{old('post_type') == 'Rent' ? 'flex' : 'none'}};">
            <form method="POST" action="{{ route('post_picnic_rented') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <input id="user_id" type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}"  autocomplete="user_id" autofocus>
                </div>
                <input class="form-control" type="hidden" id="post_rent" name="post_type" value="{{old('post_type')}}">
                <div class="row">
                    <div class=" col-12 mb-3 ">
                        <label for="post_title_Rent" class="form-label me-2 fw-bold">Post Title</label>
                        <input name="title" type="text" class="form-control" id="post_title_Rent" placeholder="Enter Post Title" value="{{old('title')}}">
                        <span class="text-danger">@error('title') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="title_Rent" class="form-label me-2 fw-bold">Picnic Spot Name </label>
                        <input name="c_name" type="text" class="form-control" id="title_Rent" placeholder="Enter Picnic Spot Name" value="{{old('c_name')}}">
                        <span class="text-danger">@error('c_name') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="date_Rent" class="form-label me-2 fw-bold">Date</label>
                        <input name="date" type="date" class="form-control" id="date_Rent" min="{{\Carbon\Carbon::today()->format('Y-m-d')}}" onfocus="this.showPicker()" value="{{old('date')}}">
                        <span class="text-danger">@error('date') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="phone_Rent" class="form-label me-2 fw-bold">Mobile</label>
                        <input name="phone" type="number" class="form-control" id="phone_Rent" placeholder="Enter " value="{{$list->phone}}" readonly>
                        <span class="text-danger">@error('phone') {{$message}} @enderror</span>
                    </div>

                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="price_Rent" class="form-label me-2 fw-bold">Rent</label>
                        <div class="row">
                            <div class="col-4 pe-0">
                                <div class="input-group">
                                    <input name="price" type="number" class="form-control" id="price_Rent" placeholder="Enter Rent" value="{{old('price')}}">
                                </div>
                            </div>
                            <div class="col-1">
                                <span class="text-light fs-3">/</span>
                            </div>
                            <div class="col-7 ps-0">
                                <div class="input-group">
                                    <select class="form-select form-select-md" aria-label=".form-select-lg example" id="per_price_Rent" name="per_price">
                                        <option selected hidden>Choose Rent Type</option>
                                        <option value="hour" @selected(old('per_price')=="hour" )>Hour</option>
                                        <option value="day shift" @selected(old('per_price')=="day shift" )> Day Shift</option>
                                        <option value="night shift" @selected(old('per_price')=="night shift" )> Night Shift</option>
                                        <option value="full day" @selected(old('per_price')=="full day" )> Full Day</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <span class="text-danger">@error('price') {{$message}} @enderror</span><br>
                        <span class="text-danger">@error('per_price') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="area_Rent" class="form-label me-2 fw-bold">Picnic Spot Area</label>
                        <input name="land_area" type="text" class="form-control" id="area_Rent" placeholder="Enter Picnic Spot Area" value="{{old('land_area')}}">
                        <span class="text-danger">@error('land_area') {{$message}} @enderror</span>
                    </div>
                    <div class="col-12 mb-3 ">
                        <label for="address_Rent" class="form-label me-2 fw-bold">Address</label>
                        <input name="address" type="text" class="form-control" placeholder="Enter Address" value="{{old('address')}}">
                        <span class="text-danger">@error('address') {{$message}} @enderror</span>
                    </div>
                    <div class="col-12 mb-3 ">
                        <label for="description_Rent" class="form-label me-2 fw-bold">Description</label>
                        <textarea name="description" type="text" class="form-control" id="description_Rent" rows="3" placeholder="Enter Description">{{old('description')}}</textarea>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                        <h2 class="fw-bold mb-3">Amenities</h2>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="shed_Rent" name="shed" @checked(old('shed'))>
                            <label class="form-check-label" for="shed_Rent">
                                Shed
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="elect_Rent" name="electricity" @checked(old('electricity'))>
                            <label class="form-check-label" for="elect_Rent">
                                Electricity
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="gas_Rent" name="gas" @checked(old('gas'))>
                            <label class="form-check-label" for="gas_Rent">
                                Gas
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="water_Rent" name="water" @checked(old('water'))>
                            <label class="form-check-label" for="water_Rent">
                                Water
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="generator_Rent" name="generator" @checked(old('generator'))>
                            <label class="form-check-label" for="generator_Rent">
                                Generator
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="change_room_Rent" name="change_room" @checked(old('change_room'))>
                            <label class="form-check-label" for="change_room_Rent">
                                Changing Room
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="Toilet_Rent" name="toilet" @checked(old('toilet'))>
                            <label class="form-check-label" for="Toilet_Rent">
                                Toilet
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="sports_Rent" name="dining" @checked(old('dining'))>
                            <label class="form-check-label" for="sports_Rent">
                                Dining Facilities
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="lift_Rent" name="lift" @checked(old('lift'))>
                            <label class="form-check-label" for="lift_Rent">
                                Lift
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="parking_Rent" name="parking" @checked(old('parking'))>
                            <label class="form-check-label" for="parking_Rent">
                                Parking
                            </label>
                        </div>
                    </div>
                    <div class="col-8">
                        <h2 class="fw-bold mb-3">Gallery Section</h2>
                        <div class="mb-3 ">
                            <label for="photo_Rent" ></label> Photo 1</label>

                            <input type="file" class="form-control" name="photo" id="photo_Rent" placeholder="asd">
                            <span class="text-danger">@error('photo') {{$message}} @enderror</span>
                        </div>

                        <div class="mb-3">
                            <label for="photo1_Rent" > Photo 2</label>
                            <input type="file" class="form-control" name="photo1" id="photo1_Rent">
                        </div>

                        <div class="mb-3">
                            <label for="photo2_Rent" > Photo 3</label>
                            <input type="file" class="form-control" name="photo2" id="photo2_Rent">
                        </div>

                        <div class="mb-3">
                            <label for="photo3_Rent" > Photo 4</label>
                            <input type="file" class="form-control" name="photo3" id="photo3_Rent">
                        </div>

                        <div class="mb-3">
                            <label for="photo4_Rent" > Photo 5</label>
                            <input type="file" class="form-control" name="photo4" id="photo4_Rent">
                        </div>

                        <div class="mb-3">
                            <label for="photo5_Rent" > Photo 6</label>
                            <input type="file" class="form-control" name="photo5" id="photo5_Rent">
                        </div>

                        <div class="mb-3">
                            <label for="photo6_Rent" > Photo 7</label>
                            <input type="file" class="form-control" name="photo6" id="photo6_Rent">
                        </div>

                    </div>

                    <div class="col-12 mb-3 ">
                        <label for="video_Rent" class="form-label me-2 fw-bold"> Youtube Link</label>
                        <input type="text" class="form-control" name="video" id="video_Rent" placeholder="  Youtube Link" value="{{old('video')}}">
                    </div>

                    <button class="btn btn-primary w-25 mx-auto" type="submit">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-12" id="Want" style="display: {{old('post_type') == 'Want' ? 'flex' : 'none'}};">
            <form method="POST" action="{{ route('post_picnic_wanted') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <input id="user_id" type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}"  autocomplete="user_id" autofocus>
                </div>
                <input class="form-control" type="hidden" id="post_want" name="post_type" value="{{old('post_type')}}">
                <div class="row">
                    <div class=" col-12 mb-3 ">
                        <label for="post_title_Want" class="form-label me-2 fw-bold">Post Title</label>
                        <input name="w_title" type="text" value="" class="form-control" id="post_title_Want" placeholder="Enter Post Title" value="{{old('w_title')}}">
                        <span class="text-danger">@error('w_title') {{$message}} @enderror</span>
                    </div>

                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="title_Want" class="form-label me-2 fw-bold">Picnic Spot Name</label>
                        <input name="w_c_name" type="text" class="form-control" id="title_Want" placeholder="Enter Picnic Spot Name" value="{{old('w_c_name')}}">
                        <span class="text-danger">@error('w_c_name') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="date_Want" class="form-label me-2 fw-bold">Date</label>
                        <input name="w_date" type="date" class="form-control" id="date_Want" min="{{\Carbon\Carbon::today()->format('Y-m-d')}}" onfocus="this.showPicker()" value="{{old('w_date')}}">
                        <span class="text-danger">@error('w_date') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="phone_Want" class="form-label me-2 fw-bold">Mobile</label>
                        <input name="w_phone" type="number" class="form-control" id="phone_Want" placeholder="Enter " value="{{$list->phone}}" readonly>
                        <span class="text-danger">@error('w_phone') {{$message}} @enderror</span>
                    </div>

                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="price_Want" class="form-label me-2 fw-bold">Rent</label>
                        <div class="row">
                            <div class="col-4 pe-0">
                                <div class="input-group">
                                    <input name="w_price" type="number" class="form-control" id="price_Want" placeholder="Enter Rent" value="{{old('w_price')}}">
                                </div>
                            </div>
                            <div class="col-1">
                                <span class="text-light fs-3">/</span>
                            </div>
                            <div class="col-7 ps-0">
                                <div class="input-group">
                                    <select class="form-select form-select-md" aria-label=".form-select-lg example" id="per_price_Want" name="w_per_price">
                                        <option selected hidden>Choose Rent Type</option>
                                        <option value="hour" @selected(old('w_per_price')=="hour" )>>Hour</option>
                                        <option value="day shift" @selected(old('w_per_price')=="day shift" )> Day Shift</option>
                                        <option value="night shift" @selected(old('w_per_price')=="night shift" )> Night Shift</option>
                                        <option value="full day" @selected(old('w_per_price')=="full day" )> Full Day</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <span class="text-danger">@error('w_price') {{$message}} @enderror</span><br>
                        <span class="text-danger">@error('w_per_price') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="area_Want" class="form-label me-2 fw-bold">Picnic Spot Area</label>
                        <input name="w_land_area" type="text" class="form-control" id="area_Want" placeholder="Enter Picnic Spot Area" value="{{old('w_land_area')}}">
                        <span class="text-danger">@error('w_land_area') {{$message}} @enderror</span>
                    </div>
                    <div class="col-12 mb-3 ">
                        <label for="address_Want" class="form-label me-2 fw-bold">Address</label>
                        <input name="w_address" type="text" class="form-control" placeholder="Enter Address" value="{{old('w_address')}}">
                        <span class="text-danger">@error('w_address') {{$message}} @enderror</span>
                    </div>
                    <div class="col-12 mb-3 ">
                        <label for="description_Want" class="form-label me-2 fw-bold">Description</label>
                        <textarea name="w_description" type="text" class="form-control" id="description_Want" rows="3" placeholder="Enter Description">{{old('w_description')}}</textarea>
                    </div>
                    <div class="col-12 mb-3 ">
                        <h2 class="fw-bold mb-3">Amenities</h2>
                        <div class="row ms-3 ps-2">

                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="shed_Want" name="w_shed" @checked(old('w_shed'))>
                                <label class="form-check-label" for="shed_Want">
                                    Shed
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="elect_Want" name="w_electricity" @checked(old('w_electricity'))>
                                <label class="form-check-label" for="elect_Want">
                                    Electricity
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="gas_Want" name="w_gas" @checked(old('w_gas'))>
                                <label class="form-check-label" for="gas_Want">
                                    Gas
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="water_Want" name="w_water" @checked(old('w_water'))>
                                <label class="form-check-label" for="water_Want">
                                    Water
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="change_room_Want" name="w_change_room" @checked(old('w_change_room'))>
                                <label class="form-check-label" for="change_room_Want">
                                    Changing Room
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="generator_Want" name="w_generator" @checked(old('w_generator'))>
                                <label class="form-check-label" for="generator_Want">
                                    Generator
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="Toilet_Want" name="w_toilet" @checked(old('w_toilet'))>
                                <label class="form-check-label" for="Toilet_Want">
                                    Toilet
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="sports_Want" name="w_dining" @checked(old('w_dining'))>
                                <label class="form-check-label" for="sports_Want">
                                    Dining Facilities
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="lift_Want" name="w_lift" @checked(old('w_lift'))>
                                <label class="form-check-label" for="lift_Want">
                                    Lift
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="parking_Want" name="w_parking" @checked(old('w_parking'))>
                                <label class="form-check-label" for="parking_Want">
                                    Parking
                                </label>
                            </div>
                        </div>

                        <button class="btn btn-primary w-25 mx-auto" type="submit">Submit</button>
                    </div>
            </form>
        </div>

    </div>
</div>
@endsection