<?php include_once('template/headerConnect.php');
?>
<main id="mainProjets" class="container mt-5">

<?php
while ($projet = $projets->fetch()) {
  ?>

    <article class="d-flex flex-row card mb-4">
      <div class="d-flex flex-column bg-faded align-items-center justify-content-center">
        <a href="#"><i class="fa fa-times-circle fa-2x p-1" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-pencil-square-o fa-2x p-1" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-eye fa-2x p-1" aria-hidden="true"></i></a>
      </div>
      <div class="">
        <h2 class="pl-4 pt-3"><?php echo $projet['name'] ?></h2>
        <div class="">
          <p class="p-2 mb-0"><?php echo $projet['description'] ?></p>
        </div>
        <div class="d-flex justify-content-between p-2">
          <span class="pl-2"><strong>Date butoire:</strong><?php echo $projet['deadtime'] ?></span>
          <span class="pl-2"><strong>Creation:</strong> <?php echo $projet['date'] ?></span>
        </div>
      </div>
    </article>


    <?php
  }?>
</main>




 <?php include_once('template/footer.php');?>
