<div class="modal fade" id="showTestimonialModal-{{ $testimonial->id }}" tabindex="-1" aria-labelledby="testimonialModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="testimonialModalLabel" style="font-family: Montserrat, sans-serif; color: #f13e3e; font-weight: bold;">
                    {{ $testimonial->testimony_title }}
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-4">
                    <div class="col-lg-5 d-flex justify-content-center align-items-center">
                        <img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="200" height="200" src="{{ asset('uploads/testimonial/images/'.$testimonial-> image) }}" style="margin-right: 38px;">
                    </div>
                    <div class="col-lg-7 d-flex flex-column justify-content-center">
                        <div class="p-3">
                            <h6 class="fw-bold text-secondary mb-2">Testimony of:</h6>
                            <p class="text-dark mb-3">{{ $testimonial->name }}</p>
                        </div>

                    </div>
                    <h6 class="fw-bold text-secondary mb-2">Testimony Message:</h6>
                    <p class="text-dark" style="text-align: justify">{{ $testimonial->content }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
