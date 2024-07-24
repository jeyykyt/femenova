<x-dashboard.admin-layout>
    <div class="card shadow">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <p class="text-primary m-0 fw-bold" style="padding-right: 0px;margin-bottom: 16px;margin-top: 16px;">
                <span style="color: rgb(237, 102, 98);">VIDEOS&nbsp;</span>
            </p>
            <button class="btn btn-primary" type="button" style="background: #ed6662; width: 80px; height: 35px; border-color: #ed6662;" data-bs-toggle="modal" data-bs-target="#videoModal">
                Add&nbsp;<i class="far fa-plus-square" style="font-size: 17px;"></i>
            </button>
        </div>

        <x-forms.Video_Form/>

        @csrf
        @if(session()->has('success'))
            <div class="alert alert-success mb-3" style="padding-top: 4px;padding-bottom: 4px;">
                {{ session()->get('success') }}
            </div>
        @endif

        @if(session()->has('delete'))
            <div class="alert alert-danger mb-3" style="padding-top: 4px;padding-bottom: 4px;">
                {{ session()->get('delete') }}
            </div>
        @endif

        <div class="card-body" style="background: linear-gradient(black, white), var(--bs-btn-bg);">
            <div class="row mb-2">
                <div class="col-md-6 text-nowrap">
                    <form method="GET" action="{{ route('admin.dashboard.videos') }}">
                        <label class="form-label">Show&nbsp;
                            <select name="per_page" onchange="this.form.submit()" class="d-inline-block form-select form-select-sm">
                                <option value="3" {{ request('per_page') == 3 ? 'selected' : '' }}>3</option>
                                <option value="5" {{ request('per_page') == 5 ? 'selected' : '' }}>5</option>
                                <option value="10" {{ request('per_page', 10) == 10 ? 'selected' : '' }}>10</option>
                                <option value="25" {{ request('per_page') == 25 ? 'selected' : '' }}>25</option>
                                <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50</option>
                                <option value="100" {{ request('per_page') == 100 ? 'selected' : '' }}>100</option>
                            </select>&nbsp;
                        </label>
                    </form>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <form class="d-inline-block mw-100" method="GET" action="{{ route('video.search') }}">
                        @csrf
                        <div class="input-group">
                            <input name="query" class="bg-light form-control border-0 small" type="text" placeholder="Search for ..." value="{{ request('query') }}">
                            <input type="hidden" name="per_page" value="{{ request('per_page', 10) }}">
                            <button class="btn btn-primary py-0" type="submit" style="background: #ed6662;border-color: #ed6662;">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="dataTable">
                    <thead>
                    <tr>
                        <th>Speaker's Name</th>
                        <th>Title of the Video</th>
                        <th>Link of the Video</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($videos->isEmpty())
                        <tr>
                            <td colspan="4" class="alert alert-info text-center" role="alert" style="background-color: rgba(253,7,7,0.38);">
                                No content
                            </td>
                        </tr>
                    @else
                        @foreach($videos as $video)
                            <tr>
                                <td>{{ $video->speakers_name }}</td>
                                <td>{{ $video->video_title }}</td>
                                <td><a style="font-size: 14px;" href="{{ $video->video_link }}" target="_blank">link here</a></td>
                                <td>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#showVideoModal-{{ $video->id }}" style="background: #ed6662;margin-left: -5px;margin-bottom: -6px;margin-top: -5px;margin-right: 2px;width: 40px;height: 35px;min-width: auto;border-color: #ed6662;">
                                        <i class="far fa-eye"></i>
                                    </button>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#editVideoModal-{{ $video->id }}" style="margin-left: 8px;background: #ed6662;width: 40px;height: 35px;border-color: #ed6662;">
                                        <i class="far fa-edit"></i>
                                    </button>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#deleteVideoModal-{{ $video->id }}" style="margin-left: 9px;background: #ed6662;width: 40px;height: 35px;border-color: #ed6662;">
                                        <i class="far fa-times-circle"></i>
                                    </button>

                                    <!-- Show Modal -->
                                    @include('admin.show-forms.video', ['video' => $video])

                                    <!-- Edit Modal -->
                                    @include('admin.edit-forms.video', ['video' => $video])

                                    <!-- Delete Modal -->
                                    @include('admin.delete-forms.video', ['video' => $video])
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                    <tfoot>
                    <tr></tr>
                    </tfoot>
                </table>
            </div>

            <div class="row">
                <div class="pagination-custom">
                    {{ $videos->appends(['per_page' => request('per_page'), 'query' => request('query')])->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
</x-dashboard.admin-layout>
