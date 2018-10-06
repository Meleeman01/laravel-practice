@include('partials.header')
@include('partials.nav')

<div class="row">
	<div class="col-md-8">
		<h1>Create a new Post</h1>
		<hr>
		<form method="POST" action="/posts">
			{{ csrf_field()}} <!--for cross site request forgeries-->
  			<div class="form-group">
    			<label for="title">Title:</label>
    			<input type="text" class="form-control" id="title" name="title" placeholder="Post Title" >
  			</div>

  			<div class="form-group">
    			<label for="body">Body</label>
    			<textarea id="body" name="body" class="form-control" ></textarea>
 		 	</div>

  			<div class="form-group">
  			<button type="submit" class="btn btn-primary">Publish</button>
  			</div>

  			@include('partials.errors')

		</form>
	</div>
	@include('partials.sidebar')
</div>	

@include('partials.footer')