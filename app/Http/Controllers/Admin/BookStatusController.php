<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BookStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $books=Book::borrowed()->selection()->paginate(PAGINATION);
        return view('admin.books.borrow',compact('books'))->with('i',($request->input('page',1)-1)*PAGINATION);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $books=Book::readed()->selection()->paginate(PAGINATION);
        return view('admin.books.read',compact('books'))->with('i',($request->input('page',1)-1)*PAGINATION);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book=Book::find($id)->update(['borrow'=>"0"]);
        if($book){return redirect()->route('books.index')->with(['success'=>'تم استعاده الكتاب من جميع المستخدمين']);}
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
