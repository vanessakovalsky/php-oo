<form name="ajout_jeu" action="index.php?actions=AjoutJeu" method="post">
  <div class="form-group">
    <label for="nom_jeu">Nom du jeu</label>
    <input name="nom_jeu" type="text" />
  </div>
  <div class="form-group">
    <label for="editeur">Editeur</label>
    <input name="editeur" type="text" />
  </div>
  <div class="form-group">
    <label for="annee_sortie">Année de sortie</label>
    <input name="annee_sortie" type="text" />
  </div>
  <div class="form-group">
    <label for="photos">Photos</label>
    <input type="file" class="form-control-file" id="photos">
  </div>
  <div class="form-group">
    <label for="descriptif">Descriptif</label>
    <textarea class="form-control" name="descriptif" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="categorie">Catégorie</label>
    <select class="form-control" name="categorie">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="duree">Durée</label>
    <input name="duree" type="text" />
  </div>
  <div class="form-group">
    <label for="nombre_joueur">Nombre de joueurs</label>
    <input name="nombre_joueur" type="text" />
  </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
