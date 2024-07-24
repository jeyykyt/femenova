<div class="modal fade" id="editBlogAdminModal-{{ $blog_admin->id }}" tabindex="-1" aria-labelledby="editAchievementModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editAchievementModalLabel" style="font-family: Montserrat, sans-serif;color: #f13e3e;--bs-info: #f13e3e;--bs-info-rgb: 241,62,62;font-weight: bold;"> You want to make changes of {{ $blog_admin-> title }} ? </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="{{ route('blogAdmin.update', $blog_admin) }}" method="POST" enctype="multipart/form-data" style="border-color: #ed6662;">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label" for="title" style="font-family: Montserrat, sans-serif;">Title:</label>
                        <input class="form-control" type="text" id="title" name="title" value="{{ $blog_admin->title }}" data-bs-theme="light">
                        @error('title')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="content">Content</label>
                        <textarea class="form-control" id="content" name="content" data-bs-theme="light" required>{{ $blog_admin->content }} </textarea>
                        @error('content')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal" style="background: #8b8b71;">Cancel</button>
                        <button class="btn btn-secondary" type="submit" style="background: #ed6662;">Update</button>
                    </div>
                </form>


            </div>
        </div>
    </div>
</div>
