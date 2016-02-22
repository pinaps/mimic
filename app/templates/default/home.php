<?php $this->layout('layout', ['title' => 'Accueil']) ?>



<?php $this->start('main_content');

// ouvre la bdd 
require(__DIR__.'/config/connect.php');

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

  <!--  Affiche la liste des strips dans un foreach -->
    
  <div id="main">           
    <div class="container-fluid">
      <div class="row">
               

    <?php if(!empty($allStrips)): ?>

      <?php foreach ($allStrips as $keyStrip => $strip): ?>
         
       
        <div class="col-md-12">
        <!-- Affiche le titre -->
          <h2> <?php echo $strip['titre']; ?> </h2>


          <!-- Affiche les images et leurs textes respectifs -->
          <div class="col-md-3">

            <img src=" <?= $this->assetUrl("img/mafalda.jpg")?>" class="mimic img-responsive" alt="une mimique">            
            <!-- TODO: insérer l'image depuis nom en BDD -->
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
            <button type="button" class="btn btn-danger">
              <span class="glyphicon glyphicon-camera" aria-hidden="true"></span> Réutiliser les phot
            </button>
            <br><br>
            <button type="button" class=" btn btn-danger">
              <span class="glyphicon glyphicon-align-left" aria-hidden="true"></span> Réutiliser le texte 
            </button>
            <br><br>
            <button type="button" class="btn btn-success">
              <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> J'aime 
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

<?php $this->stop('main_content') ?>
