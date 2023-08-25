<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;
use App\Models\book_user;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class AuthUserController extends Controller
{
    public function index(){
        $books=Book::all();
        $scientific_books=Book::where('type','علمي')->get();
        $sports_books=Book::where('type','رياضي')->get();
        $religious_books=Book::where('type','ديني')->get();
        $imaginary_books=Book::where('type','خيالي')->get();
    return view('user.home',compact('books','scientific_books','sports_books','religious_books','imaginary_books'));
    }
    public function logout(){
        Auth::guard('web')->logout();
        Session::flush();
        return redirect("/");
       }

       public function showBook($file,$id){
        if($book=book_user::where('book_id',$id)->where('user_id',Auth::guard('web')->id())->first()){
            $book->update([
                'read'=>"1"
            ]);
        }else{
            book_user::create([
                'book_id'=>$id,
                'user_id'=> Auth::guard('web')->id(),
                'read'=>'1'
            ]);
        }
        Book::find($id)->update([
            'read'=>'1'
        ]);

            return response()->file(public_path('books/book_files/'.$file),['content-type'=>Storage::mimeType($file)]);
       }

       public function header(){
        $book=Book::first();
        return view('layouts.includes.header-bottom',compact('book'));
       }

       public function borrowBook($id){
        if($book=book_user::where('book_id',$id)->where('user_id',Auth::guard('web')->id())->first()){
            $book->update([
                'borrow'=>"1"
            ]);
        }else{
            book_user::create([
                'book_id'=>$id,
                'user_id'=> Auth::guard('web')->id(),
                'borrow'=>'1'
            ]);
        }
        Book::find($id)->update([
            'borrow'=>'1'
        ]);


        return redirect()->route('dashboard')->with(['success'=>"استعاره الكتاب بنجاح انظر الي الكتب المستعاره"]);
       }

       public function showReadBooks(){
        $user_books=User::with(['books'=>function($q){
            $q->where('book_users.read','1');
        }])->find(Auth::id());
        $books=$user_books->books;
        return view('user.readbooks',compact('books'));
        
       }
       public function showBorrowBooks(){
        $user_books=User::with(['books'=>function($q){
            $q->where('book_users.borrow','1');
        }])->find(Auth::id());
        $books=$user_books->books;
        return view('user.borrowbooks',compact('books'));
        
       }
}
