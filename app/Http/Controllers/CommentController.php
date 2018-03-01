<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\CommentLibrary;
use App\Models\Comment;
class CommentController extends Controller
{

    public function Store(Request $request)
    {

        $comment=New CommentLibrary();
        $comment=$comment->add($request);
        //dd($comment);
        if ($comment)
        {
            return back();
        }
        else {
            throw new \Exception("Error Processing Request");
        }
    }

    public function edit($id)
    {
        $comment= New CommentLibrary();
        $com=$comment->edit($id);
        //dd($com);
        return view('/comments/edit', compact('com'));
    }

    public function update(Request $request)
    {
    
    }
}
