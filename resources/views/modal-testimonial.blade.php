<div class="modal fade" id="showTestimonialModal-{{ $testimonial->id }}" tabindex="-1" aria-labelledby="bookModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-flex align-items-center">
                    <img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50" height="50" src="{{ asset('uploads/testimonial/images/'.$testimonial-> image) }}">
                    <div>
                        <h5 class="modal-title" id="editAchievementModalLabel" style="font-family: Montserrat, sans-serif; color: #f13e3e; font-weight: bold;">
                            {{ $testimonial->testimony_title }}
                        </h5>
                        <p class="text-muted mb-0">{{ $testimonial->name }}</p>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-4">
                    <div class="card-body">
                        <p class="testimonial-content bg-body-tertiary border rounded border-0 p-4">
                            {{ $testimonial->content }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
