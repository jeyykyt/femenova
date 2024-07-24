<?php

namespace App\Http\Controllers;

use App\Models\BlogUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $user = Auth::user();
//        $blog_users = $user->user_blogs()->orderBy('created_at', 'desc')->get();
//
//        return view('blog-user', compact('blog_users'));

        $blog_users = BlogUser::orderBy('updated_at', 'desc')->get();

        return view ('blog-user', compact('blog_users'));
    }

    public function search_view(Request $request)
    {
        $query = $request->input('query');

        $blog_users = BlogUser::query();

        // Check if the query is for anonymous posts
        if (strtolower($query) === 'anonymous') {
            $blog_users->where('anonymous', 1);
        } else {
            // Join with the users table and search within the user's name or other fields
            $blog_users->where(function($q) use ($query) {
                $q->whereHas('user', function($q) use ($query) {
                    $q->where('name', 'LIKE', "%$query%");
                })->where('anonymous', 0) // Exclude anonymous posts when searching by user's name
                ->orWhere('title', 'LIKE', "%$query%")
                    ->orWhere('content', 'LIKE', "%$query%")
                    ->orWhere('created_at', 'LIKE', "%$query%");
            });
        }

        $blog_users = $blog_users->get();

        return view('blog-user', compact('blog_users'));
    }


    public function myBlogs_search_view(Request $request)
    {
        $query = $request->input('query');

        $blog_users = BlogUser::query();


        if (strtolower($query) === 'anonymous') {
            $blog_users->where('anonymous', 1);
        } else {

            $blog_users->where(function($q) use ($query) {
                $q->whereHas('user', function($q) use ($query) {
                    $q->where('name', 'LIKE', "%$query%");
                })->where('anonymous', 0)
                ->orWhere('title', 'LIKE', "%$query%")
                    ->orWhere('content', 'LIKE', "%$query%")
                    ->orWhere('created_at', 'LIKE', "%$query%");
            });
        }

        $blog_users = $blog_users->get();

        return view('userBlog.myblogs', compact('blog_users'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'title' => ['required', 'max:255'],
            'content' => ['required'],
        ]);

        // Determine if the post should be anonymous
        $fields['anonymous'] = $request->has('anonymous') ? 1 : 0;

        // Assuming you have a relationship defined in your Admin model
        $user = Auth::user();
        $user->user_blogs()->create($fields);

        return redirect()->back()->with('success', 'Blog has been created!');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $user = Auth::user();
        $blog_users = BlogUser::where('user_id', $user->id)->orderBy('updated_at', 'desc')->get();

        return view('userBlog.myblogs', compact('blog_users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlogUser $blogUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BlogUser $blogUser)
    {
        // Validate the request
        $fields = $request->validate([
            'title' => ['required', 'max:255'],
            'content' => ['required'],
        ]);

        // Determine if the post should be anonymous
        $fields['anonymous'] = $request->has('anonymous') ? 1 : 0;

        // Update the blog post
        $blogUser->update($fields);

        return redirect()->back()->with('success', 'Blog has been updated!');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogUser $blogUser)
    {
        // Check if the blog post exists
        $blogUser->delete();
            return redirect()->back()->with('delete', 'Blog deleted successfully.');


    }

}
