<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=['title', 'description', 'image'];

    public function comment()
    {
     return $this->hasMany(Comment::class);
    }
}
