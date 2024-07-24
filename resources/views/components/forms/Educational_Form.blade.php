<div class="modal fade" id="educationalContentModal" tabindex="-1" aria-labelledby="educationalContentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="educationalContentModalLabel" style="font-family: Montserrat, sans-serif;color: #f13e3e;--bs-info: #f13e3e;--bs-info-rgb: 241,62,62;font-weight: bold;">Educational Contents Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('book.store') }}" style="border-color: #ed6662;overflow: visible;" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="authors_name">Author's Name:</label>
                        <input class="form-control" type="text" id="authors_name" name="authors_name" data-bs-theme="light" required>
                        @error('authors_name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="book_title">Title of the Book:</label>
                        <input class="form-control" type="text" id="book_title" name="book_title" data-bs-theme="light" required>
                        @error('book_title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="date_published">Published Date:</label>
                        <input class="form-control" type="date" id="date_published" name="date_published">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="book_link">Link of the Book:</label>
                        <input class="form-control" type="url" id="book_link" name="book_link" data-bs-theme="light">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="image">Picture of the Book:</label>
                        <input class="form-control" type="file" id="image" name="image" style="margin-top: 20px;margin-bottom: 20px;" required>
                        @error('image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="description">Description:</label>
                        <textarea class="form-control" id="description" name="description" data-bs-theme="light" required></textarea>
                        @error('description')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal" style="background: #8b8b71;">Cancel</button>
                        <button class="btn btn-primary" type="submit" style="background: #ed6662;">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
