

<script type="text/javascript">


    $(".step").mouseenter(function(){
      $(this).css("background-color","rgba(85, 173, 211,0.1)");
    });
    $(".step").mouseleave(function(){
      $(this).css("background-color","rgba(250,250,250,0.4)");
    });

    $(".step").click(function(){
      $(".optionUnderStep").css("display","none");
      $(".underStep").slideUp("fast");
      $(".step").css("border","0 solid black");
      $('.step').css("box-shadow","none");
      $(".step").css("min-height","auto");
      $(this).css("box-shadow","0 0 1px 200px rgba(85, 173, 211,0.3) inset");
      $(this).css("min-height","100px");
      $(this).children(".optionUnderStep").css("display","flex");
      $(this).children(".underStep").slideDown("fast");
    });

    //
    // ADD underStep
    var memo;
    function memoIdStep(id){
      memo=id;
    }
    $('.addUnderStep').click(function(){
      var form='<div class="formUnderStep"><form class="d-flex" action="add_under_stepPost.php?name=<?php echo $_GET['name']?>&ID_proj=<?php echo $_GET['ID_proj']?>" method="post"><input type="hidden" name="ID_step" value="'+memo+'"><input type="text" name="under_step" placeholder="sous-étape" class="form-control"><input type="submit" value="ok" class="btn btn-success"></form></div>';
      $('.formUnderStep').empty();
      $(this).parents(".optionUnderStep").after(form);
      // $(this).parents(".optionUnderStep").siblings('').after();
    });

    // SUPR STEP
    function suppStep(ID_step){
      var replace = "supr_step.php?name=<?php echo $_GET['name']?>&ID_proj=<?php echo $_GET['ID_proj']?>&ID_step=" + ID_step;
      window.location.replace(replace);
    }

    // INCREMENT STEP
    function increStep(ID_step){
      var replace = "incre_step.php?name=<?php echo $_GET['name']?>&ID_proj=<?php echo $_GET['ID_proj']?>&ID_step=" + ID_step;
      window.location.replace(replace);
    }


    // CHECK UNDER_STEP
    function check(ID_UnderStep,Udone){
      if (Udone==0) {
        var done = "&done=1";
      }
      else {
        var done = "&done=0";
      }
      var replace = "check_under_step.php?name=<?php echo $_GET['name']?>&ID_proj=<?php echo $_GET['ID_proj']?>&ID_UnderStep=" + ID_UnderStep + done;
      window.location.replace(replace);
    }


</script>
<script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.12.0.min.js"><\/script>')</script>

<script src="../js/plugins.js"></script>
<script src="../js/main.js"></script>

<!-- jQuery library -->
<!-- <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script> -->

<!-- Tether -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script> -->

<!-- Bootstrap 4 Alpha JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
e=o.createElement(i);r=o.getElementsByTagName(i)[0];
e.src='https://www.google-analytics.com/analytics.js';
r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>

<!-- Initialize Bootstrap functionality -->
<script>
// Initialize tooltip component
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
// Initialize popover component
$(function () {
  $('[data-toggle="popover"]').popover()
})
</script>

</body>
</html>
