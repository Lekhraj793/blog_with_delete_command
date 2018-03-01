<?php

namespace App\Libraries;

use Illuminate\Http\Request;
use App\Models\Post;

class FileStorage
{
    public static function uploadImage(Post $posts, Request $request)
    {
        $file = $posts->id.".".$request->file('image')->Extension();
        $request->file('image')->storeAs('images', $file, 'public');
    }
}
