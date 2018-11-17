

@include('partials.header')
@include('partials.nav')
	
	

<div class="row">
	<div class="col-md-8">
		<h1>{{$post->title}}</h1>
		<p>{{$post->body}}</p>
		<hr>
		<ul class="list-group">
			@foreach($post->comments as $comment)
				
				<li class="list-group-item">
					<strong>
					{{ $comment->created_at->diffForHumans()}}:
				    </strong>{{ $comment->body}}
				</li>
			@endforeach
		</ul>

        {{--Add a comment --}}

<div class="card" style="margin-top: 4em;">
    <div class="card-block">
        <form method="POST" action="/posts/{{$post->id}}/comments">
            {{ csrf_field() }}
            <div class="form-group">
                <textarea name="body" placeholder="type your comment here!" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Comment</button>
            </div>
        </form>
    </div>
</div>

    @include('partials.errors')
	</div>

	@include('partials.sidebar')
</div>	




@include('partials.footer')