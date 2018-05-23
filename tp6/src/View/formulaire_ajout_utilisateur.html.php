<form name="ajout_utilisateur" action="index.php?actions=AjoutUtilisateur" method="post">
  <div class="form-group">
    <label for="nom">Nom</label>
    <input name="nom" type="text" />
  </div>
  <div class="form-group">
    <label for="prenom">Prénom</label>
    <input name="prenom" type="text" />
  </div>
  <div class="form-group">
    <label for="identifiant">Identifiant</label>
    <input name="identifiant" type="text" />
  </div>
  <div class="form-group">
    <label for="email">email</label>
    <input type="email" name="email">
  </div>
  <div class="form-group">
    <label for="presentation">Présentation</label>
    <textarea class="form-control" name="presentation" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="role">Role</label>
    <select class="form-control" name="role">
      <option>Admin</option>
      <option>Membre</option>
    </select>
  </div>
  <div class="form-group">
    <label for="mot_de_passe">Mot de passe</label>
    <input name="mot_de_passe" type="password" />
  </div>
  <div class="form-group">
    <label for="avatar">Avatar</label>
    <input type="file" class="form-control-file" id="avatar">
  </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
