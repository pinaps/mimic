<?php

include(__DIR__.'/config/connect.php');

// Moteur de recherche en GET
if(isset($_GET['stripName'])) {
  $stripName = $_GET['stripName'];

  $query = $pdo->prepare('SELECT * FROM strips WHERE titre LIKE ?');
  $query->bindValue(1, '%'.$stripName.'%', PDO::PARAM_STR);
  $query->execute();

  $allStrips = $query->fetchAll();
}

else {

  $query = $pdo->prepare('SELECT * FROM strips'); // Prépare la requête
  $query->execute();
  $allStrips = $query->fetchAll();
}

?>


<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Mimic</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/img/mimic.ico">
        <link rel="stylesheet" href="css/bootstrap.min.css">
<!--      <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            } -->
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
   
 
        <!-- Affichage barre de navigation -->
        <div id="nav">
          <h2>Mimiques</h2>
            <!-- On peut créer des boutons ici http://buttonoptimizer.com/ -->
          <!-- les télécharger au format png et les rendre responsive -->
          <!-- deux exemples ci-après -->

            <button type="button" class="btn btn-primary">
              <span class="glyphicon glyphicon-time" aria-hidden="true"></span> Les plus récentes
            </button>

            <br>
            <p><a>
            <button class="btn btn-primary">
              <span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span> Les mieux notées
            </button>
            </a></p>
            <br>

            <button type="button" class="btn btn-primary">
              <span class="glyphicon glyphicon-random" aria-hidden="true"></span> Aléatoire
            </button>
          
          <hr>

          <!-- Moteur de recherche de STRIP en GET -->
            <form id="search-form" method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              <div class="form-group">
                <label for="stripName">Rechercher un strip en fonction de son intitulé</label>
                <input type="text" class="form-control" id="stripName" name="stripName" />
                <button type="submit" class="btn-primary" name="action" value="search">OK</button>
              </div>
            </form>
            <hr />

          <p><a class="btn btn-success" href="#" role="button">CGU</a></p>
          <p><a class="btn btn-success" href="mailto:todo@todo.com" role="button">Contact</a></p>
          <p><a class="btn btn-success" href="mailto:todo@todo.com" role="button">Aide</a></p>
          <p><a class="btn btn-success" href="mailto:todo@todo.com" role="button">Remerciements</a></p>
          <hr>
          <p><a class="btn btn-warning" href="envoyer.php" role="button">Se connecter</a></p>
          <hr><hr><hr><hr><hr>
          <p><a class="btn btn-warning" href="envoyer.php" role="button">Je veux le faire</a></p>
        </div>


           <!--  Affiche la liste des strips dans un foreach -->
    
  <div id="main">           
    <div class="container-fluid">
      <div class="row">
               

    <?php if(!empty($allStrips)): ?>
      <?php foreach ($allStrips as $keyStrip => $strip): ?>
         <!--  On réserve l'espace de la navigation à gauche -->
       <!--  <div class="col-md-1"></div> -->
        <div class="col-md-12">
        <!-- Affiche le titre -->
          <h2> <?php echo $strip['titre']; ?> </h2>


          <!-- Affiche les images et leurs textes respectifs -->
          <div class="col-md-3">
            <img src=" <?php echo $strip['image1']; ?>" class="mimic img-responsive" alt="une mimique">
            <p> <?php echo $strip['texte1']; ?> </p>
          </div>

          <div class="col-md-3">
            <img src=" <?php echo $strip['image2']; ?>" class="mimic img-responsive" alt="une mimique">
            <p> <?php echo $strip['texte2']; ?> </p>
          </div>

          <div class="col-md-3">
            <img src=" <?php echo $strip['image3']; ?>" class="mimic img-responsive" alt="une mimique">
            <p> <?php echo $strip['texte3']; ?> </p>
          </div>

          <div class="col-md-2">
            <button type="button" class="btn btn-warning btn-lg">
              <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> Je veux publier <br>mes textes <br>avec ces photos !
            </button>
            <br><br>
            <button type="button" class="btn btn-warning btn-lg">
              <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> Je veux publier<br> mes images<br> avec ce texte !
            </button>
            <br><br><br>
            <button type="button" class="btn btn-danger btn-lg">
              <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> J'aime !
            </button>
          </div>
        </div> <!-- col-md-11 -->
            

      <?php endforeach;

      else: ?>
        <div class="col-md-3">
          <h2>Désolé : aucun strip ne correspond à cette recherche ...</h2>
        </div>
      <?php endif; ?>

        </div> <!-- row -->
      </div> <!-- /container-fluid -->
    </div>


      <footer>
        <hr>
        <p>&copy; webforce3, mars 2016</p>
      </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

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