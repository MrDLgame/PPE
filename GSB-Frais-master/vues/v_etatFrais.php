<div class="page-header"><h3>Fiche de frais du mois <?php echo $displayDate; ?> de l'année <?php echo $numAnnee; ?></h3></div>

<p>Etat : <?php echo $libEtat?> depuis le <?php echo $dateModif?> <br> Montant validé : <?php echo $montantValide?></p>

<table class="table table-hover table-bordered table-striped">
<caption>Eléments forfaitisés</caption>
<thead>
<tr>
<?php
foreach($lesFraisForfait as $unFraisForfait){ ?>
<?php $libelle = $unFraisForfait['libelle']; ?>	
<th><?php echo $libelle; ?></th>
<?php } ?>
</tr>
</thead>
<tbody>
<tr>
<?php foreach($lesFraisForfait as $unFraisForfait){ ?>
<?php $quantite = $unFraisForfait['quantite']; ?>
<td class="qteForfait"><?php echo $quantite; ?></td>
<?php } ?>
</tr>
</tbody>
</table>

<table class="table table-hover table-bordered table-striped">
<caption>Descriptif des éléments hors forfait - <?php echo $nbJustificatifs ?> justificatifs reçus</caption>
<thead>
<tr>
<th>Date</th>
<th>Libellé</th>
<th>Montant</th>                
</tr>
</thead>
<tbody>
<?php foreach($lesFraisHorsForfait as $unFraisHorsForfait){ ?>
<?php $date = $unFraisHorsForfait['date']; ?>
<?php $libelle = $unFraisHorsForfait['libelle']; ?>
<?php $montant = $unFraisHorsForfait['montant']; ?>
<tr>
<td><?php echo $date; ?></td>
<td><?php echo $libelle; ?></td>
<td><?php echo $montant; ?></td>
</tr>
<?php } ?>
<script type="text/javascript">
    function imprimer_page(){
      window.print();
    }
</script>
<form>
    <input id="impression" class='btn btn-primary' name="impression" type="button" onclick="imprimer_page()" value="Imprimer les fiches">
</form>
<style type="text/css">
	#impression{
		background: green !important;
		border: 1px solid green !important;
			}
</style>
</tbody>
</table>