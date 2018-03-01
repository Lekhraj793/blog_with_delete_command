<?php

namespace App\Libraries;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentLibrary
{
    public function all()
    {
        $comment=Comment::all();
        return $comment;
    }

    public function add(Request $request)
    {
        $comment=Comment::create(['comments'=>request('comment'),
                                    'post_id'=>$request->id]);
        return $comment;
    }

    public function edit($id)
    {
       return Comment::find($id);
    }

    public function update(Request $request)
    {
        $comment= Comment::find(request('id'));
        $comments= request('comment');
        dd($comments);
    }

    public function remove(Request $request)
    {
      # code...
    }
}
