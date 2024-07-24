<div class="modal fade" id="deleteBlogUserModal-{{ $blog_user->id }}" tabindex="-1" aria-labelledby="editAchievementModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editAchievementModalLabel" style="font-family: Montserrat, sans-serif;color: #f13e3e;--bs-info: #f13e3e;--bs-info-rgb: 241,62,62;font-weight: bold;">Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4> Are you sure you want to delete {{ $blog_user-> title }} ?</h4>
                <form action="{{ route('blogUser.destroy', $blog_user->id )}}" method="POST" >

                    @csrf
                    @method('DELETE')
                    <div class="modal-footer">

                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal" style="background: #8b8b71;">Cancel</button>
                        <button class="btn btn-info" type="submit" style="background: #ed6662;">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
