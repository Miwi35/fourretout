<div class="page-header">
	<h1>{{ $topic->fulltitle }}</h1>
</div>

@if(count($topic->posts) > 0)
	<table class="table table-striped table-hover table-condensed">
		<thead>
			<th>Titre</th>
			<th>Commentaires</th>
			<th></th>
		</thead>
		@foreach($topic->posts as $post)
			<tbody>
				<td>{{ $post->linktitle }}</td>
				<td>{{ count($post->comments) }}</td>
				<td><a href="{{ URL::to_route('post_show', $post->id); }}" class="btn btn-primary">Voir</a></td>
			</tbody>
		@endforeach

	</table>
@endif