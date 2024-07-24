<div class="modal fade" id="editTestimonialModal-{{ $testimonial->id }}" tabindex="-1" aria-labelledby="testimonialModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editTestimonialModalLabel" style="font-family: Montserrat, sans-serif;color: #f13e3e;--bs-info: #f13e3e;--bs-info-rgb: 241,62,62;font-weight: bold;"> Edit Testimonial Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('testimonial.update', $testimonial) }}" method="POST" enctype="multipart/form-data" style="border-color: #ed6662;overflow: visible;">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label" for="name">Full Name:</label>
                        <input class="form-control" type="text" id="name" name="name" value="{{ $testimonial->name }}" data-bs-theme="light">
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="testimony_title">Title of the Testimony:</label>
                        <input class="form-control" type="text" id="testimony_title" name="testimony_title" value="{{ $testimonial->testimony_title }}" data-bs-theme="light">
                        @error('testimony_title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="image">Picture:</label>
                        <div class="mb-3">
                            <img class="rounded img-fluid fixed-size-img" src="{{ asset('uploads/testimonial/images/'.$testimonial->image) }}">
                        </div>


                        <input class="form-control" type="file" id="image" name="image" value="{{ asset('uploads/book/images/'.$testimonial->image) }}" style="margin-top: 20px;margin-bottom: 20px;">
                        @error('image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="content">Message:</label>
                        <textarea class="form-control" id="content" name="content" data-bs-theme="light" required>{{ $testimonial->content }}</textarea>
                        @error('content')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal" style="background: #8b8b71;">Cancel</button>
                        <button class="btn btn-primary" type="submit" style="background: #ed6662;">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
