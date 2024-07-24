<div class="modal fade" id="editAchievementModal-{{ $achievement->id }}" tabindex="-1" aria-labelledby="achievementModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editAchievementModalLabel" style="font-family: Montserrat, sans-serif; color: #f13e3e; --bs-info: #f13e3e; --bs-info-rgb: 241,62,62; font-weight: bold;">Edit FemeNova Health Achievement Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('achievement.update', $achievement) }}" method="POST" enctype="multipart/form-data" style="border-color: #ed6662;">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label" for="project_name" style="font-family: Montserrat, sans-serif;">Project Name:</label>
                        <input class="form-control" type="text" id="project_name" name="project_name" value="{{ $achievement->project_name }}" data-bs-theme="light">
                        @error('project_name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="place">Place:</label>
                        <input class="form-control" type="text" id="place" name="place" value="{{ $achievement->place }}" data-bs-theme="light">
                        @error('place')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="date" style="margin-top: 8px;">Date:</label>
                        <input class="form-control" type="text" id="date" name="date" value="{{ $achievement->date }}" data-bs-theme="light">
                        @error('date')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="image">Picture of the Project:</label>

                        <div class="mb-3">
                            <img class="rounded img-fluid fixed-size-img" src="{{ asset('uploads/achievement/images/'.$achievement->image) }}">
                        </div>

                        <input class="form-control" type="file"  id="image" name="image" value="{{ asset('uploads/achievement/images/'.$achievement->image) }}" style="margin-top: 20px; margin-bottom: 20px;">
                        @error('image')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="details">Details:</label>
                        <textarea class="form-control" id="details" name="details" data-bs-theme="light" required>{{ $achievement->details }} </textarea>
                        @error('details')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal" style="background: #8b8b71;">Cancel</button>
                        <button class="btn btn-primary" type="submit" style="background: #ed6662;">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

