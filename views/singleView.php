<?php
include("template/header.php");
?>


  <!--  VEHICLE CARD DETAILS -->
  <a href="index.php" id="return"><strong>Retour</strong></a>
  <div class="row">
    <a id="button" class="waves-effect btn-large teal lighten-3" href="form.php">Ajouter un compte</a></p>
    <div class="col s12 m6 offset-m3 l6 offset-l3">
      <div class="card teal darken-4">
        <div class="card-content white-text">
          <span class="card-title"><strong>Compte N°<?php echo $client->getId()?></strong></span>
          <span class="card-title"><?php echo $client->getName();?></span>
          <p><?php echo $client->getAmount()?> €</p>
        </div>
        <div class="card-action">
          <a class="waves-effect btn-large teal lighten-3 modal-trigger" href="index.php?delete=<?php echo $value['id'];?>">Supprimer</a>
        </div>
      </div>
    </div>
  </div>



<?php

include("template/footer.php");

?>
