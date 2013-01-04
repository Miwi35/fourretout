<div class="hero-unit">
	<h1>{{ $board->fulltitle }}</h1>
</div>

@foreach($board->topics as $topic)
	<div class="row-fluid">
		<div class="span12">
			<h2>
				{{ $topic->fulltitle }}
				<a href="{{ URL::to_route('topic_show', $topic->id); }}" class="btn btn-primary btn-mini">
						<i class="icon-white icon-chevron-right"></i>&nbsp;
				</a>
			</h2>
		</div>

	</div>
@endforeach