<div class="modal fade" id="showBookModal-{{ $book->id }}" tabindex="-1" aria-labelledby="bookModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editAchievementModalLabel" style="font-family: Montserrat, sans-serif; color: #f13e3e; --bs-info: #f13e3e; --bs-info-rgb: 241,62,62; font-weight: bold;">
                    {{ $book -> book_title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-5 col-xxl-5 offset-xxl-0 d-none d-lg-flex" style="padding-top: 95px;padding-right: 0px;margin-right: 31px;padding-left: 14px;margin-left: 0px;padding-bottom: 145px;margin-top: -18px;"><img width="255" height="255" style="margin-bottom: -38px;margin-right: -1px;padding-right: 8px;margin-left: 24px;padding-top: 0px;margin-top: -55px;" src="{{ asset('uploads/book/images/'.$book->image) }}"></div>
                            <div class="col-lg-7 col-xxl-6" style="margin-left: -37px;">
                                <div class="p-5" style="margin-top: -20px;">
                                    <header></header>
                                    <h1 style="font-size: 17px;margin-left: -30px;">Author's Name:</h1>
                                    <h1 style="font-size: 20PX;"><span style="color: rgb(0, 0, 0);">{{ $book -> authors_name }}</span></h1>
                                    <h1 style="font-size: 17px;margin-left: -30px;">Published Date:</h1>
                                    <h1 style="font-size: 20PX;"><span style="color: rgb(0, 0, 0);">{{ $book -> date_published }}</span></h1>
                                    <h1 style="font-size: 17px;margin-left: -30px;">Link of the Book:</h1>
                                    <a href="{{ $book->book_link }}" target="_blank">{{ $book->book_link }}</a>
                                </div>
                            </div>
                            <div class="col" style="margin-top: -97px;padding-bottom: 26px;margin-left: 35px;padding-top: 1px;margin-bottom: 12px;">
                                <h1 style="padding-right: 0px;margin-right: 504px;font-size: 17px;">Description:</h1>
                                <h1 style="padding-right: 0px;margin-right: 169px;font-size: 20px;margin-left: 35px;padding-top: 0px;margin-top: -2px;"><span style="color: rgb(0, 0, 0);">{{ $book -> description }}</span></h1>
                                <h1></h1>
                                <h1 style="padding-right: 0px;margin-right: 504px;"></h1>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

