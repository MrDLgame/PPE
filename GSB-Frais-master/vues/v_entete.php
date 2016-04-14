<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Intranet du Laboratoire Galaxy-Swiss Bourdin</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

      <style>
      body {
        padding-top: 20px;
        background: rgb(72,198,236) !important;
      }
      </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

<div class="container">
 <img src="logo.png">
<nav class="navbar navbar-default">
  <div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="#">Intranet du Laboratoire GSB</a>
    </div>

    <?php if(!empty($_SESSION['group_name'])){ ?>
    <?php if($_SESSION['group_id'] == 2){ ?>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse">
      <ul class="nav navbar-nav">
        <li <?php echo ((!empty($_GET['uc']) && $_GET['uc'] == 'validFrais') ? 'class="active"' : ''); ?>><a href="index.php?uc=validFrais&action=validFrais" title="Fiche de frais">Valide fiche de frais</a></li>
        <li <?php echo ((!empty($_GET['uc']) && $_GET['uc'] == 'gererFrais') ? 'class="active"' : ''); ?>><a href="index.php?uc=gererFrais&action=saisirFrais" title="Saisie fiche de frais">Saisie fiche de frais</a></li>
        <li <?php echo ((!empty($_GET['uc']) && $_GET['uc'] == 'etatFrais') ? 'class="active"' : ''); ?>><a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Mes fiches de frais</a></li>
        <li><a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a title="<?php echo $_SESSION['prenom'] . " " . $_SESSION['nom']; ?>"><strong><?php echo $_SESSION['prenom'] . " " . $_SESSION['nom']; ?></strong> (<em><?php echo $_SESSION['group_name']; ?></em>)</a></li>
      </ul>
    </div><?php } ?>
    <?php if($_SESSION['group_id'] == 1){ ?>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse">
      <ul class="nav navbar-nav">
        <li <?php echo ((!empty($_GET['uc']) && $_GET['uc'] == 'gererFrais') ? 'class="active"' : ''); ?>><a href="index.php?uc=gererFrais&action=saisirFrais" title="Saisie fiche de frais">Saisie fiche de frais</a></li>
        <li <?php echo ((!empty($_GET['uc']) && $_GET['uc'] == 'etatFrais') ? 'class="active"' : ''); ?>><a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Mes fiches de frais</a></li>
        <li><a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a title="<?php echo $_SESSION['prenom'] . " " . $_SESSION['nom']; ?>"><strong><?php echo $_SESSION['prenom'] . " " . $_SESSION['nom']; ?></strong> (<em><?php echo $_SESSION['group_name']; ?></em>)</a></li>
      </ul>
    </div><?php } ?>
    <?php } ?>
  </div>
</nav>