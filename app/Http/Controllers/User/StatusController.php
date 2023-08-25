<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Storage;
class StatusController extends Controller
{
    public function showFile($file){
        return response()->file(public_path('books/book_files/'.$file),['content-type' => Storage::mimeType($file)]);
    }
}
