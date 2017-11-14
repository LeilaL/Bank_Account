<?php
include("template/header.php");
?>


<!-- ================ VEHICULE CARD DETAILS ==================== -->
<a href="index.php" id="return"><strong>Retour</strong></a>
<div class="row">
  <a id="button" class="waves-effect btn-large teal lighten-3" href="form.php">Ajouter un compte</a></p>
  <div class="col s12 m7 offset-m3 l6 offset-l3">
    <div class="card teal darken-4">
      <div class="card-content white-text">
        <span class="card-title"><strong>Compte N°<?php echo $client->getId()?></strong></span>
        <span class="card-title">Mr/Mme <?php echo $client->getName();?></span>
        <p>Solde actuel : <?php echo $client->getAmount()?> €</p>
      </div>
      <div class="card-action">
        <a class="modal-trigger" href="#modal<?php echo $client->getId();?>">Retrait</a>
        <a class="modal-trigger" href="#modal1<?php echo $client->getId();?>">Versement</a>
        <a class="modal-trigger" href="#modal2<?php echo $client->getId();?>">Virement</a>
        <a class="waves-effect btn teal lighten-3 modal-trigger" href="index.php?delete=<?php echo $value['id'];?>">Supprimer</a>
      </div>
    </div>
  </div>
</div>
<!-- ======================================================== -->

<!-- ================ MODAL WITHDRAWAL ==================== -->
<div id="modal<?php echo $client->getId();?>" class="modal">
  <div class="modal-content">
    <h5 class="header center-align">Formulaire Retrait</h5>
    <form class="col s12" action="index.php" method="post">

      <p>Votre solde actuel est de : <?php echo $client->getAmount()?> € </p>
      <div class="input-field col s12 m10 l7">
        <input id="year" name="wd" type="number" class="validate">
        <label for="year">Montant du retrait</label>
      </div>

      <div class="modal-footer col s10">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Annuler</a>
        <input type="hidden" name="amount" value="<?php echo $client->getAmount()?>">
        <input type="hidden" name="id" value="<?php echo $client->getId()?>">
        <input class="waves-effect btn teal lighten-3" name="ok" value="Envoyer" type="submit" >
      </div>

    </form>
  </div>

</div>
<!-- ======================================================== -->

<!-- ================ MODAL PAYMENT ==================== -->
<div id="modal1<?php echo $client->getId();?>" class="modal">
  <div class="modal-content">
    <h5 class="header center-align">Formulaire Versement</h5>
    <form class="col s12" action="single.php" method="post">
      <p>Votre solde actuel est de : <?php echo $client->getAmount()?> € </p>

      <div class="input-field col s12 m10 l7">
        <input id="year" name="credit" type="number" class="validate">
        <label for="year">Montant du versement</label>
      </div>

      <div class="modal-footer col s10">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Annuler</a>
        <input type="hidden" name="identif" value="<?php echo $client->getId()?>">
        <input class="waves-effect btn teal lighten-3" value="Envoyer" type="submit" >
      </div>

    </form>
  </div>

</div>
<!-- ======================================================== -->

<!-- ================ MODAL TRANSFER ==================== -->
<div id="modal2<?php echo $client->getId();?>" class="modal">
  <div class="modal-content">
    <h5 class="header center-align">Formulaire Virement</h5>
    <form class="col s12" action="index.php" method="post">

      <div class="input-field col s12">
        <select multiple>
          <option value="" disabled selected>Choisir un compte</option>
          <option value="1">Option 1</option>
          <option value="2">Option 2</option>
          <option value="3">Option 3</option>
        </select>
        <label>Comptes</label>
      </div>

      <p>Votre solde actuel est de : <?php echo $client->getAmount()?> € </p>

      <div class="input-field col s12 m10 l7">
        <input id="year" name="amount" type="number" class="validate">
        <label for="year">Montant du virement</label>
      </div>

      <div class="modal-footer col s10">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Annuler</a>
        <input class="waves-effect btn teal lighten-3" value="Envoyer" type="submit" >
      </div>

    </form>
  </div>

</div>
<!-- ======================================================== -->



<?php

include("template/footer.php");

?>
