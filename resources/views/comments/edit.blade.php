<div class="box" >
  <!-- <?php //dd($com); ?> -->
      <form method="post" action="/update" enctype="multipart/form-data">
            {{csrf_field()}}
          <input type="text" name="id" value="{{$com->id}}" hidden>
          <textarea name="comment">{{$com->comments}}</textarea>
          <input type="submit" name="submit" value="update" class="btn btn-primary">
      </form>
</div>
