<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        in the bookcontroller
//        $videos = Video::paginate(4);
//        return view('educationalcontents', compact('videos'));
    }

    public function dashboardVideos(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $videos = Video::orderBy('updated_at','desc')->paginate($perPage);
        return view('admin.dashboard.dash-videos', compact('videos'));

    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $perPage = $request->input('per_page', 10);

        $videos = Video::where('speakers_name', 'LIKE', "%$query%")
            ->orWhere('video_title', 'LIKE', "%$query%")
            ->orderBy('updated_at', 'desc')
            ->paginate($perPage);

        return view('admin.dashboard.dash-videos', compact('videos'));
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
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $data = $request->validate([
            'speakers_name' => 'required|max:300|string',
            'video_title' => 'required|max:300|string',
            'video_link' => 'nullable|max:300|string',
            'description' => 'required|string',
        ]);

        // Transform the video link to the embed format if it is a YouTube link
        if (!empty($data['video_link'])) {
            $data['video_link'] = $this->formatYouTubeLink($data['video_link']);
        }

//    if($request->has('image'))
//    {
//        $imageName = time() . '_' . $request->image->getClientOriginalName();
//        $request->image->move(public_path('uploads/video/images/'), $imageName);
//        $data['image'] = $imageName;
//    }

        Video::create($data);

        return back()->with('success', 'Video Content has been created!');
    }

    private function formatYouTubeLink($url)
    {
        // Parse the URL to get the video ID
        $parsedUrl = parse_url($url);
        if (isset($parsedUrl['host']) && strpos($parsedUrl['host'], 'youtube.com') !== false) {
            parse_str($parsedUrl['query'], $queryParams);
            if (isset($queryParams['v'])) {
                return 'https://www.youtube.com/embed/' . $queryParams['v'];
            }
        } elseif (isset($parsedUrl['host']) && strpos($parsedUrl['host'], 'youtu.be') !== false) {
            return 'https://www.youtube.com/embed' . trim($parsedUrl['path'], '/');
        }

        // If the link is not a YouTube link, return the original URL
        return $url;
    }

    /**
     * Display the specified resource.
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        return view('admin.edit-forms.video', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Video $video)
    {
        $data = $request->validate([
            'speakers_name' => 'required|max:300|string',
            'video_title' => 'required|max:300|string',
            'video_link' => 'nullable|max:300|string',
//            'image' => 'nullable|mimes:png,jpeg,jpg',
            'description' => 'required|string'
        ]);

//        if($request->has('image'))
//        {
//            $imageName = time() . '_' . $request->image->getClientOriginalName();
//            $request->image->move(public_path('uploads/video/images/'), $imageName);
//            $data['image'] = $imageName;
//        }
        if (!empty($data['video_link'])) {
            $data['video_link'] = $this->formatYouTubeLink($data['video_link']);
        }

        $video->update($data);

        return back()->with('success','Video Content has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        // Delete the video from the database
        $video->delete();

        return redirect()->back()->with('delete', 'Video deleted successfully.');
    }
}
