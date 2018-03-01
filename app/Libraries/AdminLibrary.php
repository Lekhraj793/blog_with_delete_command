<?php

namespace App\Libraries;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Libraries\FileStorage;
use Illuminate\Support\Facades\Log;
;
class AdminLibrary
{

  public function allPost()
  {
      $post= Post::all();
      return $post;
  }

  public function remove(Request $request)
  {
      return $post=Post::destroy(request('id'));
  }

  public function edit(Request $request)
  {
      $posts= Post::find($request->id);
      return $posts;

  }

  public function update(Request $request)
  {
      $posts=Post::find($request->id);
      $input=$request->all();
      $posts->fill($input)->save();
      FileStorage::uploadImage($posts, $request);
      return $posts;

  }

  public function deleteAll()
  {
      return Post::where('id','!=', null)->delete();
    // return  Post::destroy();
  }

}
