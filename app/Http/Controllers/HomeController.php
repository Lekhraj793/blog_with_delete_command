<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\AdminLibrary;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts= New AdminLibrary();
        $data=$posts->allPost();
        //dd($data);
        return view('home', compact('data'));
    }

    public function edit(Request $request)
    {
        $edit=New AdminLibrary();
        $post=$edit->edit($request);
        return view('/posts/edit', compact('post'));
    }

    public function update(Request $request)
    {
        $edit=New AdminLibrary();
        $post=$edit->update($request);
        //dd($post);die;
        return redirect("/");
    }

    public function destroy(Request $request)
    {
        $delete=New AdminLibrary();
        $post=$delete->remove($request);
        $deleted_message="Data deleted";
        return redirect('/')->withMessage($deleted_message);
    }

}
