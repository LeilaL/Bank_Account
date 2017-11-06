<?php
include("template/header.php");
?>


  <!--  VEHICLE CARD DETAILS -->
  <div class="row">
    <a id="button" class="waves-effect btn-large teal lighten-3" href="form.php">Ajouter un véhicule</a></p>
    <div class="col s12 m6 offset-m3 l6 offset-l3">
      <div class="card teal darken-4">
        <div class="card-content white-text">
          <span class="card-title"><strong>Véhicule</strong></span>
          <span class="card-title"><?php echo $singleVehicle->getType()?></span>
          <p><?php echo $singleVehicle->getBrand()?></p>
          <p><?php echo $singleVehicle->getYear()?></p>
          <p><?php echo $singleVehicle->getColor()?></p>
        </div>
        <div class="card-action">
          <a class="waves-effect btn-large teal lighten-3 modal-trigger" href="#modal<?php echo $singleVehicle->getId();?>">Éditer</a>
          <a class="waves-effect btn-large teal lighten-3 modal-trigger" href="index.php?delete=<?php echo $value['id'];?>">Supprimer</a>
          <!-- <a class="waves-effect btn-large orange darken-1 modal-trigger" href="#modal2">Supprimer</a> -->
        </div>
      </div>
    </div>
  </div>


   <!-- Modal Form EDIT -->
   <div id="modal<?php echo $singleVehicle->getId();?>" class="modal">
     <div class="modal-content">
     <form class="col s12" action="index.php" method="post">

       <!-- BUTTONS RADIO -->
       <p>Type de véhicule</p>
        <p>
            <input class="with-gap" name="type" type="radio" value="<?php echo $singleVehicle->getType();?>" id="test1" />
            <label for="test1">Voiture</label>

            <input class="with-gap" name="type" type="radio" value="<?php echo $singleVehicle->getType();?>" id="test2" />
            <label for="test2">Camion</label>

            <input class="with-gap" name="type" type="radio" value="<?php echo $singleVehicle->getType();?>" id="test3"  />
            <label for="test3">Moto</label>
          </p>
          <!-- END OF BUTTONS RADIO-->

       <div class="input-field col s12 m10 l7">
         <input id="text1" name="brand" value="<?php echo $singleVehicle->getBrand()?>" type="text" class="validate">
         <label for="text1">Marque</label>
       </div>

       <div class="input-field col s12 m10 l7">
         <input id="year" name="year" value="<?php echo $singleVehicle->getYear()?>" type="text" class="validate">
         <label for="year">Année</label>
       </div>

       <div class="input-field col s12 m10 l7">
         <input id="text2" name="color" value="<?php echo $singleVehicle->getColor()?>" type="text" class="validate">
         <label for="text2">Couleur</label>
       </div>

       <div class="input-field col s10">
         <input type="hidden" name="" value="<?php echo $singleVehicle->getId()?>">
         <input class="waves-effect btn teal lighten-3" value="Envoyer" type="submit" >
       </div>

     </form>
     </div>

   </div>
<!-- End Form EDIT -->



<?php

include("template/footer.php");

?>
