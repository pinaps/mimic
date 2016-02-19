<?php $this->layout('layout', ['title' => 'Publier', 'nav'=>'publier']) ?>

<?php $this->start('main_content') ?> 
<div class="container-fluid">
  <form method="POST" action="<?= $this->url('publierPost'); ?>">
    <div class="row">

      <div class="col-md-12">
        <h2>Poste tes photos et/ou tes textes</h2>
        <!-- = remplace le php echo -->
        <div class="col-md-3">
          <img src="<?= $this->assetUrl("img/donne_ta_photo.jpg")?>"class="mimic img-responsive" alt="donne ta photo">

          <div class="form-group">
            <label for="exampleInputFile">Première photo</label>
            <input type="file" id="exampleInputFile">
            <p class="help-block">Insére la première photo</p>
          </div>

        </div>
        <div class="col-md-3">
          <img src="<?= $this->assetUrl("img/donne_ta_photo.jpg")?>" class="mimic img-responsive" alt="donne ta photo">

          <div class="form-group">
            <label for="exampleInputFile">Deuxième photo</label>
            <input type="file" id="exampleInputFile">
            <p class="help-block">Insére la deuxième photo</p>
          </div>

        </div>
        <div class="col-md-3">
          <img src="<?= $this->assetUrl("img/donne_ta_photo.jpg")?>" class="mimic img-responsive" alt="donne ta photo">

          <div class="form-group">
            <label for="exampleInputFile">Troisième photo</label>
            <input type="file" id="exampleInputFile">
            <p class="help-block">Insére la troisième photo</p>
          </div>

        </div>


        <div class="col-md-12">

          <div class="col-md-3">
            <textarea class="form-control mimic" rows="5" name="texte1" maxlength="255" placeholder="Insére le premier texte"></textarea>
          </div>

          <div class="col-md-3">
            <textarea class="form-control mimic" rows="5" name="texte2" maxlength="255" placeholder="Insére le premier texte"></textarea>
          </div>

          <div class="col-md-3">
            <textarea class="form-control mimic" rows="5" name="texte3" maxlength="255" placeholder="Insére le premier texte"></textarea>
          </div>                        

          <button type="submit" class="btn btn-default btn-lg">
            <span class="glyphicon glyphicon-cloud-upload" aria-hidden="true"></span> Envoyer !
          </button>

        </div>

      </div> <!-- col-md-11 -->


    </div> <!-- row -->

  </form>
</div> <!-- container-fluid -->
<?php $this->stop('main_content') ?>

