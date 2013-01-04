<div class="page-header">
	<h1>{{ $post->title }}</h1>
</div>

<p>{{ $post->content }}</p>

{{ $commentForm }}

@if(count($post->comments) > 0)
	@foreach($post->comments as $comment)
		@render('post.comment', array('post' => $comment, 'offset' => 0))
	@endforeach
@endif
