{{ Form::open($action, 'POST', array('class' => 'form-horizontal')) }}
	<fieldset>
		<legend>{{ $legend }}</legend>
		<div class="control-group">
			{{ Form::label('title', 'Nom', array('class' => "control-label")) }}
			<div class="controls">
				<input type="text" name="title" placeholder="Titre" value="{{ (isset($board)) ? $board->title : "" }}">
			</div>
		</div>
		<div class="control-group">
			{{ Form::label('description', 'Description', array('class' => "control-label")) }}
			<div class="controls">
				<textarea name="description" class="input-xlarge" id="textarea" rows="3">{{ (isset($board))? $board->description : "" }}</textarea>
			</div>
		</div>
		<div class="form-actions">
			<button type="submit" class="btn btn-primary">{{ $button }}</button>
			<button class="btn">Annuler</button>
		</div>
	</fieldset>
{{ Form::close() }}