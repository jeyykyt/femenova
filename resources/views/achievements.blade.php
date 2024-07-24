<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Blog Post - Brand</title>
    <meta name="description" content="Empowering women, breaking taboos, and fostering a supportive community around all things women's health.">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap') }}">
    <link rel="stylesheet" href="{{ asset('css/bs-theme-overrides.css') }}">
    <link rel="stylesheet" href="{{ asset('css/baguetteBox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Contact-Details-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Testimonials-images.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vanilla-zoom.min.css') }}">
    <x-styleCss/>
</head>

<body>

@if (Route::has('login'))
    <nav class="-mx-3 flex flex-1 justify-end">
        @if(auth()->guard('admin')->check())
            <x-adminheader />
        @elseif(auth()->check())
            <x-userheader />
        @else
            <x-publicheader />
        @endif
    </nav>
@endif

<main class="page">
    <section class="clean-block clean-post dark" style="background: linear-gradient(-5deg, rgb(239,120,117) 2%, white 26%, rgb(253,240,240) 39%, rgb(248,192,190) 85%, #ed6662 100%);">
        <div class="container-fluid px-4">
            <div class="block-content"></div>
        </div>

        {{--//insert here--}}

        <div class="block-heading col-md-8 col-xl-11 text-center mx-auto" style="border-color: var(--bs-link-color);">
            <h2 class="text-info" style="--bs-info: #f13e3e;--bs-info-rgb: 241,62,62;"></h2>
        </div>

        <div class="col-md-8 col-xl-11 text-center mx-auto">
            <h2 style="color:#f13e3e;font-weight: bold;">FemeNova Achievements</h2>
            <p class="center-justify">At FemeNova Health, we are proud to share our remarkable journey, a period marked by innovation and dedication to empowering women's health. Over the past year, we have made significant strides in advancing healthcare solutions that prioritize the unique needs of women.</p>
        </div>
        <div class="container-fluid d-flex flex-column align-items-center py-4 py-xl-5" style="background: transparent;">
            <div class="row gy-4 row-cols-1 row-cols-md-2 w-100">
                @if($achievements->isEmpty())
                    <div class="col-12">
                        <div class="alert alert-info text-center" role="alert">
                            No Achievements posted
                        </div>
                    </div>
                @else
                    @foreach($achievements as $achievement)
                        <div class="col">
                            <button class="container-fluid" data-bs-toggle="modal" data-bs-target="#showAchievementModal-{{ $achievement->id }}" style="border: none; background: none; padding: 0;">
                                <div class="card achievement-card">
                                    <img class="card-img w-100 achievement-img" src="{{ asset('uploads/achievement/images/'.$achievement->image) }}">
                                    <div class="card-img-overlay text-center d-flex flex-column justify-content-center align-items-center p-4 achievement-overlay">
                                        <h4>{{ $achievement->project_name }}</h4>
                                        <p>{{ $achievement->date }}</p>
                                    </div>
                                </div>
                            </button>
                        </div>

                        <!-- Show Modal -->
                        @include('modal-achievement', ['achievement' => $achievement])

                    @endforeach
                @endif
            </div>
        </div>

    </section>
</main>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/baguetteBox.min.js') }}"></script>
<script src="{{ asset('js/vanilla-zoom.js') }}"></script>
<script src="{{ asset('js/theme.js') }}"></script>

<x-footer/>
</body>

</html>
