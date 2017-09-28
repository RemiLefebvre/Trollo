<?php
 include_once('template/headerConnect.php');
 ?>
 <main id="mainSteps" class=" row px-5 justify-content-between">

   <section class="toDo d-flex flex-column col-lg-3 col-md-3 col-12">
     <div class="d-flex align-items-center justify-content-between w-100 p-2">
       <h2>A faire</h2>
       <a href="#"><i class="fa fa-plus fa-2x" aria-hidden="true"></i>
       </a>
     </div>
     <hr>
     <div class="steps">
       <?php
       while ($step = $steps->fetch()) {
         if ($step['advancement']==1) {
         ?>
         <a href="#" class="card step">
           <p class=""><?php echo $step['step'] ?></p>
         </a>
         <?php
        }
       }
       ?>
     </div>
   </section>

   <section class="progress d-flex flex-column col-lg-3 col-md-3 col-12">
     <div class="d-flex align-items-center justify-content-between w-100 p-2">
       <h2>En cours</h2>
       <a href="#"><i class="fa fa-plus fa-2x" aria-hidden="true"></i>
       </a>
     </div>
     <hr>
     <div class="steps">
       <?php
       while ($step = $steps->fetch()) {
         if ($step['advancement']==2) {
         ?>
         <a href="#" class="card step">
           <p class=""><?php echo $step['step'] ?></p>
         </a>
         <?php
        }
       }
       ?>
     </div>
   </section>

   <section class="done d-flex flex-column col-lg-3 col-md-3 col-12">
     <div class="d-flex align-items-center justify-content-between w-100 p-2">
       <h2>Terminé</h2>
       <a href="#"><i class="fa fa-plus fa-2x" aria-hidden="true"></i>
       </a>
     </div>
     <hr>
     <div class="steps">
       <?php
       while ($step = $steps->fetch()) {
         if ($step['advancement']==3) {
         ?>
         <a href="#" class="card step">
           <p class=""><?php echo $step['step'] ?></p>
         </a>
         <?php
        }
       }
       ?>
     </div>
   </section>









</main>


 <?php
 include_once('template/footer.php');?>
