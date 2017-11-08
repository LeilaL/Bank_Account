<?php
  include("template/header.php")
 ?>
 <main id="main">

<!-- VEHICULE CARD -->
   <div class="container-fluid">
     <div class="row">
       <a id="button" class="waves-effect btn-large teal lighten-3" href="form.php">Ajouter un compte</a></p>
       <?php foreach ($clients as $infosAccount) {
         ?>
         <div class="col s12 m4 l4">
           <div class="card teal darken-4">
             <div class="card-content white-text">
               <span class="card-title"><strong>Compte N°<?php echo $infosAccount->getId()?></strong></span>
               <span class="card-title"><?php echo $infosAccount->getName()?></span>
               <p><?php echo $infosAccount->getAmount()?> €</p>
             </div>
             <div class="card-action">
               <a href="single.php?join=<?php echo $infosAccount->getId()?>">Effectuer des transactions</a><br>
               <br>
               <a href="index.php?delete=<?php echo $value['id'];?>">Supprimer</a>
             </div>
           </div>
         </div>
         <?php }
        //  header(refresh)
         ?>
     </div>
   </div>



 </main>

 <?php
   include("template/footer.php");
  ?>
