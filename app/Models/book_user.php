<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book_user extends Model
{
    use HasFactory;
    protected $fillable=[
        'book_id',
        'user_id',
        'read',
        'borrow'
    ];
}
