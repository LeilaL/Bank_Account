<?php
include('template/header.php');
?>

  <h5 class="header center-align">Formulaire Ajout Compte</h5>
  <a href="index.php" id="return"><strong>Retour</strong></a>
  <div id="form" class="container">
  <div class="row">

    <form class="col s12" action="index.php" method="post">


      <div class="input-field col s12 m10 l7">
        <input id="text1" name="name" type="text" class="validate">
        <label for="text1">Nom</label>
      </div>

      <div class="input-field col s12 m10 l7">
        <input id="year" name="amount" type="text" class="validate">
        <label for="year">Montant</label>
      </div>

      <div class="input-field col s10">
        <input class="waves-effect btn teal lighten-3" value="Envoyer" type="submit" >
      </div>

    </form>

  </div>
</div>



<?php
include('template/footer.php');
?>
