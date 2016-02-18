<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Mimic - <?= $this->e($title) ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?= $this->assetUrl('/img/mimic.ico') ?>">
        <link rel="stylesheet" href="<?= $this->assetUrl('css/bootstrap.min.css') ?>">
<!--      <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            } -->
        </style>
        <link rel="stylesheet" href="<?= $this->assetUrl('css/bootstrap-theme.min.css')?>">
        <link rel="stylesheet" href="<?= $this->assetUrl('css/main.css') ?>">

        <script src="<?= $this->assetUrl('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')?>"></script>
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
   
 
        <!-- Affichage barre de navigation -->
        <div id="nav">
          <h2>Mimiques</h2>
        <button class="btn btn-warning">
              <span class="glyphicon glyphicon-log-in absoluteIcon" aria-hidden="true"></span> Se connecter
          </button>   
          <br><br>
            <!-- On peut créer des boutons ici http://buttonoptimizer.com/ -->
          <!-- les télécharger au format png et les rendre responsive -->
          <!-- deux exemples ci-après -->

            <button type="button" class="btn btn-primary">
              <span class="glyphicon glyphicon-time absoluteIcon" aria-hidden="true"></span> Les plus récentes
            </button>

            <br><br>
            
            <button class="btn btn-primary">
              <span class="glyphicon glyphicon-arrow-up absoluteIcon" aria-hidden="true"></span> Les mieux notées
            </button>
            
            <br><br>

            <button  class="btn btn-primary">
              <span class="glyphicon glyphicon-random span absoluteIcon" aria-hidden="true"></span> En Aléatoire
            </button>
          
          <br><br>
          <!-- Moteur de recherche de STRIP en GET -->
            <form id="search-form" method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <div class="form-group">
                <label for="stripName">Rechercher un strip en fonction de son intitulé</label>
                <input type="text" class="form-control" id="stripName" name="stripName" placeholder="Titre du Strip" />
                <button type="submit" class="btn-primary" name="action" value="search">OK</button>
              </div>
            </form>
            <br><br>

          <button class="btn btn-success">
              <span class="glyphicon glyphicon-book absoluteIcon" aria-hidden="true"></span> CGU
          </button> 
          <br><br>
           <button class="btn btn-success">
              <span class="glyphicon glyphicon-pencil absoluteIcon" aria-hidden="true"></span> Contact
          </button> 
          <br><br> 
           <button class="btn btn-success">
              <span class="glyphicon glyphicon-question-sign absoluteIcon" aria-hidden="true"></span> Aide
          </button> 
          <br><br> 
           <button class="btn btn-success">
              <span class="glyphicon glyphicon-heart absoluteIcon" aria-hidden="true"></span> Remerciements
          </button>    

          <!-- <p><a class="btn btn-success taille" href="#" role="button">CGU</a></p>
          <p><a class="btn btn-success taille" href="mailto:todo@todo.com" role="button">Contact</a></p>
          <p><a class="btn btn-success taille" href="mailto:todo@todo.com" role="button">Aide</a></p>
          <p><a class="btn btn-success taille" href="mailto:todo@todo.com" role="button">Remerciements</a></p> -->
          <br><br>
           
          <!-- <p><a class="btn btn-warning" href="envoyer.php" role="button">Se connecter</a></p> -->
          <br><br><br><br><br><br>
          <button class="btn btn-danger">
              <span class="glyphicon glyphicon-film absoluteIcon" aria-hidden="true"></span> Je veux le faire
          </button>   
          <!-- <p><a class="btn btn-warning" href="envoyer.php" role="button">Je veux le faire</a></p> -->
        </div>


           <!--  Affiche la liste des strips dans un foreach -->
    
  <div id="main">           
    <div class="container-fluid">

	    <!-- Contenu dynamique -->
		<?= $this->section('main_content') ?>


    </div> <!-- /container-fluid -->
  </div>


      <footer>
        <hr>
        <p>&copy; webforce3, mars 2016</p>
      </footer>

        <script src="<?= $this->assetUrl('http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js')?>"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="<?= $this->assetUrl('js/vendor/bootstrap.min.js')?>"></script>

        <script src="<?= $this->assetUrl('js/plugins.js')?>"></script>
        <script src="<?= $this->assetUrl('js/main.js')?>"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>