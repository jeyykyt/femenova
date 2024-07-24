<div class="modal fade" id="showBookModal-{{ $book->id }}" tabindex="-1" aria-labelledby="bookModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editAchievementModalLabel" style="font-family: Montserrat, sans-serif; color: #f13e3e; --bs-info: #f13e3e; --bs-info-rgb: 241,62,62; font-weight: bold;">
                    {{ $book -> book_title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-4">
                    <div class="col-lg-5 d-flex justify-content-center align-items-center">
                        <img class="img-fluid" src="{{ asset('uploads/book/images/'.$book->image) }}" alt="{{ $book->book_title }}">
                    </div>
                    <div class="col-lg-7 d-flex flex-column justify-content-center">
                        <div class="p-3">
                            <h6 class="fw-bold text-secondary mb-2">Author's Name:</h6>
                            <p class="text-dark mb-3">{{ $book->authors_name }}</p>

                            <h6 class="fw-bold text-secondary mb-2">Date Published:</h6>
                            <p class="text-dark mb-3">{{ $book->date_published }}</p>

                            <h6 class="fw-bold text-secondary mb-2">Book Link:</h6>
                            <p class="text-dark" style="text-align: justify">{{ $book->book_link }}</p>

                            <h6 class="fw-bold text-secondary mb-2">Description:</h6>
                            <p class="text-dark" style="text-align: justify">{{ $book->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

