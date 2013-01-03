@layout('layout')

@section('content')
<form action="/topic/create" method="post" class="form-horizontal">
	<fieldset>
		<legend>Nouveau topic</legend>
		<div class="control-group">
			<label class="control-label" for="input01">Board</label>
			<div class="controls">
				<select type="text" name="board_id">
					<option value="-1">Sélectionner un board</option>
					@foreach( Board::all() as $board)
						<option value="{{ $board->id }}" <?php echo (isset($default_board) && $default_board == $board->id)? 'selected="selected"' : "" ?>>
							{{ $board->title }}
						</option>
					@endforeach
				</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="input01">Titre</label>
			<div class="controls">
				<input type="text" name="title" placeholder="Titre">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="textarea">Description</label>
			<div class="controls">
				<textarea name="description" class="input-xlarge" id="textarea" rows="3"></textarea>
			</div>
		</div>
		<div class="form-actions">
			<button type="submit" class="btn btn-primary">Ajouter</button>
			<button class="btn">Annuler</button>
		</div>
	</fieldset>
</form>
@endsection