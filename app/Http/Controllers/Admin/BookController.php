<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Requests\Admin\BookRequest;


class BookController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $books=Book::selection()->paginate(PAGINATION);
        return view('admin.books.index',compact('books'))->with('i',($request->input('page',1)-1)*PAGINATION);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookRequest $request)
    {
        $photo=upload($request,'book_photos','photo');
        $file=upload($request,'book_files','file');
        $book=Book::create([
            'name'=>$request->name,
            'type'=>$request->type,
            'language'=>$request->language,
            'photo'=>$photo,
            'file'=>$file
        ]);
        return $book? redirect()->route('books.index')->with(['success'=>'تم اضافه الكتاب بنجاح']):redirect()->route('books.create')->with(['error'=>'لم اضافه الكتاب ']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book=Book::find($id);
        return $book? view('admin.books.edit',compact('book')):redirect()->route('admin.index')->with(['error'=>'الكتالب غير متوفر']);
 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookRequest $request, string $id)
    {
        if($request->has('file')){
            $photo=upload($request,'book_photos','photo');
            $photo=upload($request,'book_files','file');
            $book=Book::find($id)->update([
                'name'=>$request->name,
                'type'=>$request->type,
                'language'=>$request->language,
                'photo'=>$photo,
                'file'=>$file
            ]);
        }else{
            $book=Book::find($id)->update([
                'name'=>$request->name,
                'type'=>$request->type,
                'language'=>$request->language,
                
            ]);
        }
       
        return $book? redirect()->route('books.index')->with(['success'=>'تعديل الكتاب بنجاح']): (redirect()->route('books.index')->with(['error'=>'لم يتم تعديل الكتاب ']));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $book=Book::find($request->delete_id)->delete();       
        return $book? redirect()->route('books.index')->with(['success'=>'حذف الكتاب بنجاح']): (redirect()->route('books.index')->with(['error'=>'لم يتم حذف اللغه']));

    }
}
