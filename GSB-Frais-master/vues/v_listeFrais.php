<div class="page-header"><h2>Renseigner ma fiche de frais du mois <?php echo $numMois; ?> pour l'année <?php echo $numAnnee; ?></h2></div>

<div class="page-header"><h3>Eléments forfaitisés</h3></div>

<form class="form-horizontal" method="post" action="index.php?uc=gererFrais&action=validerMajFraisForfait">
<?php foreach($lesFraisForfait as $unFrais){
	$idFrais = $unFrais['idfrais'];
	$libelle = $unFrais['libelle'];
	$quantite = $unFrais['quantite']; ?>
  <div class="form-group">
    <label class="col-sm-2 control-label"><?php echo $libelle ?></label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="lesFrais[<?php echo $idFrais?>]" value="<?php echo $quantite; ?>">
    </div>
  </div><?php } ?>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-3">
      <button type="submit" class="btn btn-primary">Valider</button>
      <button type="reset" class="btn btn-danger">Réinitialiser</button>
    </div>
  </div>
</form>


<div class="page-header"><h3>Descriptif des éléments hors forfait</h3></div>

<table class="table table-hover table-bordered table-striped">
  <thead>
    <tr>
      <th class="date">Date</th>
      <th class="libelle">Libellé</th>
      <th class="montant">Montant</th>
      <th class="action">&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach( $lesFraisHorsForfait as $unFraisHorsForfait){ ?>
    <?php $libelle = $unFraisHorsForfait['libelle']; ?>
    <?php $date = $unFraisHorsForfait['date']; ?>
    <?php $montant = $unFraisHorsForfait['montant']; ?>
    <?php $id = $unFraisHorsForfait['id']; ?>
      <tr>
        <td><?php echo $date ?></td>
        <td><?php echo $libelle ?></td>
        <td><?php echo $montant ?></td>
        <td><a href="index.php?uc=gererFrais&action=supprimerFrais&idFrais=<?php echo $id ?>" onclick="return confirm('Voulez-vous vraiment supprimer ce frais ?');" class="btn btn-warning btn-xs">Supprimer ce frais</a></td>
      </tr>
    <?php } ?>
  </tbody>
</table>

<div class="page-header"><h3>Nouvel élément hors forfait</h3></div>

<form class="form-horizontal" method="post" action="index.php?uc=gererFrais&action=validerCreationFrais">
  <div class="form-group">
    <label for="dateFrais" class="col-sm-2 control-label">Date (jj/mm/aaaa)</label>
    <div class="col-sm-3">
      <input type="date" class="form-control" id="dateFrais" name="dateFrais" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label for="libelle" class="col-sm-2 control-label">Libellé</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" id="libelle" name="libelle" placeholder="Exemple frais 1">
    </div>
  </div>
  <div class="form-group">
    <label for="montant" class="col-sm-2 control-label">Montant</label>
    <div class="col-sm-3">
      <input type="number" step="0.01" class="form-control" id="montant" name="montant" placeholder="0.00">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-3">
      <button type="submit" class="btn btn-primary">Ajouter</button>
      <button type="reset" class="btn btn-danger">Réinitialiser</button>
    </div>
  </div>
</form>