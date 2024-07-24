<div class="modal fade" id="deleteContactModal-{{ $contact->id }}" tabindex="-1" aria-labelledby="editBookModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editBookModalLabel" style="font-family: Montserrat, sans-serif;color: #f13e3e;--bs-info: #f13e3e;--bs-info-rgb: 241,62,62;font-weight: bold;">Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4> Are you sure you want to delete {{ $contact-> subject }} ?</h4>
                <form action="{{ route('contact.destroy', $contact->id )}}" method="POST" >

                    @csrf
                    @method('DELETE')
                    <div class="modal-footer">

                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal" style="background: #8b8b71;">Cancel</button>
                        <button class="btn btn-primary" type="submit" style="background: #ed6662;">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
