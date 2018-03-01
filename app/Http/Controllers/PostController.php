<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\PostLibrary;
use App\Libraries\AdminLibrary;

class PostController extends Controller
{
    public function index()
    {
      try{
        $post=New PostLibrary();
        $posts=$post->all();
        return view('index', compact('posts'));
      }
      catch(Exception $e){
          echo "something Wrong";
      }
    }

    public function insert()
    {
        return view('posts.insert');
    }

    public function Store(Request $request)
    {
          try{
            $post=New PostLibrary();
            $posts=$post->add($request);
            redirect ('/index');
          }

        catch(Exception $e){
            echo "Data Not Submit";
        }
    }

    public function show(Request $request)
    {
        $show=New PostLibrary();
        $post = $show->find($request);
        return view('/posts/show', compact('post'));
    }


}
