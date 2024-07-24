<x-dashboard.admin-layout>
    <h2 class="text-info text-center">Admin's Blog</h2>

    <section class="clean-block clean-blog-list dark" style="background: linear-gradient(3deg, #ed6662, rgb(240,129,126) 14%, rgb(249,204,203) 75%, white 96%);padding: 30px;margin-top: 50px">

        <div class="container">
            <div class="block-heading">
            </div>
            <div class="block-content" style="border-style: inherit;border-color: var(--bs-info);color: rgba(33,37,41,0);background: rgba(255,255,255,0);">
                <div class="clean-blog-post">
                    <div class="row">
                        <div class="col">
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

                        </div>

                        <div class="row">

                            <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search" style="margin-right: 0px;margin-left: 0px;padding-right: 0px;" method="GET" action="{{ route('blogAdmin.search_adminDashboard') }}">
                               @csrf
                                <div class="input-group" style="width: 300px;">
                                    <input class="form-control" type="search" name="query" placeholder="Search for...">
                                    <button class="btn btn-primary py-0" type="submit" style="background: rgb(237,102,98);"><i class="fas fa-search"></i></button>
                                </div>
                            </form>

                            <button class="btn btn-primary" type="button" style="background: #ed6662; width: 100px; height: 35px; margin-top: -37px; padding-right: 5px; margin-right: 0px; padding-left: 5px; margin-left: 987px; border-color: #ed6662;" data-bs-toggle="modal" data-bs-target="#storeBlogAdminModal">
                                Add&nbsp;<i class="far fa-plus-square" style="font-size: 17px;"></i>
                            </button>
                        </div>

                        <x-blogs.admin-store/>


                    </div>
                </div>
                <!-- Display the posts below the form -->
                <div class="mt-5">
                    @if($blog_admins->isEmpty())
                        <div class="alert alert-info text-center" role="alert">
                           No Admin Blogs
                        </div>
                    @else
                    @foreach($blog_admins as $blog_admin)
                        <div class="card mb-3">
                            <div class="card-header">
                                <h4>{{ $blog_admin->title }}</h4>
                            </div>
                            <div class="card-body">
                                <p>{{ $blog_admin->content }}</p>
                                <small>Posted by {{  $blog_admin->admin->name }} on {{ $blog_admin->created_at->diffForHumans() }}</small>
                            </div>
                        </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
</x-dashboard.admin-layout>
