<?php

namespace App\Http\Controllers;

use App\Models\BlogAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog_admins = BlogAdmin::orderBy('updated_at', 'desc')->get();

        return view('admin.dashboard-form', compact('blog_admins'));

//        $admin = Auth::guard('admin')->user();
//        $blog_admins = $admin->admin_blogs()->orderBy('created_at', 'desc')->get();
//
//        return view('admin.dashboard-form', compact('blog_admins'));
    }

    public function myAdminBlog()
    {
        $admin = Auth::guard('admin')->user();
        $blog_admins = $admin->admin_blogs()->orderBy('updated_at', 'desc')->get();

        return view('admin.dashboard.dash-myBlog', compact('blog_admins'));
    }

    public function user_view()
    {
        $blog_admins = BlogAdmin::orderBy('updated_at', 'desc')->get();

        return view('blog-admin', compact('blog_admins'));
    }

    public function search_view(Request $request)
    {
        $query = $request->input('query');
        $blog_admins = BlogAdmin::where('title', 'LIKE', "%$query%")
            ->orWhere('content', 'LIKE', "%$query%")
            ->orWhere('updated_at', 'LIKE', "%$query%")
            ->get();

        return view('blog-admin', compact('blog_admins'));
    }

    public function search_adminDashboard(Request $request)
    {
        $query = $request->input('query');

        $blog_admins = BlogAdmin::with('admin')
            ->where(function($q) use ($query) {
                $q->where('title', 'LIKE', "%$query%")
                    ->orWhere('content', 'LIKE', "%$query%")
                    ->orWhere('updated_at', 'LIKE', "%$query%")
                    ->orWhereHas('admin', function($q) use ($query) {
                        $q->where('name', 'LIKE', "%$query%");
                    });
            })
            ->get();

        return view('admin.dashboard-form', compact('blog_admins'));
    }


    public function search_myBlogs(Request $request)
    {
        $query = $request->input('query');
        $adminId = Auth::id(); // Get the ID of the currently logged-in admin

        $blog_admins = BlogAdmin::with('admin')
            ->where('admin_id', $adminId) // Ensure posts are from the logged-in admin
            ->where(function($q) use ($query) {
                $q->where('title', 'LIKE', "%$query%")
                    ->orWhere('content', 'LIKE', "%$query%")
                    ->orWhere('updated_at', 'LIKE', "%$query%")
                    ->orWhereHas('admin', function($q) use ($query) {
                        $q->where('name', 'LIKE', "%$query%");
                    });
            }) ->get();

        return view('admin.dashboard.dash-myBlog', compact('blog_admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'title' => ['required', 'max:255'],
            'content' => ['required']
        ]);

        // Assuming you have a relationship defined in your Admin model
        $admin = Auth::guard('admin')->user();
        $admin->admin_blogs()->create($fields);

        return redirect()->back()->with('success', 'Blog has been created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(BlogAdmin $blogAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlogAdmin $blogAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BlogAdmin $blogAdmin)
    {
        $fields = $request->validate([
            'title' => ['required', 'max:255'],
            'content' => ['required']
        ]);

        // Update the blog post
        $blogAdmin->update($fields);

        return redirect()->back()->with('success', 'Blog has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogAdmin $blogAdmin)
    {
        $blogAdmin->delete();
        return redirect()->back()->with('delete', 'Blog deleted successfully.');
    }
}
