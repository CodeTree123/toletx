@extends('frontend.master.post_master')

@section('content')
<div class="container post_container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <!-- Default Basic Forms Start -->
            <div class="pd-20 card-box mb-30">
                @if($list->post_type == 'Rent')
                <form method="POST" action="{{ route('land_update',$list->id) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class=" col-12 mb-3 ">
                            <label for="title_Rent" class="form-label me-2 fw-bold">Post Title</label>
                            <input name="title" value="{{$list->title}}" type="text" class="form-control" id="title_Rent" placeholder="Enter Post Title">
                            <span class="text-danger">@error('title') {{$message}} @enderror</span>

                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="date_Rent" class="form-label me-2 fw-bold">Date</label>
                            <input name="date" value="{{$list->date}}" min="{{\Carbon\Carbon::today()->format('Y-m-d')}}" type="date" class="form-control" id="date_Rent" onfocus="this.showPicker()">
                            <span class="text-danger">@error('date') {{$message}} @enderror</span>

                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="phone_Rent" class="form-label me-2 fw-bold">Mobile</label>
                            <input type="number" name="phone" value="{{$list->phone}}" class="form-control">
                            <span class="text-danger">@error('phone') {{$message}} @enderror</span>

                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                            <label for="price_rented" class="form-label me-2 fw-bold">Rent</label>
                            <div class="row">
                                <div class="col-4 pe-0">
                                    <div class="input-group">
                                        <input name="price" value="{{$list->price}}" type="number" class="form-control" id="price_rented" placeholder="Enter Price">
                                    </div>
                                </div>
                                <div class="col-1">
                                    <span class="text-light fs-3">/</span>
                                </div>
                                <div class="col-7 ps-0">
                                    <div class="input-group">
                                        <select class="form-select form-select-md" aria-label=".form-select-lg example" name="per_price">
                                            <option selected hidden>Choose Rent Type</option>
                                            <option value="hour" {{$list->per_price == "hour" ? 'selected':''}}>Hour</option>
                                            <option value="day" {{$list->per_price == "day" ? 'selected':''}}> Day</option>
                                            <option value="night" {{$list->per_price == "night" ? 'selected':''}}> Only Night</option>
                                            <option value="week" {{$list->per_price == "week" ? 'selected':''}}> Week</option>
                                            <option value="month" {{$list->per_price == "month" ? 'selected':''}}> Month</option>
                                            <option value="year" {{$list->per_price == "year" ? 'selected':''}}> Year</option>
                                        </select>
                                    </div>
                                </div>
                                <span class="text-danger">@error('price') {{$message}} @enderror</span>
                                <span class="text-danger">@error('per_price') {{$message}} @enderror</span>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                            <label for="area_Rent" class="form-label me-2 fw-bold">Land area</label>
                            <input name="land_area" value="{{$list->land_area}}" type="text" class="form-control" id="area_Rent" placeholder="Enter area">
                            <span class="text-danger">@error('land_area') {{$message}} @enderror</span>

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                            <label for="height_Rent" class="form-label me-2 fw-bold">Land Height</label>
                            <input name="land_height" value="{{$list->land_height}}" type="text" class="form-control" id="height_Rent" placeholder="Enter Height">
                            <span class="text-danger">@error('land_height') {{$message}} @enderror</span>

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="road_Rent" class="form-label me-2 fw-bold">Road Width</label>
                            <input name="road_width" value="{{$list->road_width}}" type="text" class="form-control" id="road_Rent" placeholder="Enter Road Width">
                            <span class="text-danger">@error('road_width') {{$message}} @enderror</span>

                        </div>
                        <div class=" col-12 mb-3 ">
                            <label for="address_Rent" class="form-label me-2 fw-bold">Address</label>
                            <input name="address" value="{{$list->address}}" type="text" class="form-control" id="address_Rent" placeholder="Enter Address">
                            <span class="text-danger">@error('address') {{$message}} @enderror</span>

                        </div>
                        <div class="col-12 mb-3 ">
                            <label for="description_Rent" class="form-label me-2 fw-bold"> Description</label>
                            <textarea name="description" type="text" class="form-control" id="description_Rent" rows="3" placeholder="Enter Description">{{$list->description}}</textarea>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 col-12 mb-3 ">
                            <h2 class="fw-bold mb-3">Amenities</h2>
                            <div class="form-check ms-3 ps-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="elect_Rent" name="electricity" {{  ($list->electricity == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="elect_Rent">
                                    Electricity
                                </label>
                            </div>
                            <div class="form-check ms-3 ps-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="gas_Rent" name="gas" {{  ($list->gas == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="gas_Rent">
                                    Gas
                                </label>
                            </div>
                            <div class="form-check ms-3 ps-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="water_Rent" name="water" {{  ($list->water == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="water_Rent">
                                    Water
                                </label>
                            </div>
                            <div class="form-check ms-3 ps-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="drain_Rent" name="drainage_system" {{  ($list->drainage_system == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="drain_Rent">
                                    Drainage System
                                </label>
                            </div>
                            <div class="form-check ms-3 ps-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="parking_Rent" name="parking" {{  ($list->parking == 'on' ? ' checked' : '') }}>
                                <label class="form-check-label" for="parking_Rent">
                                    Parking
                                </label>
                            </div>


                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                            <h2 class="fw-bold mb-3">Gallery Section</h2>
                            <div class="row">
                                <div class="col-6 p-2">

                                    @if($list->photo == '')
                                    <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid img-thumbnail">
                                    <div class=" input-group mt-2 update_section_file_input">
                                        <input type="file" class="form-control " name="photo" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <img src="{{asset('public/uploads/lands/'.$list->photo)}}" alt="" srcset="" class="update_section_image img-fluid img-thumbnail">
                                    <div class="d-flex justify-content-between">
                                        <div class="input-group mt-2 update_section_file_input">
                                            <input type="file" class="form-control" name="photo" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                            <span class="text-danger">@error('photo') {{$message}} @enderror</span>

                                        </div>
                                        <!-- <a href="{{route('image_delete',['Land',$list->id,'lands','photo',$list->photo])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a> -->
                                    </div>
                                    @endif

                                    <label for="photo_Rent" class="d-block mt-2"> Main Image</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-2">
                                    @if($list->photo1 == '')
                                    <div class="post_img_update img-thumbnail">
                                        <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid">
                                    </div>
                                    <div class=" input-group mt-2 update_section_file_input">
                                        <input type="file" class="form-control " name="photo1" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <div class="post_img_update img-thumbnail">
                                        <img src="{{asset('public/uploads/lands/'.$list->photo1)}}" alt="" srcset="" class="update_section_image img-fluid">
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <div class="input-group update_section_file_input">
                                            <input type="file" class="form-control" name="photo1" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <a href="{{route('image_delete',['Land',$list->id,'lands','photo1',$list->photo1])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
                                    </div>
                                    @endif
                                    <label for="photo1_Rent" class="d-block mt-2 "> Photo 2</label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-2">
                                    @if($list->photo2 == '')
                                    <div class="post_img_update img-thumbnail">
                                        <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid">
                                    </div>
                                    <div class=" input-group mt-2 update_section_file_input">
                                        <input type="file" class="form-control " name="photo2" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <div class="post_img_update img-thumbnail">
                                        <img src="{{asset('public/uploads/lands/'.$list->photo2)}}" alt="" srcset="" class="update_section_image img-fluid">
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <div class="input-group update_section_file_input">
                                            <input type="file" class="form-control" name="photo2" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <a href="{{route('image_delete',['Land',$list->id,'lands','photo2',$list->photo2])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
                                    </div>
                                    @endif
                                    <label for="photo2_Rent" class="d-block mt-2"> Photo 3</label>

                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-2">
                                    @if($list->photo3 == '')
                                    <div class="post_img_update img-thumbnail">
                                        <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid">
                                    </div>
                                    <div class=" input-group mt-2 update_section_file_input">
                                        <input type="file" class="form-control " name="photo3" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <div class="post_img_update img-thumbnail">
                                        <img src="{{asset('public/uploads/lands/'.$list->photo3)}}" alt="" srcset="" class="update_section_image img-fluid">
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <div class="input-group update_section_file_input">
                                            <input type="file" class="form-control" name="photo3" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <a href="{{route('image_delete',['Land',$list->id,'lands','photo3',$list->photo3])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
                                    </div>
                                    @endif
                                    <label for="photo2_Rent" class="d-block mt-2"> Photo 4</label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-2">
                                    @if($list->photo4 == '')
                                    <div class="post_img_update img-thumbnail">
                                        <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid">
                                    </div>
                                    <div class=" input-group mt-2 update_section_file_input">
                                        <input type="file" class="form-control " name="photo4" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <div class="post_img_update img-thumbnail">
                                        <img src="{{asset('public/uploads/lands/'.$list->photo4)}}" alt="" srcset="" class="update_section_image img-fluid">
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <div class="input-group update_section_file_input">
                                            <input type="file" class="form-control" name="photo4" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <a href="{{route('image_delete',['Land',$list->id,'lands','photo4',$list->photo4])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
                                    </div>
                                    @endif
                                    <label for="photo2_Rent" class="d-block mt-2"> Photo 5</label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-2">
                                    @if($list->photo5 == '')
                                    <div class="post_img_update img-thumbnail">
                                        <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid">
                                    </div>
                                    <div class=" input-group mt-2 update_section_file_input">
                                        <input type="file" class="form-control " name="photo5" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <div class="post_img_update img-thumbnail">
                                        <img src="{{asset('public/uploads/lands/'.$list->photo5)}}" alt="" srcset="" class="update_section_image img-fluid">
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <div class="input-group update_section_file_input">
                                            <input type="file" class="form-control" name="photo5" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <a href="{{route('image_delete',['Land',$list->id,'lands','photo5',$list->photo5])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
                                    </div>
                                    @endif
                                    <label for="photo2_Rent" class="d-block mt-2"> Photo 6</label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12 p-2">
                                    @if($list->photo6 == '')
                                    <div class="post_img_update img-thumbnail">
                                        <img src="{{asset('/Frontend/assets/img/th.webp')}}" alt="" srcset="" class="update_section_image img-fluid">
                                    </div>
                                    <div class=" input-group mt-2 update_section_file_input">
                                        <input type="file" class="form-control " name="photo6" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>
                                    @else
                                    <div class="post_img_update img-thumbnail">
                                        <img src="{{asset('public/uploads/lands/'.$list->photo6)}}" alt="" srcset="" class="update_section_image img-fluid">
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <div class="input-group update_section_file_input">
                                            <input type="file" class="form-control" name="photo6" id="photo_Rent" placeholder="asd" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <a href="{{route('image_delete',['Land',$list->id,'lands','photo6',$list->photo6])}}" class="btn btn-primary update_section_file_input_dlt_btn ms-1 p-1"><i class="fa-solid fa-trash-can"></i></a>
                                    </div>
                                    @endif
                                    <label for="photo2_Rent" class="d-block mt-2"> Photo 7</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 my-3 ">
                            <label for="video_Rent" class="form-label me-2 fw-bold"> Youtube Link</label>
                            <input type="text" class="form-control" name="video" value="{{$list->video}}" id="video_Rent" placeholder="  Youtube Link">
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary  my-2" type="submit">Update Rent Post</button>
                        </div>
                    </div>
                </form>
                @else
                <form method="POST" action="{{ route('land_update',$list->id) }}">
                    @csrf

                    <div class="row">
                        <div class="  col-12 mb-3 ">
                            <label for="title_Want" class="form-label me-2 fw-bold">Post Title</label>
                            <input name="title" value="{{$list->title}}" type="text" class="form-control" id="title_Want" placeholder="Enter Post Title">
                            <span class="text-danger">@error('title') {{$message}} @enderror</span>

                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="date_Want" class="form-label me-2 fw-bold">Date</label>
                            <input name="date" value="{{$list->date}}" min="{{\Carbon\Carbon::today()->format('Y-m-d')}}" type="date" class="form-control" id="date_Want" onfocus="this.showPicker()">
                            <span class="text-danger">@error('date') {{$message}} @enderror</span>

                        </div>
                        <div class=" col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="phone_Want" class="form-label me-2 fw-bold">Mobile</label>
                            <input type="number" name="phone" value="{{$list->phone}}" class="form-control">
                            <span class="text-danger">@error('phone') {{$message}} @enderror</span>

                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                            <label for="price_rented" class="form-label me-2 fw-bold">Rent</label>
                            <div class="row">
                                <div class="col-4 pe-0">
                                    <div class="input-group">
                                        <input name="price" value="{{$list->price}}" type="number" class="form-control" id="price_rented" placeholder="Enter Price">
                                    </div>
                                </div>
                                <div class="col-1">
                                    <span class="text-light fs-3">/</span>
                                </div>
                                <div class="col-7 ps-0">
                                    <div class="input-group">
                                        <select class="form-select form-select-md" aria-label=".form-select-lg example" name="per_price">
                                            <option selected hidden>Choose Rent Type</option>
                                            <option value="hour" {{$list->per_price == "hour" ? 'selected':''}}>Hour</option>
                                            <option value="day" {{$list->per_price == "day" ? 'selected':''}}> Day</option>
                                            <option value="night" {{$list->per_price == "night" ? 'selected':''}}> Only Night</option>
                                            <option value="week" {{$list->per_price == "week" ? 'selected':''}}> Week</option>
                                            <option value="month" {{$list->per_price == "month" ? 'selected':''}}> Month</option>
                                            <option value="year" {{$list->per_price == "year" ? 'selected':''}}> Year</option>
                                        </select>
                                    </div>
                                </div>
                                <span class="text-danger">@error('price') {{$message}} @enderror</span>
                                <span class="text-danger">@error('per_price') {{$message}} @enderror</span>

                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                            <label for="area_Want" class="form-label me-2 fw-bold">Land area</label>
                            <input name="land_area" value="{{$list->land_area}}" type="text" class="form-control" id="area_Want" placeholder="Enter area">
                            <span class="text-danger">@error('land_area') {{$message}} @enderror</span>

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3 ">
                            <label for="height_Want" class="form-label me-2 fw-bold">Land Height</label>
                            <input name="land_height" value="{{$list->land_height}}" type="text" class="form-control" id="height_Want" placeholder="Enter Height">
                            <span class="text-danger">@error('land_height') {{$message}} @enderror</span>

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12 mb-3">
                            <label for="road_Want" class="form-label me-2 fw-bold">Road Width</label>
                            <input name="road_width" value="{{$list->road_width}}" type="text" class="form-control" id="road_Want" placeholder="Enter Road Width">
                            <span class="text-danger">@error('road_width') {{$message}} @enderror</span>

                        </div>
                        <div class="  col-12 mb-3 ">
                            <label for="address_Want" class="form-label me-2 fw-bold">Address</label>
                            <input name="address" value="{{$list->address}}" type="text" class="form-control" id="address_Want" placeholder="Enter Address">
                            <span class="text-danger">@error('address') {{$message}} @enderror</span>

                        </div>
                        <div class="col-12 mb-3 ">
                            <label for="description_Want" class="form-label me-2 fw-bold"> Description</label>
                            <textarea name="description" type="text" class="form-control" id="description_Want" rows="3" placeholder="Enter Description">{{$list->description}}</textarea>
                        </div>
                        <div class="col-12 mb-3">
                            <h2 class="fw-bold mb-3">Amenities</h2>
                            <div class="row ms-3 ps-2">
                                <div class="col-lg-2 col-md-2 col-sm-6 col-12 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="elect_Want" name="electricity" {{  ($list->electricity == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="elect_Want">
                                        Electricity
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-12 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="gas_Want" name="gas" {{  ($list->gas == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="gas_Want">
                                        Gas
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-12 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="water_Want" name="water" {{  ($list->water == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="water_Want">
                                        Water
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-12 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="drain_Want" name="drainage_system" {{  ($list->drainage_system == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="drain_Want">
                                        Drainage System
                                    </label>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-12 form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="parking_Want" name="parking" {{  ($list->parking == 'on' ? ' checked' : '') }}>
                                    <label class="form-check-label" for="parking_Want">
                                        Parking
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary  w-25 mx-auto" type="submit">Update Want Post</button>
                    </div>
                </form>
                @endif
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $("#hello").slideDown(300).delay(1000).slideUp(300);
    });
</script>
@endsection