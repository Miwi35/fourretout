<form action="{{ URL::to_route('user_auth') }}" mathod="POST">
	  <div class="control-group">
	    <label class="control-label" for="inputEmail">Email</label>
	    <div class="controls">
	      <input name="email" type="text" id="inputEmail" placeholder="Email">
	    </div>
	  </div>
	  <div class="control-group">
	    <label class="control-label" for="inputPassword">Mot de passe</label>
	    <div class="controls">
	      <input name="password" type="password" id="inputPassword" placeholder="Mot de passe">
	    </div>
	  </div>
	  <button type="submit" class="btn btn-primary">Connexion</button>
</form>