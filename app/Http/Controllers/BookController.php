<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Video;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::paginate(4);
        $videos = Video::paginate(4);
        return view('educationalcontents', compact('books', 'videos'));
    }

//    public function dashboardBooks()
//    {
//        $books = Book::all();
//        return view('admin.dashboard-form', [
//            'books' => $books,
//            'dash_books' => view('components.dashboard.dash-books', compact('books'))->render(),
//        ]);
//    }

    public function dashboardBooks(Request $request)

    {
        $perPage = $request->input('per_page', 10);

        // Order the books by 'created_at' and paginate them
        $books = Book::orderBy('updated_at', 'desc')->paginate($perPage);

        return view('admin.dashboard.dash-books', compact('books'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $perPage = $request->input('per_page', 10);

        $books = Book::where('authors_name', 'LIKE', "%$query%")
            ->orWhere('book_title', 'LIKE', "%$query%")
            ->orWhere('date_published', 'LIKE', "%$query%")
            ->orderBy('updated_at', 'desc')
            ->paginate($perPage);

        return view('admin.dashboard.dash-books', compact('books'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.forms.Educational_Form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
       $data = $request->validate([
            'authors_name' => 'required|max:300|string',
            'book_title' => 'required|max:300|string',
            'date_published' => 'nullable|date',
            'book_link' => 'nullable|max:300|string',
            'image' => 'required|mimes:png,jpeg,jpg',
            'description' => 'required|string'
        ]);

        if($request->has('image'))
        {
            $imageName = time() . '_' . $request->image->getClientOriginalName();

            $request->image->move(public_path('uploads/book/images/'),$imageName);
            $data['image'] =$imageName;
        }

        Book::create($data);

        return back()->with('success','Book Content has been created!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('admin.edit-forms.book', compact('book'));
    }
    /**
     * Update the specified resource in storage.
     */


    public function update(Request $request, Book $book)
    {
        $data = $request->validate([
            'authors_name' => 'required|max:300|string',
            'book_title' => 'required|max:300|string',
            'date_published' => 'nullable|date',
            'book_link' => 'nullable|max:300|string',
            'image' => 'nullable|mimes:png,jpeg,jpg',
            'description' => 'required|string'
        ]);

        if($request->has('image'))
        {
            $imageName = time() . '_' . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/book/images/'), $imageName);
            $data['image'] = $imageName;
        }

        $book->update($data);

        return back()->with('success', 'Book Content has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        // Delete the book from the database
        $book->delete();

        return redirect()->back()->with('delete', 'Book deleted successfully.');
    }

}
