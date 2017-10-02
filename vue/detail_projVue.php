<?php
 include_once('template/headerSteps.php');
 ?>

 <main id="mainSteps" class=" ">
   <h2 class="name_proj card"><?php echo $name_proj?></h2>
   <div class="row px-5 justify-content-between">

     <?php
     $toDo=['','A faire','En cours','Terminé'];
     for ($i=1; $i <=3 ; $i++) {
      ?>

     <!-- todo -->
     <section class="toDo d-flex flex-column col-lg-3 col-md-3 col-12">
       <div class="d-flex align-items-center justify-content-between w-100 p-2 toDo">
         <h2><?php echo $toDo[$i] ?></h2>
         <a href="#" data-toggle="modal" data-target="#modal<?php echo $i?>" tabindex="-1"><i class="fa fa-plus fa-2x" aria-hidden="true"></i></a>
       </div>
       <hr class="mt-0">
       <div class="steps">
         <?php
        //  print_r($steps);
         foreach ($steps as $step) {
           if ($step['advancement']==$i) {
             ?>
             <a href="#" class="card step" tabindex="-1">

               <p class="stepName"><?php echo $step['step'] ?></p>
               <div class="optionUnderStep">
                 <i onclick="memoIdStep('<?php echo $step['ID']?>')" class="addUnderStep fa fa-plus text-primary" aria-hidden="true"></i>
                 <?php
                  if ($step['advancement']!=3) {
                    ?>
                 <i onclick="increStep('<?php echo $step['ID']?>')" class="fa fa-arrow-circle-o-right text-primary" aria-hidden="true"></i>
                 <?php
               }
               ?>
                 <i onclick="suppStep('<?php echo $step['ID']?>')" class="fa fa-times-circle  text-danger" aria-hidden="true"></i>
               </div>

               <br>
               <?php foreach ($under_steps as $under_step) {
                 if($under_step['ID_step']==$step['ID']){
                   ?>


                   <p onclick="check(<?php echo $under_step['ID'] ?>,<?php echo $under_step['done']?>)" class="underStep">
                    <i <?php if($under_step['done']==1){
                      echo "style='color:green'";
                    }?> class="fa fa-check-circle-o check" aria-hidden="true"></i>
- <?php echo $under_step['under_step'] ?></p>
                   <?php
                 }
               } ?>
             </a>
               <?php
             }
           }
             ?>
       </div>
     </section>


     <!-- The modal todo-->
     <div class="modal fade" id="modal<?php echo $i?>" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
         <div class="modal-content">
           <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
             <h4 class="modal-title" id="modalLabel">Ajouter une tâche </h4>
           </div>
           <div class="modal-body">
             <form class="" action="add_stepPost.php" method="post">
               <input type="hidden" name="advancement" value="<?php echo $i?>">
               <input type="hidden" name="name" value="<?php echo $name_proj?>">
               <input type="hidden" name="ID_proj" value="<?php echo $ID_proj?>">
               <textarea class="form-control" name="step" rows="8" placeholder=""></textarea>
               <br>
               <hr>
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
               <input class="btn btn-success" type="submit" name="" value="Ajouter">
             </form>
           </div>
         </div>
       </div>
     </div>
     <?php
    }
      ?>
    </div>

</main>


 <?php
 include_once('template/footer.php');?>
