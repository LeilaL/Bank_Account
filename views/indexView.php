<?php
  include("template/header.php")
 ?>
 <main id="main">

<!-- VEHICULE CARD -->
   <div class="container-fluid">
     <div class="row">
       <a id="button" class="waves-effect btn-large teal lighten-3" href="form.php">Ajouter un véhicule</a></p>
       <?php foreach ($show_vehicles as $infosvehicle) {
         ?>
         <div class="col s12 m4 l4">
           <div class="card teal darken-4">
             <div class="card-content white-text">
               <span class="card-title"><strong>Véhicule</strong></span>
               <span class="card-title"><?php echo $infosvehicle->getType()?></span>
               <p><?php echo $infosvehicle->getBrand()?></p>
               <p><?php echo $infosvehicle->getYear()?></p>
               <p><?php echo $infosvehicle->getColor()?></p>
             </div>
             <div class="card-action">
               <a class="link" href="single.php?join=<?php echo $infosvehicle->getId()?>">Voir</a>
               <a class="link" href="#modal<?php echo $infosvehicle->getId();?>">Éditer</a>
               <a class="link" href="index.php?delete=<?php echo $value['id'];?>">Supprimer</a>
             </div>
           </div>
         </div>
         <?php }
        //  header(refresh)
         ?>
     </div>
   </div>

<!-- ==================================== -->
<!-- Modal Form EDIT -->
<div id="modal<?php echo $infosvehicle->getId();?>" class="modal">
  <div class="modal-content">
  <form class="col s12" action="index.php" method="post">

    <!-- BUTTONS RADIO -->
    <p>Type de véhicule</p>
     <p>
         <input class="with-gap" name="type" type="radio" value="<?php echo $infosvehicle->getType()?>" id="test1" />
         <label for="test1">Voiture</label>

         <input class="with-gap" name="type" type="radio" value="<?php echo $infosvehicle->getType()?>" id="test2" />
         <label for="test2">Camion</label>

         <input class="with-gap" name="type" type="radio" value="<?php echo $infosvehicle->getType()?>" id="test3"  />
         <label for="test3">Moto</label>
       </p>
       <!-- END OF BUTTONS RADIO-->

    <div class="input-field col s12 m10 l7">
      <input id="text1" name="brand" value="<?php echo $infosvehicle->getBrand()?>" type="text" class="validate">
      <label for="text1">Marque</label>
    </div>

    <div class="input-field col s12 m10 l7">
      <input id="year" name="year" value="<?php echo $infosvehicle->getYear()?>" type="text" class="validate">
      <label for="year">Année</label>
    </div>

    <div class="input-field col s12 m10 l7">
      <input id="text2" name="color" value="<?php echo $infosvehicle->getColor()?>" type="text" class="validate">
      <label for="text2">Couleur</label>
    </div>

    <div class="input-field col s10">
      <input type="hidden" name="" value="<?php echo $infosvehicle->getId()?>">
      <input class="waves-effect btn orange darken-1" value="Envoyer" type="submit" >
    </div>

  </form>
  </div>
</div>
<!-- End Form EDIT -->


 </main>

 <?php
   include("template/footer.php")
  ?>
