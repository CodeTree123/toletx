<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/x-icon" href="{{asset('Frontend/assets/img/header/favicon_io/android-chrome-192x192.png')}}">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300&family=Manrope:wght@300&display=swap" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="{{asset('Frontend/assets/img/header/TOLETX-LOGO-2.ai')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Custom CSS for header  -->

    <link rel="stylesheet" href="{{asset('Frontend/assets/css/icon.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/dark.css')}}">
    <link rel="stylesheet" href="{{asset('Frontend/assets/css/lite.css')}}">

    <link rel="stylesheet" href="{{asset('Frontend/assets/css/responsive.css')}}">
    <!-- jQuery CDN -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script>
        // Render blocking JS:
        if (localStorage.theme) document.documentElement.setAttribute("data-theme", localStorage.theme);
    </script>
    <script>
        $(document).ready(function() {
            // $('.test').hide();

            $('#choose_post_type').on('change', function() {
                let choose = $(this).val();
                $('.search_form_sec').removeClass("d-none");
            });
        });
    </script>

    <title>ToletX</title>
</head>

<body>
    @include('frontend.include.header')

    <section class="mt-3">
        <div class="container center-container">
            <div class="row row1 ">
                <!-- Service Items Start -->
                <div class="col-lg-8 col-md-8 center-service-item">
                    @yield('content')
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block" id="hello">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif

                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
                <!-- Service Items End -->
                <div class="col-lg-4 col-md-4 " style="height:fit-content;">
                    <div class="login-form shadow py-3 ">
                        @if(Auth::user())

                        <!-- profile info -->
                        <div class="  text-center  ">
                            <div class="">
                                <a href="{{route('profile')}}" class="img-a ">
                                    @if (auth()->user()->image == null )
                                    @if(auth()->user()->gender == 'Male' )
                                    <img src="{{asset('public/man-dummy.png') }}" class="rounded-circle mx-auto img-img" alt="" srcset="">
                                    @else
                                    <img src="{{asset('public/dummy-female.jpg') }}" class="rounded-circle mx-auto img-img" alt="" srcset="">
                                    @endif
                                    @else
                                    <img src="{{asset('public/uploads/registers') }}/{{(Auth::user()->image)}}" class="rounded-circle mx-auto img-img" alt="" srcset="" id="test">
                                </a>
                                @endif

                            </div>
                            <div class="name mt-2">
                                <h3 class="title my-2">{{Auth::user()->name}}</h3>
                                <h5 class="title my-2">ID: <span> {{Auth::user()->unique_id}}</span></h5>
                                <div class=" text-center my-2">
                                    <!-- <a href="# " class=" " data-toggle="tooltip" data-placement="top" title="Badge 1">
                                        <i class="fas fa-medal"></i>
                                    </a>
                                    <a href="# " class=" " data-toggle="tooltip" data-placement="top" title="Badge 2">
                                        <i class="fas fa-medal"></i>
                                    </a>
                                    <a href="# " class=" " data-toggle="tooltip" data-placement="top" title="Badge 3">
                                        <i class="fas fa-medal"></i>
                                    </a> -->
                                </div>
                            </div>
                        </div>
                        <script>
                            $(function() {
                                $('[data-toggle="tooltip"]').tooltip()
                            })
                        </script>
                        @else
                        @include('frontend.include.login_form')
                        <!--Login Form End -->
                        @endif
                    </div>
                    <!-- ad section -->
                    <!-- <div class="col-md-5 col-lg-5 pl-5  mb-3  advert" style="margin-top: 6.3rem!important;"> -->
                    <div class="   mb-3  advert" style="margin-top: 4rem!important;">
                        @include('frontend.include.advertise')
                    </div>
                    <!-- ad section -->
                </div>
            </div>
        </div>
    </section>
    <!-- Section Start -->
    <section class=" pb-5">
        <div class="container">
            <div class="row">
                <!-- slider section -->
                <div class="col-md-12   ">
                    @include('frontend.include.slider_section')
                </div>
                <!-- slider section -->
            </div>
        </div>
    </section>
    <!-- Section End -->
    @include('frontend.include.footer')
</body>

</html>