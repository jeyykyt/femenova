<x-dashboard.admin-layout>
    <div class="card shadow">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <p class="text-primary m-0 fw-bold" style="padding-right: 0px;margin-bottom: 16px;margin-top: 16px;">
                <span style="color: rgb(237, 102, 98);">EDUCATIONAL CONTENT&nbsp;</span>
            </p>
            <button class="btn btn-primary" type="button" style="background: #ed6662; width: 80px; height: 35px; border-color: #ed6662;" data-bs-toggle="modal" data-bs-target="#educationalContentModal">
                Add&nbsp;<i class="far fa-plus-square" style="font-size: 17px;"></i>
            </button>
        </div>

        <x-forms.Educational_Form/>

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
            <div class="row">
                <div class="col-md-6 text-nowrap">
                    <form method="GET" action="{{ route('admin.dashboard.books') }}">
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
                    <form class="d-inline-block mw-100" method="GET" action="{{ route('book.search') }}">
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
                        <th>Author's name</th>
                        <th>Title of the Book</th>
                        <th>Published Date</th>
                        <th>Link</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($books->isEmpty())
                        <tr>
                            <td colspan="5" class="alert alert-info text-center" role="alert" style="background-color: rgba(253,7,7,0.38);">
                                No content
                            </td>
                        </tr>
                    @else
                        @foreach($books as $book)
                            <tr>
                                <td>{{ $book->authors_name }}</td>
                                <td>{{ $book->book_title }}</td>
                                <td>{{ $book->date_published ? \Carbon\Carbon::parse($book->date_published)->format('d/m/Y') : 'Unknown' }}</td>
                                <td><a style="font-size: 14px;" href="{{ $book->book_link }}" target="_blank">link here</a></td>
                                <td>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#showBookModal-{{ $book->id }}" style="background: #ed6662;margin-left: -5px;margin-bottom: -6px;margin-top: -5px;margin-right: 2px;width: 40px;height: 35px;min-width: auto;border-color: #ed6662;"><i class="far fa-eye"></i></button>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#editBookModal-{{ $book->id }}" style="margin-left: 8px;background: #ed6662;width: 40px;height: 35px;border-color: #ed6662;"><i class="far fa-edit"></i></button>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#deleteBookModal-{{ $book->id }}" style="margin-left: 9px;background: #ed6662;width: 40px;height: 35px;border-color: #ed6662;"><i class="far fa-times-circle"></i></button>

                                    <!-- Show Modal -->
                                    @include('admin.show-forms.book', ['book' => $book])

                                    <!-- Edit Modal -->
                                    @include('admin.edit-forms.book', ['book' => $book])

                                    <!-- Delete Modal -->
                                    @include('admin.delete-forms.book', ['book' => $book])
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
                    {{ $books->appends(['per_page' => request('per_page'), 'query' => request('query')])->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
</x-dashboard.admin-layout>
