<div class="row-fluid">

	<div class="span{{ 12-$offset }} {{ $offset > 0 ? "offset".$offset : "" }}">
		<h5>{{ $post->title }}</h5>
		<p>{{ $post->content }}</p>

		@if(count($post->comments) > 0)
			@foreach($post->comments as $comment)
				@render('post.comment', array('post' => $comment, 'offset' => $offset+1))
			@endforeach
		@endif
	</div>
</div>

