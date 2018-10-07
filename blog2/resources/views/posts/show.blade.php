

@include('partials.header')
@include('partials.nav')
	
	

<div class="row">
	<div class="col-md-8">
		<h1>{{$post->title}}</h1>
		<p>{{$post->body}}</p>
	</div>
	@include('partials.sidebar')
</div>	

@include('partials.footer')