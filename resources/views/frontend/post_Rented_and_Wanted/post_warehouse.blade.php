@extends('frontend.master.post_master')

@section('content')

<div class="container  post_container">
    <div class="row shadow p-4 rounded mb-5 mt-2    ">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Warehouse</li>
            </ol>
        </nav>
        @include('frontend.include.selector_section')

        <div class="col-12" id="Rent" style="display: {{old('post_type') == 'Rent' ? 'flex' : 'none'}};">
            <form method="POST" action="{{ route('post_warehouse_rented') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <input id="user_id" type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}"  autocomplete="user_id" autofocus>
                </div>
                <input class="form-control" type="hidden" id="post_rent" name="post_type" value="{{old('post_type')}}">
                <div class="row">
                    <div class="col-12 mb-3 ">
                        <label for="title_Rent" class="form-label me-2 fw-bold">Post Title</label>
                        <input name="title" type="text" class="form-control" id="title_Rent" placeholder="Enter Post Title" value="{{old('title')}}">
                        <span class="text-danger">@error('title') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="date_Rent" class="form-label me-2 fw-bold">Date</label>
                        <input name="date" type="date" class="form-control" id="date_Rent" min="{{\Carbon\Carbon::today()->format('Y-m-d')}}" onfocus="this.showPicker()" value="{{old('date')}}">
                        <span class="text-danger">@error('date') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="phone_Rent" class="form-label me-2 fw-bold">Mobile</label>
                        <input name="phone" type="number" class="form-control" id="phone_Rent" placeholder="Enter" value="{{$list->phone}}" readonly>
                        <span class="text-danger">@error('phone') {{$message}} @enderror</span>
                    </div>

                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="price_Rent" class="form-label me-2 fw-bold">Rent Per Month</label>
                        <input name="price" type="number" class="form-control" id="price_Rent" placeholder="Enter Rent" value="{{old('')}}">
                        <span class="text-danger">@error('price') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="type_Rent" class="form-label me-2 fw-bold">Warehouse Type</label>
                        <select id="type_Rent" class="form-select" name="type">
                            <option selected hidden>Choose...</option>
                            <option value="grocery">grocery</option>
                            <option value="cosmetic">cosmetic</option>
                            <option value="medicine">medicine</option>
                            <option value="comical">comical</option>
                            <option value="machineries">Machineries</option>
                            <option value="readymade ">Readymade Garments</option>
                            <option value="ceramic">Ceramic</option>
                            <option value="others">others</option>
                        </select>
                        <span class="text-danger">@error('type') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="floor_Rent" class="form-label me-2 fw-bold">Floor Level</label>
                        <select id="floor_Rent" class="form-select" name="floor_level">
                            <option selected hidden>Choose...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="15+">15+</option>
                        </select>
                        <span class="text-danger">@error('floor_level') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="building_Rent" class="form-label me-2 fw-bold">Building Condition</label>
                        <select id="building_Rent" class="form-select" name="building_condition">
                            <option selected hidden>Choose...</option>
                            <option value="good">good</option>
                            <option value="moderate">moderate</option>
                            <option value="best">best</option>
                        </select>
                        <span class="text-danger">@error('building_condition') {{$message}} @enderror</span>
                    </div>

                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="floor_size_Rent" class="form-label me-2 fw-bold">Floor Area</label>
                        <input name="floor_size" type="text" class="form-control" id="floor_size_Rent" placeholder="Enter Floor Area" value="{{old('floor_size')}}">
                        <span class="text-danger">@error('floor_size') {{$message}} @enderror</span>
                    </div>

                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="road_width_Rent" class="form-label me-2 fw-bold">Road Width</label>
                        <input name="road_width" type="text" class="form-control" id="road_width_Rent" placeholder="Enter Road Width" value="{{old('road_width')}}">
                        <span class="text-danger">@error('road_width') {{$message}} @enderror</span>
                    </div>
                    <div class="col-12 mb-3 ">
                        <label for="address_Want" class="form-label me-2 fw-bold">Address</label>
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
                            <input class="form-check-input" type="checkbox" id="elect_Rent" name="electricity">
                            <label class="form-check-label" for="elect_Rent">
                                Electricity
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="gas_Rent" name="gas">
                            <label class="form-check-label" for="gas_Rent">
                                Gas
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="water_Rent" name="water">
                            <label class="form-check-label" for="water_Rent">
                                Water
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="ac_Rent" name="ac">
                            <label class="form-check-label" for="ac_Rent">
                                A.C
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="drainage_system_Rent" name="drainage_system">
                            <label class="form-check-label" for="drainage_system_Rent">
                                Drainage System
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="lift_Rent" name="lift">
                            <label class="form-check-label" for="lift_Rent">
                                Lift
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="gen_Rent" name="generator">
                            <label class="form-check-label" for="gen_Rent">
                                Generator
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="fire_safety_Rent" name="fire_safety">
                            <label class="form-check-label" for="fire_safety_Rent">
                                Fire Exit
                            </label>
                        </div>
                        <div class="form-check ms-5 mb-2">
                            <input class="form-check-input" type="checkbox" id="parking_Rent" name="parking">
                            <label class="form-check-label" for="parking_Rent">
                                Parking
                            </label>
                        </div>

                    </div>
                    <div class="col-8">
                        <h2 class="fw-bold mb-3">Gallery Section</h2>
                        <div class="mb-3 ">
                            <label for="photo_Rent" class="d-block"> Photo 1</label>

                            <input type="file" class="form-control" name="photo" id="photo_Rent" placeholder="asd" >
                            <span class="text-danger">@error('photo') {{$message}} @enderror</span>
                        </div>

                        <div class="mb-3">
                            <label for="photo1_Rent" class="d-block"> Photo 2</label>
                            <input type="file" class="form-control" name="photo1" id="photo1_Rent">
                        </div>

                        <div class="mb-3">
                            <label for="photo2_Rent" class="d-block"> Photo 3</label>
                            <input type="file" class="form-control" name="photo2" id="photo2_Rent">
                        </div>

                        <div class="mb-3">
                            <label for="photo3_Rent" class="d-block"> Photo 4</label>
                            <input type="file" class="form-control" name="photo3" id="photo3_Rent">
                        </div>

                        <div class="mb-3">
                            <label for="photo4_Rent" class="d-block"> Photo 5</label>
                            <input type="file" class="form-control" name="photo4" id="photo4_Rent">
                        </div>

                        <div class="mb-3">
                            <label for="photo5_Rent" class="d-block"> Photo 6</label>
                            <input type="file" class="form-control" name="photo5" id="photo5_Rent">
                        </div>

                        <div class="mb-3">
                            <label for="photo6_Rent" class="d-block"> Photo 7</label>
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
            <form method="POST" action="{{ route('post_warehouse_wanted') }}">
                @csrf
                <div class="col-md-6">
                    <input id="user_id" type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}"  autocomplete="user_id" autofocus>
                </div>
                <input class="form-control" type="hidden" id="post_want" name="post_type">
                <div class="row">
                    <div class="col-12 mb-3 ">
                        <label for="title_Want" class="form-label me-2 fw-bold">Post Title</label>
                        <input name="w_title" type="text" class="form-control" id="title_Want" placeholder="Enter Post Title" value="{{old('w_title')}}">
                        <span class="text-danger">@error('w_title') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="date_Want" class="form-label me-2 fw-bold">Date</label>
                        <input name="w_date" type="date" class="form-control" id="date_Want" min="{{\Carbon\Carbon::today()->format('Y-m-d')}}" onfocus="this.showPicker()" value="{{old('w_date')}}">
                        <span class="text-danger">@error('w_date') {{$message}} @enderror</span>
                    </div>
                    <div class=" col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="phone_Want" class="form-label me-2 fw-bold">Mobile</label>
                        <input name="w_phone" type="number" class="form-control" id="phone_Want" placeholder="Enter" value="{{$list->phone}}" readonly>
                        <span class="text-danger">@error('w_phone') {{$message}} @enderror</span>
                    </div>

                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="price_Want" class="form-label me-2 fw-bold">Rent Per Month</label>
                        <input name="w_price" type="number" class="form-control" id="price_Want" placeholder="Enter Rent" value="{{old('w_')}}">
                        <span class="text-danger">@error('w_price') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="type_Want" class="form-label me-2 fw-bold">Warehouse Type</label>
                        <select id="type_Want" class="form-select" name="w_type">
                            <option selected hidden>Choose...</option>
                            <option value="grocery">grocery</option>
                            <option value="cosmetic">cosmetic</option>
                            <option value="medicine">medicine</option>
                            <option value="comical">comical</option>
                            <option value="machineries">Machineries</option>
                            <option value="readymade ">Readymade Garments</option>
                            <option value="ceramic">Ceramic</option>
                            <option value="others">others</option>
                        </select>
                        <span class="text-danger">@error('w_type') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="floor_Want" class="form-label me-2 fw-bold">Floor Level</label>
                        <select id="floor_Want" class="form-select" name="w_floor_level">
                            <option selected hidden>Choose...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="15+">15+</option>
                        </select>
                        <span class="text-danger">@error('w_floor_level') {{$message}} @enderror</span>
                    </div>
                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3">
                        <label for="building_Want" class="form-label me-2 fw-bold">Building Condition</label>
                        <select id="building_Want" class="form-select" name="w_building_condition">
                            <option selected hidden>Choose...</option>
                            <option value="good">good</option>
                            <option value="moderate">moderate</option>
                            <option value="best">best</option>
                        </select>
                        <span class="text-danger">@error('w_building_condition') {{$message}} @enderror</span>
                    </div>

                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="floor_size_Want" class="form-label me-2 fw-bold">Floor Area</label>
                        <input name="w_floor_size" type="text" class="form-control" id="floor_size_Want" placeholder="Enter Floor Area" value="{{old('w_floor_size')}}">
                        <span class="text-danger">@error('w_floor_size') {{$message}} @enderror</span>
                    </div>

                    <div class="col-lg-4 co-md-4 col-sm-12 col-12 mb-3 ">
                        <label for="road_width_Want" class="form-label me-2 fw-bold">Road Width</label>
                        <input name="w_road_width" type="text" class="form-control" id="road_width_Want" placeholder="Enter Road Width" value="{{old('w_road_width')}}">
                        <span class="text-danger">@error('w_road_width') {{$message}} @enderror</span>
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
                                <input class="form-check-input" type="checkbox" id="elect_Want" name="w_electricity">
                                <label class="form-check-label" for="elect_Want">
                                    Electricity
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="gas_Want" name="w_gas">
                                <label class="form-check-label" for="gas_Want">
                                    Gas
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="water_Want" name="w_water">
                                <label class="form-check-label" for="water_Want">
                                    Water
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="ac_Want" name="w_ac">
                                <label class="form-check-label" for="ac_Want">
                                    A.C
                                </label>
                            </div>

                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="drainage_system_Want" name="w_drainage_system">
                                <label class="form-check-label" for="drainage_system_Want">
                                    Drainage System
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="lift_Want" name="w_lift">
                                <label class="form-check-label" for="lift_Want">
                                    Lift
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="gen_Want" name="w_generator">
                                <label class="form-check-label" for="gen_Want">
                                    Generator
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="fire_safety_Want" name="w_fire_safety">
                                <label class="form-check-label" for="fire_safety_Want">
                                    Fire Exit
                                </label>
                            </div>
                            <div class="col-2 form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="parking_Want" name="w_parking">
                                <label class="form-check-label" for="parking_Want">
                                    Parking
                                </label>
                            </div>

                        </div>

                    </div>

                    <button class="btn btn-primary w-25 mx-auto" type="submit">Submit</button>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection