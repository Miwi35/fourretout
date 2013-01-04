<form action="{{ $action }}" method="post" class="form-horizontal">
	<fieldset>
		<legend>{{ $legend }}</legend>
		<input type="hidden" name="board_id" value="{{ $board_id }}">
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
			<button type="submit" class="btn btn-primary">{{ $button }}</button>
			<button class="btn">Annuler</button>
		</div>
	</fieldset>
</form>