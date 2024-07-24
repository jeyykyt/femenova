<x-dashboard.admin-layout>
    <section class="clean-block clean-blog-list dark" style="background: linear-gradient(3deg, #ed6662, rgb(240,129,126) 14%, rgb(249,204,203) 75%, white 96%);">

        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">My Blogs</h2>
            </div>
            <div class="block-content" style="border-style: inherit;border-color: var(--bs-info);color: rgba(33,37,41,0);background: rgba(255,255,255,0);">
                <div class="clean-blog-post">
                    <div class="row">
                        <div class="col">
                            <div class="card" style="margin-bottom: 50px; border-color: var(--bs-info);border-right-color: rgba(237,102,98,0);border-bottom-color: rgba(237,102,98,0);border-left-color: rgba(237,102,98,0);">
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
                                <div class="card-body border-info" style="border-color: var(--bs-link-color);">
                                    <section class="position-relative py-4 py-xl-5">
                                        <div class="container position-relative">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col-lg-1 col-xl-1">
                                                    <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-0" style="margin-top: 0px;width: 60px;height: 60px;background: linear-gradient(black 26%, white);">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person" style="font-size: 33px;">
                                                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm-9 col-xxl-7">
                                                    <h3 class="justify-content-center" style="width: 200px;margin-top: 15px;text-align: left;margin-bottom: 0px;padding-top: 1px;"> Admin </h3>
                                                </div>
                                                <div class="col-md-10 col-lg-12 col-xl-10 col-xxl-9" style="width: 770px;">
                                                    <div>
                                                        <form action="{{ route('blogAdmin.store') }}" class="p-3 p-xl-4" method="post">
                                                            @csrf
                                                            <div class="mb-3">
                                                                <input class="form-control" type="text" id="title" name="title" placeholder="title" data-bs-theme="light">
                                                                @error('title')
                                                                <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <textarea class="form-control" id="content" name="content" rows="6" placeholder="Do you have something to share with us?" style="margin-bottom: 10px;"></textarea>
                                                            @error('content')
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                            <button type="submit" class="btn link-light d-block w-25 btn-info btn-xs">Post</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Display the posts below the form -->
                <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search" style="margin-right: 0px;margin-left: 0px;padding-right: 0px;" method="GET" action="{{ route('blogAdmin.search_myBlogs') }}">
                   @csrf
                    <div class="input-group" style="width: 300px;">
                        <input class="form-control" type="search" name="query" placeholder="Search for...">
                        <button class="btn btn-primary py-0" type="submit" style="background: rgb(237,102,98);"><i class="fas fa-search"></i></button>
                    </div>
                </form>

                <div class="mt-5">
                    @if($blog_admins->isEmpty())
                        <div class="alert alert-info text-center" role="alert">
                            No Admin Blogs
                        </div>
                    @else
                        @foreach($blog_admins as $blog_admin)
                            <div class="card mb-3">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4>{{ $blog_admin->title }}</h4>
                                    <div class="d-flex align-items-center">
                                        <a class="btn btn-sm p-0 me-2" data-bs-toggle="modal"
                                           data-bs-target="#editBlogAdminModal-{{ $blog_admin->id }}"
                                           style="line-height: 2; margin-top:2px">
                                            <i class="far fa-edit"></i>
                                        </a>
                                        <a class="btn btn-sm p-0 me-2" data-bs-toggle="modal"
                                           data-bs-target="#deleteBlogAdminModal-{{ $blog_admin->id }}"
                                           style="line-height: 2; margin-top:2px">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>

                                    </div>

                                    <!-- Edit Modal -->
                                    @include('admin.adminBlog.admin-edit', ['blogAdmin' => $blog_admin])

                                    <!-- Delete Modal -->
                                    @include('admin.adminBlog.admin-delete', ['blogAdmin' => $blog_admin])


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
