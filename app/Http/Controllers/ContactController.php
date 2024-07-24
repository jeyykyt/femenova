<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $perPage = $request->input('per_page', 10); // Default to 10 if not specified
        $contacts = Contact::paginate($perPage);
        return view('admin.dashboard.dash-contacts', compact('contacts'));
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $perPage = $request->input('per_page', 10);

        $contacts = Contact::where('name', 'LIKE', "%$query%")
            ->orWhere('subject', 'LIKE', "%$query%")
            ->orWhere('email', 'LIKE', "%$query%")
            ->orderBy('updated_at', 'desc')
            ->paginate($perPage);

        return view('admin.dashboard.dash-contacts', compact('contacts'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contactus');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $data = $request->validate([
            'name' => 'required|max:300|string',
            'subject' => 'required|max:300|string',
            'email' => 'required|max:300|string|email',
            'file' => 'nullable|mimes:doc,docx,pdf,png,jpeg,jpg|max:2048', // Added max size for file validation
            'content' => 'required|string'
        ]);

        if ($request->hasFile('file')) {
            $fileName = time() . '_' . $request->file->getClientOriginalName();
            $request->file->move(public_path('uploads/contact/files/'), $fileName);
            $data['file'] = $fileName;
        }
        Contact::create($data);

        return back()->with('success', 'Thank you for reaching FemeNova Health!');
    }

    public function download($file)
    {
        $filePath = public_path('uploads/contact/files/' . $file);
        if (file_exists($filePath)) {
            return Response::download($filePath, $file);
        } else {
            return redirect()->back()->with('error', 'File not found.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->back()->with('delete', 'Contact deleted successfully.');
    }

}
