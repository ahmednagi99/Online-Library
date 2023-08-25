<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $books=Book::all();
        $scientific_books=Book::where('type','علمي')->get();
        $sports_books=Book::where('type','رياضي')->get();
        $religious_books=Book::where('type','ديني')->get();
        $imaginary_books=Book::where('type','خيالي')->get();
    return view('user.home',compact('books','scientific_books','sports_books','religious_books','imaginary_books'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($file)
    {
        return response()->file(public_path('books/book_files/'.$file),['content-type' => Storage::mimeType($file)]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
   
}
