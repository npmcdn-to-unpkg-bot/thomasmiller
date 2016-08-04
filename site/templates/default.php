<?php snippet('header') ?>
  <?php 
  /* Defining the language variable */
  if($site->language()=='fr'){
    $lang = 'fr';}
  elseif ($site->language()=='en'){
    $lang = 'en';}
  ?>
  <main class="main" role="main">
     <div class="top container-fluid">
      <h1><?php echo $page->title()->html() ?></h1>
      </div>
    </div>

    <div class="text">
      <!-- <h1><?php echo $page->title()->html() ?></h1> -->
      
      <?php echo $page->text()->kirbytext() ?>
    </div>
    
  </main>

<?php snippet('footer') ?>