<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Builder;
use App\Models\User;

class Book extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'type',
        'language',
        'photo',
        'file',
        'borrow',
        'read'
    ];

    public function Borrow():Attribute
    {
        return Attribute::make(
            get:fn($value)=>['لم يتم استعارته','تم استعارته'][$value],
        );
    }
    public function Read():Attribute
    {
        return Attribute::make(
            get:fn($value)=>['لم يتم قرائته','تم قرائته'][$value],
        );
    }
    public function scopeSelection(Builder $query){
        $query->select('id','name','type','language','borrow','read');
    }
    public function scopeBorrowed(Builder $query){
        $query->where('borrow',"=","1");
    }
    public function scopeReaded(Builder $query){
        $query->where('read',"=","1");
    }
    public function users(){
        return $this->belongsToMany(User::class,'book_users','book_id','user_id');
    }
}
