<link rel="stylesheet" href="{{asset('Frontend/assets/css/slick-slider.css')}}">

<!--Slick CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('Frontend/assets/css/slick-theme.css')}}" />

<script type="text/javascript" src="{{asset('Frontend/assets/js/slick.js')}}"></script>
<?php

use App\Models\Hotel;
use App\Models\Room;
use App\Models\Flat;
use App\Models\Parking_Spot;
use App\Models\Hostel;
use App\Models\Office;
use App\Models\Land;
use App\Models\Community_Center;
use App\Models\Shooting_Spot;
use App\Models\Shop;
use App\Models\Factory;
use App\Models\Warehouse;
use App\Models\Pond;
use App\Models\Swimming_Pool;
use App\Models\Bilboard;
use App\Models\Rooftop;
use App\Models\Restaurant;
use App\Models\Exibution_Center;
use App\Models\Play_ground;
use App\Models\Ghat;
use App\Models\Building;
use App\Models\Picnic_Spot;

$rooms = Room::all();
$bilboards = Bilboard::all();
$buildings = building::all();
$communities = Community_Center::all();
$exibutions = Exibution_Center::all();
$factories = Factory::all();
$flats = Flat::all();
$ghats = Ghat::all();
$hostels = Hostel::all();
$hotels = Hotel::all();
$lands = Land::all();
$offices = Office::all();
$parkings = Parking_Spot::all();
$picnics = Picnic_Spot::all();
$playgrounds = Play_ground::all();
$ponds = Pond::all();
$restaurants = Restaurant::all();
$rooftops = Rooftop::all();
$shootings = Shooting_Spot::all();
$shops = Shop::all();
$swimmingpools = Swimming_Pool::all();
$warehouses = Warehouse::all(); ?>
<div class="snippet-body">
    <div class=" py-5">
        <div class="position-relative">
            <h2 class="slider_services d-inline position-absolute" style="top:-55px">Rent Post</h2>
            <div class="items rent_slider">
                @foreach($rooms as $list)
                @if($list->post_type == 'Rent')
                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    <img src="{{asset('public/uploads/rooms')}}/{{$list->photo}}" class="card-img-top" alt="..." />

                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->title,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Room Rent : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/room/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($bilboards as $list)
                @if($list->post_type == 'Rent')
                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    <img src="{{asset('public/uploads/bilboards/')}}/{{$list->photo}}" class="card-img-top" alt="..." />
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->title,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Billboard Rent : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/bilboard/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($parkings as $list)
                @if($list->post_type == 'Rent')
                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    <img src="{{asset('public/uploads/garages')}}/{{$list->photo}}" class="card-img-top" alt="..." />
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->title,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Parking Rent : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/parking/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($communities as $list)
                @if($list->post_type == 'Rent')
                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    <img src="{{asset('public/uploads/communities')}}/{{$list->photo}}" class="card-img-top" alt="..." />
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->title,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Community Rent : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/community/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($exibutions as $list)
                @if($list->post_type == 'Rent')
                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    <img src="{{asset('public/uploads/exhibutions')}}/{{$list->photo}}" class="card-img-top" alt="..." />
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->title,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Exhibition Rent : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/exibution/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>

                @endif
                @endforeach

                @foreach($factories as $list)
                @if($list->post_type == 'Rent')
                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    <img src="{{asset('public/uploads/factories')}}/{{$list->photo}}" class="card-img-top" alt="..." />
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->title,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Factory Rent : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/factory/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($flats as $list)
                @if($list->post_type == 'Rent')
                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    <img src="{{asset('public/uploads/flats')}}/{{$list->photo}}" class="card-img-top" alt="..." />
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->title,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Flat Rent : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/flat/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($ghats as $list)
                @if($list->post_type == 'Rent')
                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    <img src="{{asset('public/uploads/ghats')}}/{{$list->photo}}" class="card-img-top" alt="..." />
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->title,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Ghat Rent : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/ghat/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($hostels as $list)
                @if($list->post_type == 'Rent')
                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    <img src="{{asset('public/uploads/hostels')}}/{{$list->photo}}" class="card-img-top" alt="..." />
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->hostel_name,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Hostel Rent : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/hostel/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($hotels as $list)
                @if($list->post_type == 'Rent')
                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    <img src="{{asset('public/uploads/hotels')}}/{{$list->photo}}" class="card-img-top" alt="..." />
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->hotel_name,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Hotel Rent : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/hotel/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($offices as $list)
                @if($list->post_type == 'Rent')
                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    <img src="{{asset('public/uploads/offices')}}/{{$list->photo}}" class="card-img-top" alt="..." />
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->title,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Office Rent : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/office/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($lands as $list)
                @if($list->post_type == 'Rent')
                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    <img src="{{asset('public/uploads/lands')}}/{{$list->photo}}" class="card-img-top" alt="..." />
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->title,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Land Rent : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/land/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($playgrounds as $list)
                @if($list->post_type == 'Rent')
                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    <img src="{{asset('public/uploads/playgrounds')}}/{{$list->photo}}" class="card-img-top" alt="..." />
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->title,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Camp Site Rent : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/playground/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($ponds as $list)
                @if($list->post_type == 'Rent')
                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    <img src="{{asset('public/uploads/ponds')}}/{{$list->photo}}" class="card-img-top" alt="..." />
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->title,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Pond Rent : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/pond/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($restaurants as $list)
                @if($list->post_type == 'Rent')
                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    <img src="{{asset('public/uploads/resturents/'.$list->photo)}}" class="card-img-top" alt="..." />
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->resort_name,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Resort Rent : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/restaurant/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($rooftops as $list)
                @if($list->post_type == 'Rent')
                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    <img src="{{asset('public/uploads/rooftops')}}/{{$list->photo}}" class="card-img-top" alt="..." />
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->title,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Rooftop Rent : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/rooftop/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($shootings as $list)
                @if($list->post_type == 'Rent')
                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    <img src="{{asset('public/uploads/shootings')}}/{{$list->photo}}" class="card-img-top" alt="..." />
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->title,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Shooting Spot Rent : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/shooting/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($shops as $list)
                @if($list->post_type == 'Rent')
                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    <img src="{{asset('public/uploads/shops')}}/{{$list->photo}}" class="card-img-top" alt="..." />
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->title,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Shop Rent : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/shop/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($swimmingpools as $list)
                @if($list->post_type == 'Rent')
                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    <img src="{{asset('public/uploads/swimmingpools')}}/{{$list->photo}}" class="card-img-top" alt="..." />
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->title,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">pool Rent : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/swimmingpool/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($warehouses as $list)
                @if($list->post_type == 'Rent')
                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    <img src="{{asset('public/uploads/warehouses')}}/{{$list->photo}}" class="card-img-top" alt="..." />
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->title,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Warehouse Rent : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/warehouse/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($picnics as $list)
                @if($list->post_type == 'Rent')
                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    <img src="{{asset('public/uploads/picnics')}}/{{$list->photo}}" class="card-img-top" alt="..." />
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->title,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Picnic spot Rent : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/picnic/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($buildings as $list)
                @if($list->post_type == 'Rent')
                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    <img src="{{asset('public/uploads/buildings')}}/{{$list->photo}}" class="card-img-top" alt="..." />
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->building_name,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Building Rent : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/building/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class=" py-3">
        <div class="position-relative">
            <h2 class="slider_services d-inline position-absolute" style="top:-55px"> Want Post </h2>
            <div class="items want_slider">
                @foreach($rooms as $list)
                @if($list->post_type == 'Want')

                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    @if ($list->user->image == null )
                    @if($list->user->gender == 'Male' )
                    <img src="{{asset('public/man-dummy.png') }}" class="card-img-top" alt="...">
                    @else
                    <img src="{{asset('public/dummy-female.jpg') }}" class="card-img-top" alt="...">
                    @endif
                    @else
                    <img src="{{asset('public/uploads/registers') }}/{{($list->user->image)}}" class="card-img-top" alt="...">
                    </a>
                    @endif
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->title,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Need Room : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/room/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($bilboards as $list)
                @if($list->post_type == 'Want')

                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    @if ($list->user->image == null )
                    @if($list->user->gender == 'Male' )
                    <img src="{{asset('public/man-dummy.png') }}" class="card-img-top" alt="...">
                    @else
                    <img src="{{asset('public/dummy-female.jpg') }}" class="card-img-top" alt="...">
                    @endif
                    @else
                    <img src="{{asset('public/uploads/registers') }}/{{($list->user->image)}}" class="card-img-top" alt="...">
                    </a>
                    @endif
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->title,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Need Billboard : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/bilboard/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($parkings as $list)
                @if($list->post_type == 'Want')

                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    @if ($list->user->image == null )
                    @if($list->user->gender == 'Male' )
                    <img src="{{asset('public/man-dummy.png') }}" class="card-img-top" alt="...">
                    @else
                    <img src="{{asset('public/dummy-female.jpg') }}" class="card-img-top" alt="...">
                    @endif
                    @else
                    <img src="{{asset('public/uploads/registers') }}/{{($list->user->image)}}" class="card-img-top" alt="...">
                    </a>
                    @endif
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->title,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Need Parking : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/parking/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($communities as $list)
                @if($list->post_type == 'Want')

                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    @if ($list->user->image == null )
                    @if($list->user->gender == 'Male' )
                    <img src="{{asset('public/man-dummy.png') }}" class="card-img-top" alt="...">
                    @else
                    <img src="{{asset('public/dummy-female.jpg') }}" class="card-img-top" alt="...">
                    @endif
                    @else
                    <img src="{{asset('public/uploads/registers') }}/{{($list->user->image)}}" class="card-img-top" alt="...">
                    </a>
                    @endif
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->title,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Need Community : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/community/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($exibutions as $list)
                @if($list->post_type == 'Want')

                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    @if ($list->user->image == null )
                    @if($list->user->gender == 'Male' )
                    <img src="{{asset('public/man-dummy.png') }}" class="card-img-top" alt="...">
                    @else
                    <img src="{{asset('public/dummy-female.jpg') }}" class="card-img-top" alt="...">
                    @endif
                    @else
                    <img src="{{asset('public/uploads/registers') }}/{{($list->user->image)}}" class="card-img-top" alt="...">
                    </a>
                    @endif
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->title,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Need Exhibitio : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/exibution/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($factories as $list)
                @if($list->post_type == 'Want')

                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    @if ($list->user->image == null )
                    @if($list->user->gender == 'Male' )
                    <img src="{{asset('public/man-dummy.png') }}" class="card-img-top" alt="...">
                    @else
                    <img src="{{asset('public/dummy-female.jpg') }}" class="card-img-top" alt="...">
                    @endif
                    @else
                    <img src="{{asset('public/uploads/registers') }}/{{($list->user->image)}}" class="card-img-top" alt="...">
                    </a>
                    @endif
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->title,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Need Factory : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/factory/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($flats as $list)
                @if($list->post_type == 'Want')

                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    @if ($list->user->image == null )
                    @if($list->user->gender == 'Male' )
                    <img src="{{asset('public/man-dummy.png') }}" class="card-img-top" alt="...">
                    @else
                    <img src="{{asset('public/dummy-female.jpg') }}" class="card-img-top" alt="...">
                    @endif
                    @else
                    <img src="{{asset('public/uploads/registers') }}/{{($list->user->image)}}" class="card-img-top" alt="...">
                    </a>
                    @endif
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->title,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Need Flat : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/flat/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($ghats as $list)
                @if($list->post_type == 'Want')

                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    @if ($list->user->image == null )
                    @if($list->user->gender == 'Male' )
                    <img src="{{asset('public/man-dummy.png') }}" class="card-img-top" alt="...">
                    @else
                    <img src="{{asset('public/dummy-female.jpg') }}" class="card-img-top" alt="...">
                    @endif
                    @else
                    <img src="{{asset('public/uploads/registers') }}/{{($list->user->image)}}" class="card-img-top" alt="...">
                    </a>
                    @endif
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->title,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Need Ghat : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/ghat/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($hostels as $list)
                @if($list->post_type == 'Want')

                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    @if ($list->user->image == null )
                    @if($list->user->gender == 'Male' )
                    <img src="{{asset('public/man-dummy.png') }}" class="card-img-top" alt="...">
                    @else
                    <img src="{{asset('public/dummy-female.jpg') }}" class="card-img-top" alt="...">
                    @endif
                    @else
                    <img src="{{asset('public/uploads/registers') }}/{{($list->user->image)}}" class="card-img-top" alt="...">
                    </a>
                    @endif
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->hostel_name,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Need Hostel :{{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/hostel/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($hotels as $list)
                @if($list->post_type == 'Want')

                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    @if ($list->user->image == null )
                    @if($list->user->gender == 'Male' )
                    <img src="{{asset('public/man-dummy.png') }}" class="card-img-top" alt="...">
                    @else
                    <img src="{{asset('public/dummy-female.jpg') }}" class="card-img-top" alt="...">
                    @endif
                    @else
                    <img src="{{asset('public/uploads/registers') }}/{{($list->user->image)}}" class="card-img-top" alt="...">
                    </a>
                    @endif
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->hotel_name,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Need Hotel : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/hotel/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($offices as $list)
                @if($list->post_type == 'Want')

                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    @if ($list->user->image == null )
                    @if($list->user->gender == 'Male' )
                    <img src="{{asset('public/man-dummy.png') }}" class="card-img-top" alt="...">
                    @else
                    <img src="{{asset('public/dummy-female.jpg') }}" class="card-img-top" alt="...">
                    @endif
                    @else
                    <img src="{{asset('public/uploads/registers') }}/{{($list->user->image)}}" class="card-img-top" alt="...">
                    </a>
                    @endif
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->title,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Need Office :{{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/office/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($lands as $list)
                @if($list->post_type == 'Want')

                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    @if ($list->user->image == null )
                    @if($list->user->gender == 'Male' )
                    <img src="{{asset('public/man-dummy.png') }}" class="card-img-top" alt="...">
                    @else
                    <img src="{{asset('public/dummy-female.jpg') }}" class="card-img-top" alt="...">
                    @endif
                    @else
                    <img src="{{asset('public/uploads/registers') }}/{{($list->user->image)}}" class="card-img-top" alt="...">
                    </a>
                    @endif
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->title,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Need Land : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/land/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($playgrounds as $list)
                @if($list->post_type == 'Want')

                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    @if ($list->user->image == null )
                    @if($list->user->gender == 'Male' )
                    <img src="{{asset('public/man-dummy.png') }}" class="card-img-top" alt="...">
                    @else
                    <img src="{{asset('public/dummy-female.jpg') }}" class="card-img-top" alt="...">
                    @endif
                    @else
                    <img src="{{asset('public/uploads/registers') }}/{{($list->user->image)}}" class="card-img-top" alt="...">
                    </a>
                    @endif
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->title,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Need Camp Site : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/playground/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($ponds as $list)
                @if($list->post_type == 'Want')

                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    @if ($list->user->image == null )
                    @if($list->user->gender == 'Male' )
                    <img src="{{asset('public/man-dummy.png') }}" class="card-img-top" alt="...">
                    @else
                    <img src="{{asset('public/dummy-female.jpg') }}" class="card-img-top" alt="...">
                    @endif
                    @else
                    <img src="{{asset('public/uploads/registers') }}/{{($list->user->image)}}" class="card-img-top" alt="...">
                    </a>
                    @endif
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->title,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Need Pond : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/pond/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($restaurants as $list)
                @if($list->post_type == 'Want')

                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    @if ($list->user->image == null )
                    @if($list->user->gender == 'Male' )
                    <img src="{{asset('public/man-dummy.png') }}" class="card-img-top" alt="...">
                    @else
                    <img src="{{asset('public/dummy-female.jpg') }}" class="card-img-top" alt="...">
                    @endif
                    @else
                    <img src="{{asset('public/uploads/registers') }}/{{($list->user->image)}}" class="card-img-top" alt="...">
                    </a>
                    @endif
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->resort_name,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Need Resort :{{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/restaurant/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($rooftops as $list)
                @if($list->post_type == 'Want')

                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    @if ($list->user->image == null )
                    @if($list->user->gender == 'Male' )
                    <img src="{{asset('public/man-dummy.png') }}" class="card-img-top" alt="...">
                    @else
                    <img src="{{asset('public/dummy-female.jpg') }}" class="card-img-top" alt="...">
                    @endif
                    @else
                    <img src="{{asset('public/uploads/registers') }}/{{($list->user->image)}}" class="card-img-top" alt="...">
                    </a>
                    @endif
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->title,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Need Rooftop : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/rooftop/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($shootings as $list)
                @if($list->post_type == 'Want')

                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    @if ($list->user->image == null )
                    @if($list->user->gender == 'Male' )
                    <img src="{{asset('public/man-dummy.png') }}" class="card-img-top" alt="...">
                    @else
                    <img src="{{asset('public/dummy-female.jpg') }}" class="card-img-top" alt="...">
                    @endif
                    @else
                    <img src="{{asset('public/uploads/registers') }}/{{($list->user->image)}}" class="card-img-top" alt="...">
                    </a>
                    @endif
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->title,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Need Shooting Spot : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/shooting/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($shops as $list)
                @if($list->post_type == 'Want')

                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    @if ($list->user->image == null )
                    @if($list->user->gender == 'Male' )
                    <img src="{{asset('public/man-dummy.png') }}" class="card-img-top" alt="...">
                    @else
                    <img src="{{asset('public/dummy-female.jpg') }}" class="card-img-top" alt="...">
                    @endif
                    @else
                    <img src="{{asset('public/uploads/registers') }}/{{($list->user->image)}}" class="card-img-top" alt="...">
                    </a>
                    @endif
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->title,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Need Shop : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/shop/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($swimmingpools as $list)
                @if($list->post_type == 'Want')

                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    @if ($list->user->image == null )
                    @if($list->user->gender == 'Male' )
                    <img src="{{asset('public/man-dummy.png') }}" class="card-img-top" alt="...">
                    @else
                    <img src="{{asset('public/dummy-female.jpg') }}" class="card-img-top" alt="...">
                    @endif
                    @else
                    <img src="{{asset('public/uploads/registers') }}/{{($list->user->image)}}" class="card-img-top" alt="...">
                    </a>
                    @endif
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->title,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Need pool : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/swimmingpool/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($warehouses as $list)
                @if($list->post_type == 'Want')

                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    @if ($list->user->image == null )
                    @if($list->user->gender == 'Male' )
                    <img src="{{asset('public/man-dummy.png') }}" class="card-img-top" alt="...">
                    @else
                    <img src="{{asset('public/dummy-female.jpg') }}" class="card-img-top" alt="...">
                    @endif
                    @else
                    <img src="{{asset('public/uploads/registers') }}/{{($list->user->image)}}" class="card-img-top" alt="...">
                    </a>
                    @endif
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->title,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Need Warehouse : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/warehouse/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($picnics as $list)
                @if($list->post_type == 'Want')

                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    @if ($list->user->image == null )
                    @if($list->user->gender == 'Male' )
                    <img src="{{asset('public/man-dummy.png') }}" class="card-img-top" alt="...">
                    @else
                    <img src="{{asset('public/dummy-female.jpg') }}" class="card-img-top" alt="...">
                    @endif
                    @else
                    <img src="{{asset('public/uploads/registers') }}/{{($list->user->image)}}" class="card-img-top" alt="...">
                    </a>
                    @endif
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->title,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Need Picnic spot : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/picnic/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach

                @foreach($buildings as $list)
                @if($list->post_type == 'Want')

                <div class="card shadow mb-2 ms-2 me-2 slick-slider-card" style="width: 10rem">
                    @if ($list->user->image == null )
                    @if($list->user->gender == 'Male' )
                    <img src="{{asset('public/man-dummy.png') }}" class="card-img-top" alt="...">
                    @else
                    <img src="{{asset('public/dummy-female.jpg') }}" class="card-img-top" alt="...">
                    @endif
                    @else
                    <img src="{{asset('public/uploads/registers') }}/{{($list->user->image)}}" class="card-img-top" alt="...">
                    </a>
                    @endif
                    <div class="card-body main-slider-body main-slider-body text-center px-1">
                        <p class="card-text main-slider">{{Str::limit($list->building_name,25)}}</p>
                        <h5 class="card-title main-slider text-capitalize">Need Building : {{$list->price}} Tk</h5>
                        <p class=" main-slider">
                            <span>Available From : {{ Carbon\Carbon::parse($list->date)->format('d/m/Y') }}</span>
                        </p>
                        <a href="{{ url('/building/details/') }}/{{ $list->id }}" class=" btn btn-custom-color2 check-detail mt-2 link-dark">Check Details</a>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
    <script type="text/Javascript">
        $(document).ready(function(){
            $('.items').slick({
                infinite: true,
                lazyLoad: 'ondemand',
                slidesToShow: 4,
                slidesToScroll: 4,
                autoplay: true,
                autoplaySpeed: 3000, 
                pauseOnHover:true,
                responsive: [
                {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
                },
                {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
                },
                {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
                }
            ]
        });
    });
</script>

    <script>

    </script>
</div>