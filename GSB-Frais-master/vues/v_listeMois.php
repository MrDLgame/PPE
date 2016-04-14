<div class="page-header"><h2>Mes fiches de frais</h2></div>

<form class="form-horizontal" method="post" action="index.php?uc=etatFrais&action=voirEtatFrais">
  <div class="form-group">
    <label for="lstMois" class="col-sm-2 control-label">Sélectionnez un mois</label>
    <div class="col-sm-3">
      <select class="form-control" id="lstMois" name="lstMois">
      	<?php foreach($lesMois as $unMois){ ?>
      	<?php $mois = $unMois['mois']; ?>
    		<?php $numAnnee = $unMois['numAnnee']; ?>
    		<?php $numMois = $unMois['numMois']; ?>
    		<?php if($mois == $moisASelectionner){ ?>
    		<option value="<?php echo $mois; ?>" selected><?php echo $numMois; ?>/<?php echo $numAnnee; ?></option>
    		<?php }else{ ?>
    		<option value="<?php echo $mois; ?>"><?php echo $numMois; ?>/<?php echo $numAnnee; ?></option>
    		<?php } ?>
    		<?php } ?>
	  </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-3">
      <button type="submit" class="btn btn-primary">Valider</button>
      <button type="reset" class="btn btn-danger">Réinitialiser</button>
    </div>
  </div>
</form>