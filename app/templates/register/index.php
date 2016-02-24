<?php $this->layout('layout', ['title' => 'S\'enregistrer', 'nav'=>'register']) ?>

<?php $this->start('main_content') ?> 
<div class="container-fluid">

  <form method="POST" action="<?= $this->url('publierPost'); ?>">

    <div class="row">

      <div class="col-md-12" id="mainBoxFaire">
        <h2 id="titleMain">Bienvenue !</h2>
        <!-- = remplace le php echo -->
        <div class="col-md-4">
          <img src="<?= $this->assetUrl("img/006_Joie.jpg")?>"class="mimic img-responsive" name="texte1" alt="mimique de joie">
        </div> <!-- div col-md-4 -->


        <?php if(isset($_SESSION['message'])): ?>
          <div class="alert alert-info">
            <p><?php echo $_SESSION['message']; ?></p>
            <?php unset($_SESSION['message']); ?>
          </div>
        <?php endif; ?>

        <div class="col-md-6">

          <!-- Affiche les erreurs stockés en session avec la clé registerErrors -->
          <?php if(isset($_SESSION['registerErrors'])): ?>
            <div class="alert alert-danger">
              <?php foreach($_SESSION['registerErrors'] as $keyError => $error): ?>
                <p><?php echo $error; ?></p>
              <?php endforeach; ?>
            </div>
            <!-- Supprime les erreurs après les avoir affiché 1 fois -->
            <?php unset($_SESSION['registerErrors']); ?>
          <?php endif; ?>

          <!-- Copié de bootstrap : http://getbootstrap.com/css/#forms -->
          <form method="POST" action="registerHandler.php">
            <div class="form-group">
                    <label for="email">Adresse électronique</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                  </div>

                  <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  </div>

                  <div class="form-group">
                    <label for="passwordConfirm">Confirmer le mot de passe</label>
                    <input type="password" class="form-control" id="passwordConfirm" name="passwordConfirm" placeholder="Confirm Password">
                  </div>

                  <button type="submit" class="btn btn-warning btn-lg" id="btnEnvoyer" name="action">
                    <span class="glyphicon glyphicon-log-in"  aria-hidden="true"></span>   OK
                  </button>

          </form>
        </div> <!-- div col-md-6 -->

      </div> <!-- col-md-12 -->

    </div> <!-- row -->

</div> <!-- container-fluid -->

<?php $this->stop('main_content') ?>

