@extends('welcome')
@section('content')
<!-- <?php //dd($post); ?> -->

    <div class="col-sm-9" style="margin-top: 60px;">
        <h3>{{$post['title']}}</h3>
        <div class="col-sm-5" style="width: 550px;">
                <img src="<?php echo asset("images/images/".$post->id.".jpeg")?>"
                     alt="Product image cap" class="img-thumbnail rounded mx-auto d-block" style="display:block;
                          width: 550px;left: 0; right: 0;" >
        </div>
        <p style="color: black; margin-top: 30px; font-size: 20px;">{{$post['description']}}</p>
    </div>

     <hr>

    <div class="comment" style="width: 1000px;">
                <h3>Comments</h3>

                @foreach ($post->comment as $comment)
                <!-- <?php //dd($comment); ?> -->
                        <li class="list-group" style="margin-left: 64px; block-size: 180px;">
                          <strong>
                                   {{$comment->created_at->diffForHumans()}}:
                           </strong>

                                {{$comment->comments}}
                                <a href="/comments/edit/{{$comment->id}}" class="btn btn-primary" style="width: 100px;">Edit</a>
                                <a href="/delete/{{$comment->id}}" class="btn btn-danger" style="width: 100px;">Delete</a>
                        </li>

                @endforeach
        </div>

     <div class="box" >
           <form method="POST" action="/comment/{{$post->id}}">
                 {{csrf_field()}}
               <textarea name="comment" rows="4" style="width: 600px; margin-left: 140px"></textarea>
               <input type="submit" name="submit" value="add comment" class="btn btn-primary">
           </form>
     </div>
     <hr>

@endsection
