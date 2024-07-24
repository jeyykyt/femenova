<div class="modal fade" id="editVideoModal-{{ $video->id }}" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoModalLabel" style="font-family: Montserrat, sans-serif; color: #f13e3e; --bs-info: #f13e3e; --bs-info-rgb: 241,62,62; font-weight: bold;">Add Video Content</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('video.update', $video) }}" method="POST" enctype="multipart/form-data" style="border-color: #ed6662;">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="speakers_name" class="form-label">Speaker's Name:</label>
                        <input type="text" class="form-control" id="speakers_name" name="speakers_name" value="{{ $video->speakers_name }}"  data-bs-theme="light">
                        @error('speakers_name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="video_title" class="form-label">Title of the Video:</label>
                        <input type="text" class="form-control" id="video_title" name="video_title" value="{{ $video->video_title }}"  data-bs-theme="light">
                        @error('video_title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="video_link" class="form-label">Link of the Video:</label>
                        <input type="text" class="form-control" id="video_link" name="video_link" value="{{ $video->video_link }}"  data-bs-theme="light">
                        @error('video_link')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
{{--                    <div class="mb-3">--}}
{{--                        <label for="image" class="form-label">Picture of the Video:</label>--}}

{{--                        <div class="mb-3">--}}
{{--                            <img class="rounded img-fluid fixed-size-img" src="{{ asset('uploads/video/images/'.$video->image) }}">--}}
{{--                        </div>--}}

{{--                        <input class="form-control" type="file" id="image" name="image" value="{{ asset('uploads/video/images/'.$video->image) }} "style="margin-top: 20px;margin-bottom: 20px;">--}}
{{--                        @error('image')--}}
{{--                        <span class="text-danger">{{ $message }}</span>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
                    <div class="mb-3">
                        <label for="description" class="form-label">Description:</label>
                        <textarea class="form-control" id="description" name="description" data-bs-theme="light" required>{{ $video->description }}</textarea>
                        @error('description')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background: #8b8b71;">Cancel</button>
                        <button type="submit" class="btn btn-primary" style="background: #ed6662;">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
