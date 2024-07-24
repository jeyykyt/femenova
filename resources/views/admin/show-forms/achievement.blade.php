<div class="modal fade" id="showAchievementModal-{{ $achievement->id }}" tabindex="-1" aria-labelledby="bookModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editAchievementModalLabel" style="font-family: Montserrat, sans-serif; color: #f13e3e; font-weight: bold;">
                    {{ $achievement->project_name }}
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-4">
                    <div class="col-lg-5 d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="{{ asset('uploads/achievement/images/'.$achievement->image) }}" alt="{{ $achievement->project_name }}">
                    </div>
                    <div class="col-lg-7 d-flex flex-column justify-content-center">
                        <div class="p-3">
                            <h6 class="fw-bold text-secondary mb-2">Place:</h6>
                            <p class="text-dark mb-3">{{ $achievement->place }}</p>

                            <h6 class="fw-bold text-secondary mb-2">Date:</h6>
                            <p class="text-dark mb-3">{{ $achievement->date }}</p>

                            <h6 class="fw-bold text-secondary mb-2">Details:</h6>
                            <p class="text-dark" style="text-align: justify">{{ $achievement->details }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
