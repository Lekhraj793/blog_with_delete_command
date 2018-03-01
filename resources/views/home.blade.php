@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="/css/admin.css" rel="stylesheet" type="text/css">
    <div class="container-fluid">
                    <header>
                      	<h1>Welcome to admin panel</h1>
                    </header>
                    <!-- <aside><h2>Manage content</h2>
                        <h2><a href="logout.php">Logout</a></h2>
                        <h2><a href="admin.php?view=view">View Post</a></h2>
                        <h2><a href="insert_post.php">Insert New Post</a></h2>
                    </aside> -->
                    <h1 style="text-align: center;">This is your admin panel</h1>


                    <table class="table table-striped table-dark table table-bordered">
                      <thead style="font-size: 20px; font-family: -webkit-pictograph;">
                        <tr>
                          <th>Post no:</th>
                      		<th>Post title:</th>
                      		<th>Post date:</th>
                      		<th>Post image:</th>
                      		<th>Post content:</th>

                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $post)
                            <tr style="font-size: 15px;">
                                <td>{{$post->id}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->created_at}}</td>
                                <td>{{$post->image}}</td>
                                <td>{{str_limit(strip_tags($post->description), 100)}}</td>
                                <td><a href="/posts/edit/{{$post->id}}" class="btn btn-primary" style="width: 65px;">Edit</a></td>
                                <td><a href="/delete/{{$post->id}}" class="btn btn-danger" style="width: 65px;">Delete</a></td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
<!--

                  	<table style="margin-left: 346px; border: 5px solid blue; width: 950px;">
                      	<tr>
                      		View All Post
                      	</tr>
                      	<tr>
                      		<th>Post no:</th>
                      		<th>Post title:</th>
                      		<th>Post date:</th>
                      		<th>Post image:</th>
                      		<th>Post content:</th>
                      	</tr>

                        @foreach ($data as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->created_at}}</td>
                                <td>{{$post->image}}</td>
                                <td>{{$post->description}}</td>
                            </tr>
                        @endforeach




                   </table> -->

    </div>
@endsection
