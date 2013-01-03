@layout('layout')

@section('content')
	<div class="page-header">
		<h1>{{ $board->title }} <small>{{ $board->description }}</small></h1>
	</div>

	@foreach($board->topics as $topic)
		<div class="row-fluid">
			<div class="span8">
				<h2>
					{{ $topic->title }} 
					@if($topic->description != "") 
						<small>{{ $topic->description}}</small>
					@endif
				</h2>
			</div>
			<div class="span4">
				<a href="/topic/{{ $topic->id }}" class="btn btn-primary pull-right">Consulter</a>
			</div>
		</div>
	@endforeach

@endsection