<div class="modal fade" id="storeBlogAdminModal" tabindex="-1" aria-labelledby="editAchievementModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editAchievementModalLabel" style="font-family: Montserrat, sans-serif;color: #f13e3e;--bs-info: #f13e3e;--bs-info-rgb: 241,62,62;font-weight: bold;"> Share your thoughts </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form class="p-3 p-xl-4" method="post" action="{{ route('blogAdmin.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" required>
                    </div>
                    <div class="mb-3">
                        <label for="content">Content</label>
                        <textarea class="form-control" id="content" name="content" rows="6" placeholder="Do you have something to share with us?" style="margin-bottom: 10px;" required></textarea>
                    </div>

                    <button class="btn link-light d-block w-25 btn-info btn-xs" type="submit">Post</button>
                    <div></div>
                </form>



            </div>
        </div>
    </div>
</div>
