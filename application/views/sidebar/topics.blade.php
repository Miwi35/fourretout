<h5>Topics</h5>

@if ( count($board->topics) > 0 )
	<ul>
		@foreach ( $board->topics as $topic)
		    <li><a href="/topic/{{ $topic->id }}">{{ $topic->title }}</a></li>
		@endforeach
	</ul>
@else
	<p>Aucun topic</p>
@endif

<a href="/topic/new/to/{{ $board->id }}" class="btn btn-primary"><i class="icon-white icon-plus"></i>  Ajouter un topic</a>