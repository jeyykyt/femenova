
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoModalLabel" style="font-family: Montserrat, sans-serif; color: #f13e3e; --bs-info: #f13e3e; --bs-info-rgb: 241,62,62; font-weight: bold;">Add Video Content</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('video.store') }}" method="POST" enctype="multipart/form-data" style="border-color: #ed6662;">
                    @csrf
                    <div class="mb-3">
                        <label for="speakers_name" class="form-label">Speaker's Name:</label>
                        <input type="text" class="form-control" id="speakers_name" name="speakers_name" data-bs-theme="light">
                        @error('speakers_name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="video_title" class="form-label">Title of the Video:</label>
                        <input type="text" class="form-control" id="video_title" name="video_title" data-bs-theme="light">
                        @error('video_title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="video_link" class="form-label">Link of the Video:</label>
                        <input type="text" class="form-control" id="video_link" name="video_link" data-bs-theme="light">
                        @error('video_link')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
{{--                    <div class="mb-3">--}}
{{--                        <label for="image" class="form-label">Picture of the Video:</label>--}}
{{--                        <input type="file" class="form-control" id="image" name="image" style="margin-top: 20px; margin-bottom: 20px;">--}}
{{--                        @error('image')--}}
{{--                        <span class="text-danger">{{ $message }}</span>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
                    <div class="mb-3">
                        <label for="description" class="form-label">Description:</label>
                        <textarea class="form-control" id="description" name="description" data-bs-theme="light"></textarea>
                        @error('description')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background: #8b8b71;">Cancel</button>
                        <button type="submit" class="btn btn-primary" style="background: #ed6662;">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{--previous form--}}




{{--<!DOCTYPE html>--}}
{{--<html data-bs-theme="light" lang="en">--}}

{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">--}}
{{--    <title>Blog Post - Brand</title>--}}
{{--    <meta name="description" content="Empowering women, breaking taboos, and fostering a supportive community around all things women's health.">--}}
{{--    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ url('https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap') }}">--}}
{{--    <link rel="stylesheet" href="{{ asset('css/bs-theme-overrides.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ asset('css/baguetteBox.min.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ asset('css/Contact-Details-icons.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ asset('css/Testimonials-images.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ asset('css/vanilla-zoom.min.css') }}">--}}
{{--</head>--}}

{{--<body>--}}
{{--<x-adminheader/>--}}

{{--<main class="page">--}}
{{--    <section class="clean-block clean-form dark" style="background: linear-gradient(-5deg, rgb(239,120,117) 2%, white 26%, rgb(253,240,240) 39%, rgb(248,192,190) 85%, #ed6662 100%);border-style: none;border-color: var(--bs-border-color-translucent);">--}}
{{--        <div class="container" style="background: var(--bs-bordr-color-translucent);border-color: var(--bs-border-color-translucent);border-right-color: #ed6662;">--}}
{{--            <div class="block-heading">--}}
{{--                <h2 class="text-info" style="font-family: Montserrat, sans-serif;color: #f13e3e;--bs-info: #f13e3e;--bs-info-rgb: 241,62,62;font-weight: bold;">Video Contents Form</h2>--}}
{{--            </div>--}}

{{--            <form style="border-color: #ed6662;">--}}
{{--                                    <div class="mb-3"><label class="form-label" for="name">Speaker's Name:</label><input class="form-control" type="text" id="name" name="name" data-bs-theme="light"></div>--}}
{{--                                    <div class="mb-3"><label class="form-label" for="subject">Title of the Video:</label><input class="form-control" type="text" id="subject" name="subject" data-bs-theme="light"><label class="form-label" for="subject" style="margin-top: 8px;">Link of the Video:</label><input class="form-control" type="text" id="subject-1" name="subject" data-bs-theme="light"></div><label class="form-label" for="email">Picture of the Video:</label>--}}
{{--                                    <div class="mb-3"></div><img width="100" height="80"><input class="form-control" type="file" style="margin-top: 20px;margin-bottom: 20px;">--}}
{{--                                    <div class="mb-3"><label class="form-label" for="message">Description:</label><textarea class="form-control" id="message" name="message" data-bs-theme="light"></textarea></div>--}}
{{--                                    <div class="mb-3"><button class="btn btn-primary" type="submit" style="background: #ed6662;">Create</button><button class="btn btn-primary" type="button" style="background: #8b8b71; margin-left: 250px;" onclick="window.history.back();">--}}
{{--                                            Cancel--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </form>--}}


{{--        </div>--}}
{{--    </section>--}}
{{--</main>--}}

{{--<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/baguetteBox.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/vanilla-zoom.js') }}"></script>--}}
{{--<script src="{{ asset('js/theme.js') }}"></script>--}}

{{--<x-footer/>--}}

{{--</body>--}}

{{--</html>--}}



{{--<!DOCTYPE html>--}}
{{--<html data-bs-theme="light" lang="en">--}}

{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">--}}
{{--    <title>Blog Post - Brand</title>--}}
{{--    <meta name="description" content="Empowering women, breaking taboos, and fostering a supportive community around all things women's health.">--}}
{{--    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ url('https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap') }}">--}}
{{--    <link rel="stylesheet" href="{{ asset('css/bs-theme-overrides.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ asset('css/baguetteBox.min.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ asset('css/Contact-Details-icons.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ asset('css/Testimonials-images.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ asset('css/vanilla-zoom.min.css') }}">--}}
{{--</head>--}}

{{--<body>--}}
{{--<x-adminheader/>--}}

{{--<main class="page">--}}
{{--    <section class="clean-block clean-post dark" style="background:linear-gradient(-5deg, rgb(239,120,117) 2%, white 26%, rgb(253,240,240) 39%, rgb(248,192,190) 85%, #ed6662 100%);"> --}}{{----}}{{--background: linear-gradient(-5deg, rgb(239,120,117) 2%, white 26%, rgb(253,240,240) 39%, rgb(248,192,190) 85%, #ed6662 100%); --}}
{{--        <div class="container">--}}
{{--            <div class="block-content"></div>--}}
{{--        </div>--}}

{{--  edit section   --}}
{{--        <main class="page">--}}
{{--            <section class="clean-block clean-form dark" style="background:transparent;">--}}
{{--                <div class="container" style="background: var(--bs-bordr-color-translucent);border-right-color: #ed6662;">--}}
{{--                    <div class="block-heading">--}}
{{--                        <h2 class="text-info" style="font-family: Montserrat, sans-serif;color: #f13e3e;--bs-info: #f13e3e;--bs-info-rgb: 241,62,62;font-weight: bold;">Video Contents Form</h2>--}}
{{--                    </div>--}}
{{--                    <form style="border-color: #ed6662;">--}}
{{--                        <div class="mb-3"><label class="form-label" for="name">Speaker's Name:</label><input class="form-control" type="text" id="name" name="name" data-bs-theme="light"></div>--}}
{{--                        <div class="mb-3"><label class="form-label" for="subject">Title of the Video:</label><input class="form-control" type="text" id="subject" name="subject" data-bs-theme="light"><label class="form-label" for="subject" style="margin-top: 8px;">Link of the Video:</label><input class="form-control" type="text" id="subject-1" name="subject" data-bs-theme="light"></div><label class="form-label" for="email">Picture of the Video:</label>--}}
{{--                        <div class="mb-3"></div><img width="100" height="80"><input class="form-control" type="file" style="margin-top: 20px;margin-bottom: 20px;">--}}
{{--                        <div class="mb-3"><label class="form-label" for="message">Description:</label><textarea class="form-control" id="message" name="message" data-bs-theme="light"></textarea></div>--}}
{{--                        <div class="mb-3"><button class="btn btn-primary" type="submit" style="background: #ed6662;">Create</button><button class="btn btn-primary" type="submit" style="background: #8b8b71;margin-left: 250px;">Cancel</button></div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </section>--}}
{{--        </main>--}}

{{--        --}}{{----}}{{--  edit section   --}}

{{--    </section>--}}
{{--</main>--}}
{{--<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/baguetteBox.min.js') }}"></script>--}}
{{--<script src="{{ asset('js/vanilla-zoom.js') }}"></script>--}}
{{--<script src="{{ asset('js/theme.js') }}"></script>--}}

{{--<x-footer/>--}}

{{--</body>--}}

{{--</html>--}}
