<div class="modal fade" id="showContactModal-{{ $contact->id }}" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contactModalLabel" style="font-family: Montserrat, sans-serif; color: #f13e3e; font-weight: bold;">
                    Contact Info
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-4">
                                <h1 style="font-size: 15px;color:slategray">Name:</h1>
                                <h1 style="font-size: 17px;"><span style="color: rgb(0, 0, 0);">{{ $contact->name }}</span></h1>

                                <h1 style="font-size: 15px;color:slategray">Subject:</h1>
                                <h1 style="font-size: 17px;"><span style="color: rgb(0, 0, 0);">{{ $contact->subject }}</span></h1>

                                <h1 style="font-size: 15px;color:slategray">Email:</h1>
                                <h1 style="font-size: 17px;"><span style="color: rgb(0, 0, 0);">{{ $contact->email }}</span></h1>

                                <h1 style="font-size: 15px;color:slategray;">File:</h1>
                                <div class="d-flex align-items-center">
                                    <h1 style="font-size: 17px; margin-bottom: 0;">
                                        <span style="color: rgb(0, 0, 0); margin-right: 10px;">{{ $contact->file }}</span>
                                    </h1>
                                    @if($contact->file)
                                        <a href="{{ route('contacts.download', $contact->file) }}" class="btn btn-primary" style="background: #5792ec; border-color: #5792ec;">
                                            <i class="fas fa-download"></i> Download
                                        </a>
                                    @endif
                                </div>
                                <h1 style="font-size: 15px;color:slategray;">Message:</h1>
                                <h1 style="font-size: 17px;"><span style="color: rgb(0, 0, 0);">  {{ $contact->content }}</span></h1>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
