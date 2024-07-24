<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('testimonials', compact('testimonials'));
    }

    public function dashboardTestimonials( Request $request)
    {

        $perPage = $request->input('per_page', 10);
        $testimonials = Testimonial::orderBy('updated_at','desc')->paginate($perPage);
        return view('admin.dashboard.dash-testimonials', compact('testimonials'));

    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $perPage = $request->input('per_page', 10);

        $testimonials = Testimonial::where('name', 'LIKE', "%$query%")
            ->orWhere('testimony_title', 'LIKE', "%$query%")
            ->orderBy('updated_at', 'desc')
            ->paginate($perPage);

        return view('admin.dashboard.dash-testimonials', compact('testimonials'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.forms.Testimonial_Form');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {

            $data = $request->validate([
                'name' => 'required|max:300|string',
                'testimony_title' => 'required|max:300|string',
                'image' => 'nullable|mimes:png,jpeg,jpg',
                'content' => 'required|string'
            ]);

            if($request->has('image'))
            {
                $imageName = time() . '_' . $request->image->getClientOriginalName();
                $request->image->move(public_path('uploads/testimonial/images/'),$imageName);
                $data['image'] =$imageName;
            }

            Testimonial::create($data);

            return back()->with('success','A testimony has been created!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        {
            return view('admin.edit-forms.testimonial', compact('testimonial'));
        }    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $data = $request->validate([
            'name' => 'required|max:300|string',
            'testimony_title' => 'required|max:300|string',
            'image' => 'nullable|mimes:png,jpeg,jpg',
            'content' => 'required|string'
        ]);

        if($request->has('image'))
        {
            $imageName = time() . '_' . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/testimonial/images/'), $imageName);
            $data['image'] = $imageName;
        }

        $testimonial->update($data);

        return back()->with('success', 'A testimony has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        // Delete the Testimony from the database
        $testimonial->delete();

        return redirect()->back()->with('delete', 'A testimony deleted successfully.');
    }
}
