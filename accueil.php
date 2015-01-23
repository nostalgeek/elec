<?php
  /*
  include('inc/config.inc.php');
  */
  $pageCurrent = substr(basename($_SERVER['PHP_SELF']), 0, -4);                
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <?php
        include('inc/head.inc.php');
    ?>
     <title>Elec | Accueil</title>
  </head>
  <body>
     



<?php
include('inc/menu.inc.php');
?>

<div class="container">
    <div class="row">
      <section class="col-md-12 text-center">
        <h1>Bonjour et bienvenue sur ce site</h1>
      </section>
    </div>
    <div class="marge">
    </div>
    <div class="row">
      <section class=" col-md-offset-2 col-md-8 col-md-offset-2 ">
        <p>Si vous arrivez sur cette page c'est que vous souhaitez utiliser une application qui va vous faciliter grandement la vie!</p>
        <p>En effet, vous pourrez désormais générer en quelques clics (ou tapements de doigts...) vos fiches horaires et les envoyer tout aussi simplement par mail.</p>
      </section>
      <aside class="col-md-4">
      </aside>
    </div>

    <div class="row">
      <section class="col-md-12 text-center">
        <h2>Comment ça marche?</h2>
      </section>
    </div>
    <div class="marge">
    </div>
    <div class="row">
      <section class="col-sm-6 ">
        <p>Description très complète + images sur la droite</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </section>
      <aside class="col-sm-6">
        <span style="display:inline-block; width:100%; height:150px; background-color:blue"><h1 style="text-align:center; margin-top:55px;">**Image**</h1></span>
      </aside>
    </div>

    <div class="margex2">
    </div>

    <div class="row">      
      
      <section class="col-sm-6 ">
        <p>Description très complète + images sur la droite</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </section>

      <aside class="col-sm-6">
        <span style="display:inline-block; width:100%; height:150px; background-color:yellow"><h1 style="text-align:center; margin-top:55px;">**Image**</h1></span>
      </aside>
    </div>

    <div class="margex2">
    </div>

    <div class="row">      
      
      <section class="col-sm-6 ">
        <p>Description très complète + images sur la droite</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </section>

      <aside class="col-sm-6">
        <span style="display:inline-block; width:100%; height:150px; background-color:green"><h1 style="text-align:center; margin-top:55px;">**Image**</h1></span>
      </aside>
    </div>


    <div class="margex2">
    </div>

    <div class="row">      
      
      <section class="col-sm-6 ">
        <p>Description très complète + images sur la droite</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </section>

      <aside class="col-sm-6">
        <span style="display:inline-block; width:100%; height:150px; background-color:orange"><h1 style="text-align:center; margin-top:55px;">**Image**</h1></span>
      </aside>
    </div>

    <div class="margex2">
    </div>

    <div class="row">
      <section class="col-md-12 text-center">
        <h2>Ca devrait aller non?</h2>
      </section>
    </div>
    <div class="marge">
    </div>
    <div class="row">
      <section class="col-sm-offset-2 col-sm-8 col-sm-offset-2 ">
        <p>Tout devrait bien se passer ;-) Au cas où, Samuel utiliser cette application depuis un petit temps, il ne faut pas hésiter à lui demander un coup de main si besoin!</p>
      </section>
     
    </div>

</div>

<?php
  include('inc/footer.inc.php');
?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

   

  </body>
</html>