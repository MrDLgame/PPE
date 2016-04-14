<h2>Identification utilisateur</h2>

<form class="form-horizontal" method="post" action="index.php?uc=connexion&action=valideConnexion">
  <div class="form-group">
    <label for="login" class="col-sm-2 control-label">Identifiant</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="login" name="login" placeholder="Identifiant">
    </div>
  </div>
  <div class="form-group">
    <label for="mdp" class="col-sm-2 control-label">Mot de passe</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="valider" class="btn btn-primary">Connexion</button>
      <button type="reset" name="annuler" class="btn btn-danger">Réinitialiser</button>
    </div>
  </div>
</form>