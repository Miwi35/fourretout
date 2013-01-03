@layout('layout')

@section('content')

	<div class="page-header">
		<h1>{{ $topic->title }} <small>{{ $topic->description }}</small></h1>
	</div>

	{{ var_dump($topic->posts); die; }}

	@if(count($topic->posts()->get()) > 0)
		<table class="table table-striped table-hover table-condensed">
			<thead>
				<th>Titre</th>
				<th>Commentaires</th>
				<th></th>
			</thead>
			@foreach($topic->posts as $post)
				<tbody>
					<td>{{ $post->title }}</td>
					//<td>{{ count($post->comments()->get()) }}</td>
					<td><a href="/post/{{ $post->id }}" class="btn btn-primary">Voir</a></td>
				</tbody>
			@endforeach

		</table>
	@endif

@endsection