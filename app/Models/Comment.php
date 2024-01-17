<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    //a blogs hasMany comments
    //a comment belongs To a blog

    public function blog(){
        return $this->belongsTo(Blog::class);
    }

    protected $fillable=[
        'body',
        'blog_id',
        'user_id'
    ];
    //a comment belongs To a user
    //a user hasMany comments

    public function user(){
        return $this->belongsTo(User::class);
    }
}