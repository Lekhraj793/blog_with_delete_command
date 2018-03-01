<?php

namespace App\Libraries;

use Illuminate\Http\Request;
use App\Libraries\FileStorage;
use App\Libraries\CommentLibrary;
use App\Models\Post;
use App\Models\Comment;
use Carbon\Carbon;

class PostLibrary
{
    public function all()
    {
         $posts= Post::selectRaw('id, title, description, image, created_at, year(created_at)year, monthname(created_at)month, count(*)')
                    ->groupBy('id', 'title', 'description', 'image', 'created_at', 'year','month')
                    ->orderBy('id','desc');

                    if ($month=request('month')) {
                        $posts->whereMonth('created_at', Carbon::Parse($month)->month);
                    }
                    if ($year=request('year')) {
                        $posts->whereYear('created_at',$year);
                    }

                    $posts=$posts->get();
                    return $posts;
    }

    public function add(Request $request)
    {
        $request->validate( [
            'title' => 'required|unique:posts|min:25',
            'description' => 'required',
            'image'=>'required'
        ]);

        $posts=Post::create(request()->all());
        FileStorage::uploadImage($posts, $request);
        return $posts->id;
    }

      public function find(Request $request)
      {
          return Post::with('comment')->find($request->id);
      }



}
