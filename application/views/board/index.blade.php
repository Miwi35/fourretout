	<div class="hero-unit">
		<h1>Boards</h1>
	</div>

	<div class="row-fluid">
		@if(count($boards) > 0)
			@foreach($boards as $board)
				<div class="span4">
					<h3>
						{{ $board->fulltitle }}
						<a href="{{ URL::to_route('board_show', $board->id); }}" class="btn btn-primary btn-mini">
							<i class="icon-angle-right"></i>&nbsp;
						</a>
					</h3>
					@if(count($board->topics) > 0)
						<ul>
						@foreach($board->topics as $topic)
							<li>
								<a href="{{ URL::to_route('topic_show', $topic->id); }}">{{ $topic->fulltitledash }}</small></a>
							</li>
						@endforeach
						</ul>
					@endif
				</div>
			@endforeach
		@endif
	</div>