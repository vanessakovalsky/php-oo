<?php
$chunk_reponse = array_chunk($reponse_voir_jeu, 4);
foreach($chunk_reponse as $array_jeu){
    ?>
    <div class="row">
  <?php
  foreach($array_jeu as $jeu ){
    ?>
    <div class="col-sm-3">
    <?php
    include('./src/View/voir_jeu.html.php');
    ?>
    </div>
    <?php
   }
    ?>
  </div>
  <hr>
    <?php
}
