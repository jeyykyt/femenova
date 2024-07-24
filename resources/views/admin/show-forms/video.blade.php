<div class="modal fade" id="showVideoModal-{{ $video->id }}" tabindex="-1" aria-labelledby="bookModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editAchievementModalLabel" style="font-family: Montserrat, sans-serif; color: #f13e3e; --bs-info: #f13e3e; --bs-info-rgb: 241,62,62; font-weight: bold;">
                    {{ $video -> video_title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body p-0">
                    <div class="row">
{{--                        <div class="col-lg-5 col-xxl-5 offset-xxl-0 d-none d-lg-flex" style="padding-top: 95px;padding-right: 0px;margin-right: 31px;padding-left: 14px;margin-left: 0px;padding-bottom: 145px;margin-top: -18px;">--}}
{{--                            <img width="255" height="255" style="margin-bottom: -38px;margin-right: -1px;padding-right: 8px;margin-left: 24px;padding-top: 0px;margin-top: -55px;" src="{{ asset('uploads/video/images/'.$video->image) }}">--}}
{{--                        </div>--}}
                        <div class="col-lg-7 col-xxl-6" style="margin-left: 30px;">
                            <div class="p-5" style="margin-top: -20px;">
                                <header></header>
                                <h1 style="font-size: 17px;margin-left: -30px;">Speaker's Name:</h1>
                                <h1 style="font-size: 20PX;"><span style="color: rgb(0, 0, 0);">{{ $video -> speakers_name }}</span></h1>
                                <h1 style="font-size: 17px;margin-left: -30px;">Link of the Video:</h1>
                                <a href="{{ $video-> video_link }}" target="_blank">{{ $video-> video_link }}</a>
                                <h1 style="font-size: 17px;margin-left: -30px;">Description:</h1>
                                <h1 style="font-size: 20PX;"><span style="color: rgb(0, 0, 0);">{{ $video -> description }}</span></h1>
                                <h1></h1>
                                <h1 style="padding-right: 0px;margin-right: 504px;"></h1>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

