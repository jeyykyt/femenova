<x-dashboard.admin-layout>
    <div class="card shadow">
        <div class="card-header py-3" style="margin-left: -3px;">
            <p class="text-primary m-0 fw-bold" style="padding-right: 0px;width: 250px;margin-bottom: 16px;margin-top: 16px;padding-top: 0px;padding-bottom: 0px;">
                <span style="color: rgb(237, 102, 98);">CONTACTS</span>
            </p>
        </div>
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
                    <form method="GET" action="{{ route('contact.index') }}">
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
                    <form class="d-inline-block mw-100" method="GET" action="{{ route('contact.search') }}">
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
                        <th>Name</th>
                        <th>Subject</th>
                        <th>Email</th>
                        <th>File</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($contacts->isEmpty())
                        <tr>
                            <td colspan="5" class="alert alert-info text-center" role="alert" style="background-color: rgba(253,7,7,0.38);">
                                No content
                            </td>
                        </tr>

                    @else
                    @foreach($contacts as $contact)
                        <tr>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->subject }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>
                                @if($contact->file)
                                    <a href="{{ route('contacts.download', $contact->file) }}" class="btn btn-primary" style="background: #5792ec; border-color: #5792ec;">
                                        <i class="fas fa-download"></i> Download
                                    </a>
                                @endif
                            </td>
                            <td>
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#showContactModal-{{ $contact->id }}" style="background: #ed6662; border-color: #ed6662;">
                                    <i class="far fa-eye"></i>
                                </button>
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#deleteContactModal-{{ $contact->id }}" style="background: #ed6662; border-color: #ed6662;">
                                    <i class="far fa-times-circle"></i>
                                </button>

                                <!-- Show Modal -->
                                @include('admin.show-forms.contact', ['contact' => $contact])

                                <!-- Delete Modal -->
                                @include('admin.delete-forms.contact', ['contact' => $contact])
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
                    {{ $contacts->appends(['per_page' => request('per_page'), 'query' => request('query')])->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
</x-dashboard.admin-layout>
