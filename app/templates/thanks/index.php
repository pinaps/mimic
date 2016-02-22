<?php $this->layout('layout', ['title' => 'Merci', 'nav'=>'merci']) ?>

<?php $this->start('main_content') ?> 

<div class="container-fluid">

   <div class="row">

     <div class="col-md-12">
        <h2>Parlez sans dire un mot</h2>
        <p>Les comic strips, ce sont les Peanuts, bien sûr, mais aussi Mafalda, Calvin et Hobbes.</p>
        <p>La concision s’impose : tout doit être dit en peu d’images.</p>
        <img src="<?= $this->assetUrl("img/mafalda.jpg")?>"class="mimic img-responsive" alt="BD Mafalda">
        <img src="<?= $this->assetUrl("img/peanuts.jpg")?>"class="mimic img-responsive" alt="BD Peanuts">
        <img src="<?= $this->assetUrl("img/calvin.jpg")?>"class="mimic img-responsive" alt="BD Calvin et Hobbes">
        <p>Et quoi de plus concis et expressif qu’une mimique ?</p>
        <p>Suivons le conseil de Bernard Haller : « N’ouvrez plus la bouche. Parlez sans dire un mot »</p>
        <p>(Le visage parle, Bernard Haller, Patrick Rambaud, aux éditions Balland. 1988)</p>
        <img src="<?= $this->assetUrl("img/le-visage-parle.jpg")?>"class="mimic img-responsive" alt="Livre le visage parle de Bernard Haller">
        <p>Mimicstrips, c’est donc la rencontre des comics trips et des mimiques.</p>
        <p>En trois mimiques (et trois textes courts), tout doit être dit.</p>
        
    </div> <!-- col-md-12 -->
  </div> <!-- row -->

</div> <!-- container-fluid -->

<?php $this->stop('main_content') ?>