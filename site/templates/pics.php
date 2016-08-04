<?php snippet('header') ?>

<script src="https://npmcdn.com/masonry-layout@4.1/dist/masonry.pkgd.min.js"></script>
  <?php 
  /* Defining the language variable */
  if($site->language()=='fr'){
    $lang = 'fr';}
  elseif ($site->language()=='en'){
    $lang = 'en';}
  ?>
  <main class="main" role="main">
     <div class="top container-fluid">
      <?php echo file_get_contents( $site->url() . '/assets/images/Photoshop-logo.svg' ); ?>
      <h1><?php echo $page->title()->html() ?></h1>
      <h2><?php echo l::get('photoshop') ?></h2>
      <h3><?php echo l::get('judge') ?></h3>
      </div>
    </div>

    <div class="grid">
      <?php
      $directory = 'assets/pics/';
      $extension = '.jpg';
      $i=0;
      if ( file_exists($directory) ) {
         foreach(glob($directory.'*'.$extension) as $file){
            if($i==200) break;
            echo "<div class='grid-sizer'></div><div class='grid-item'><a class='fancybox' rel='gallery1' href='".$site->url()."/".$file."'><img src='".$site->url()."/".$file."'></a></div>";
            $i++; 
         }
      }
      else {
         print "Directory ${directory} doesn't exist!";
      }
      ?>
    </div>


    
  </main>
  <script>
    var $grid = $('.grid').masonry({
      // set itemSelector so .grid-sizer is not used in layout
      itemSelector: '.grid-item',
      // use element for option
      columnWidth: '.grid-sizer',
      percentPosition: true
    })
    $grid.imagesLoaded().progress( function() {
      $grid.masonry('layout');
    });

  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $(".fancybox").fancybox({
        openEffect  : 'elastic',
        closeEffect : 'elastic',
        padding: 0,
      });
    });
</script>
<?php snippet('footer') ?>