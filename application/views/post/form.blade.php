<form action="{{ $action }}" method="post" class="form-horizontal">
	<fieldset>
		<legend>{{ $legend }}</legend>
		
		<input type="hidden" name="topic_id" value="{{ $topic_id }}">
		<input type="hidden" name="post_id" value="{{ $parent_id }}">

		<div class="control-group">
			<label class="control-label" for="title">Titre</label>
			<div class="controls">
				<input type="text" name="title" placeholder="Titre">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="link">Lien</label>
			<div class="controls">
				<input type="text" name="link" placeholder="Lien">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="content" >Contenu</label>
			<div class="controls">
				<textarea name="content" class="input-xlarge" id="textarea" rows="3"></textarea>
			</div>
		</div>
		<div class="form-actions">
			<button type="submit" class="btn btn-primary">{{ $button }}</button>
			<button class="btn">Annuler</button>
		</div>
	</fieldset>
</form>