<div class="modal fade" id="showVideoModal-{{ $video->id }}" tabindex="-1" aria-labelledby="bookModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editAchievementModalLabel" style="font-family: Montserrat, sans-serif; color: #f13e3e; --bs-info: #f13e3e; --bs-info-rgb: 241,62,62; font-weight: bold;">
                    {{ $video -> video_title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-4">
{{--                    <div class="col-lg-5 d-flex justify-content-center align-items-center">--}}
{{--                        <img class="img-fluid" src="{{ asset('uploads/video/images/'.$video->image) }}" alt="{{ $video->video_title }}">--}}
{{--                    </div>--}}
                    <div class="col-lg-7 d-flex flex-column justify-content-center">
                        <div class="p-3">
                            <h6 class="fw-bold text-secondary mb-2">Speaker's Name:</h6>
                            <p class="text-dark mb-3">{{ $video->speakers_name }}</p>

                            <h6 class="fw-bold text-secondary mb-2">Video Link:</h6>
                            <a class="text-dark" href="{{ $video->video_link }}" style="text-align: justify">{{ $video->video_link }}</a>

                            <h6 class="fw-bold text-secondary mb-2">Description:</h6>
                            <p class="text-dark" style="text-align: justify">{{ $video->description }}</p>
                        </div>
                    </div>
                </div>
            </div>        </div>
    </div>
</div>

