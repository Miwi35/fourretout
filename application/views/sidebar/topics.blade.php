<li class="nav-header">Topics</li>

@if ( count($board->topics) > 0 )
	@foreach ( $board->topics as $topic)
	    <li>
	    	<a href="{{ URL::to_route('topic_show', $topic->id); }}">
	    		{{ $topic->fulltitledash }}
	    		
	    	</a>
	    </li>
	@endforeach
@else
	<li>Aucun topic</li>
@endif
<li>
	<a href="{{ URL::to_route('topic_new', $board->id); }}"><i class="icon-plus"></i>  Ajouter un topic</a>
</li>