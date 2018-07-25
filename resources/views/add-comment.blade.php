@if(auth()->user())
<div class="blog-post">
    <form action={{ route('add-comment', ['team' => $team]) }} method='POST'>

    {{ csrf_field() }}
    
    <br>
   <div class="form-group">
        <label for="content"><h5> Add your comment: </h5> </label>
        <textarea class="form-control" name="content" id="content" rows=5 ></textarea>
    </div>
    @include('partials.error', ['fieldName' => 'content'])
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endif