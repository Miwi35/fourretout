@layout('layout')

@section('content')
<form action="/board/create" method="post" class="form-horizontal">
	<fieldset>
		<legend>Nouveau Board</legend>
		<div class="control-group">
			<label class="control-label" for="input01">Nom</label>
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