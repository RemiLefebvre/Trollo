<?php include_once('template/headerConnect.php');
?>
<main id="mainProjets" class="container mt-5">
  <h3><strong><?php if(isset($_GET['status'])) {
    if($_GET['status']=="good"){
      echo "Modification réussie";
    }
    else{
      echo "erreur de saisie";
    }
  }
  ?></strong></h3>

<?php
while ($projet = $projets->fetch()) {
  ?>

    <article class="d-flex flex-row card mb-4">
      <div class="d-flex flex-column bg-faded align-items-center justify-content-center">
        <a href="#" class="btn"><i class="fa fa-eye fa-2x p-1" aria-hidden="true"></i></a>
        <button type="button" class="btn" data-toggle="modal" data-target="#flipFlop"><i class="fa fa-pencil-square-o fa-2x p-1 text-primary" aria-hidden="true"></i></button>
        <a href="#" class="btn"><i class="fa fa-times-circle fa-2x p-1" aria-hidden="true"></i></a>
      </div>
      <div class="w-100">
        <h2 class="pl-4 pt-2 "><?php echo $projet['name'] ?></h2>
        <hr>
        <div class="">
          <p class="p-2 mb-0"><?php echo $projet['description'] ?></p>
        </div>
        <div class="d-flex justify-content-between p-2">
          <span class="pl-2"><strong>Date butoire:</strong><?php echo $projet['deadtime'] ?></span>
          <span class="pl-2"><strong>Creation du projet:</strong> <?php echo $projet['date'] ?></span>
        </div>
      </div>
    </article>


    <!-- The modal -->
    <div class="modal fade" id="flipFlop" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="modalLabel">Modification</h4>
          </div>
          <div class="modal-body">
              <form class="" action="modif_projetPost.php" method="post">
                <input type="hidden" name="ID" value="<?php echo $projet['ID'] ?>">
                <input class="form-control" type="text" name="name" value="<?php echo $projet['name'] ?>">
                <textarea class="form-control" name="description" rows="8" placeholder=""> <?php echo $projet['description'] ?></textarea>
                <input class="form-control" type="text" name="deadtime" value="<?php echo $projet['deadtime'] ?>">
                <br>
                <hr>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <input class="btn btn-success" type="submit" name="" value="Modifier">
              </form>
          </div>
        </div>
      </div>
    </div>



    <?php
  }?>
</main>




 <?php include_once('template/footer.php');?>
