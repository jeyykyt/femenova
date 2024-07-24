<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $achievements = Achievement::all();
        return view ('achievements', compact('achievements'));
    }

    public function dashboardAchievements( Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $achievements = Achievement::orderBy('updated_at','desc')->paginate($perPage);
        return view('admin.dashboard.dash-achievements', compact('achievements'));

    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $perPage = $request->input('per_page', 10);

        $achievements = Achievement::where('project_name', 'LIKE', "%$query%")
            ->orWhere('place', 'LIKE', "%$query%")
            ->orWhere('date', 'LIKE', "%$query%")
            ->orderBy('updated_at', 'desc')
            ->paginate($perPage);

        return view('admin.dashboard.dash-achievements', compact('achievements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.forms.Achievement_Form');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $data = $request->validate([
            'project_name' => 'required|max:300|string',
            'place' => 'required|max:300|string',
            'date' => 'nullable|max:300|string',
            'image' => 'required|mimes:png,jpeg,jpg',
            'details' => 'required|string'
        ]);

        if($request->has('image'))
        {
            $imageName = time() . '_' . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/achievement/images/'),$imageName);
            $data['image'] =$imageName;
        }

        Achievement::create($data);

        return back()->with('success','Achievement Content has been created!');
    }



    /**
     * Display the specified resource.
     */
    public function show(Achievement $achievement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Achievement $achievement)
    {
        return view('admin.edit-forms.achievement', compact('achievement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Achievement $achievement)
    {
        $data = $request->validate([
            'project_name' => 'required|max:300|string',
            'place' => 'required|max:300|string',
            'date' => 'required|max:300|string',
            'image' => 'nullable|mimes:png,jpeg,jpg',
            'details' => 'required|string'
        ]);

        if($request->has('image'))
        {
            $imageName = time() . '_' . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/achievement/images/'), $imageName);
            $data['image'] = $imageName;
        }

        $achievement->update($data);

        return back()->with('success', 'Achievement Content has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Achievement $achievement)
    {
        // Delete the achievement from the database
        $achievement->delete();

        return redirect()->back()->with('delete', 'Achievement deleted successfully.');
    }
}
