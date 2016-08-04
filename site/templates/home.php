<?php snippet('header') ?>

  <?php 
  /* Defining the language variable */
  if($site->language()=='fr'){
    $lang = 'fr';}
  elseif ($site->language()=='en'){
    $lang = 'en';
  }?>
  <main class="main" role="main">
    <div class="top container-fluid">
      <h3><?php echo l::get('hey-im') ?></h3>
      <h1>Thomas Miller</h1>
      <h6><?php echo l::get('i-build-websites') ?></h6>
      <img src="assets/images/profile.jpg" alt="thomas miller profile">
    </div>
    <div class="container-fluid">
      <div class="intro-outer container">
        <div class="intro">

          <div class="webdev">
            <span><?php echo l::get('web-developer-from-bulle') ?></span>
            <img src="<?php echo $site->url()?>/assets/images/swiss.svg" alt="swiss flag">
          </div>
          
          <div class="icons">
            <div class="icon">
              <?php echo file_get_contents( $site->url() . '/assets/images/icons/gmail.svg' ); ?>
              <a href="mailto:thomas.miller147@gmail.com" target="_blank"></a>
            </div>
            <div class="icon">
              <?php echo file_get_contents( $site->url() . '/assets/images/icons/linkedin.svg' ); ?>
              <a href="https://ch.linkedin.com/in/thomas-miller-671589a3" target="_blank"></a>
            </div>
            <div class="icon">
              <?php echo file_get_contents( $site->url() . '/assets/images/icons/github.svg' ); ?>
              <a href="https://github.com/Meuss" target="_blank"></a>
            </div>      
          </div>
          
        </div>
      </div>
    </div>

    <div class="featured-outer container-fluid">
      <div class="container featured-title">
        <div class="row">
          <div class="col-xs-12">
            <h2><?php echo l::get('featured') ?></h2>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="featured">
          <figure class="featured-project">
            <figcaption>
              <h2>Matuzon</h2>
              <p><?php echo l::get('matuzon') ?></p>
            </figcaption>
            <a href="http://matuzon.ch/" target="_blank"></a>
            <img src="assets/images/featured/featured-matuzon.jpg" alt="matuzon" />
          </figure>
          <figure class="featured-project">
            <figcaption>
              <h2>Übergangsmanagement</h2>
              <p><?php echo l::get('story') ?></p>
            </figcaption>
            <a href="http://stories.prison.ch/de/ubergangsmanagement/" target="_blank"></a>
            <img src="assets/images/featured/uberg.jpg" alt="ubergangsmanagement" />
          </figure>
          <figure class="featured-project">
            <figcaption>
              <h2>Isler &amp; Pedrazzini AG</h2>
              <p><?php echo l::get('isler') ?></p>
            </figcaption>
            <a href="http://isler.testrange.net/en" target="_blank"></a>
            <img src="assets/images/featured/featured-ip.jpg" alt="islerpedrazzini" />
          </figure>
        </div>
      </div>
      <div class="see-more container">
        <a href="<?php $site->url() ?>/portfolio" class="link"><?php echo l::get('see-portfolio') ?><svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 268.832 268.832">
          <path fill="#FFF" d="M265.17 125.577l-80-80c-4.88-4.88-12.796-4.88-17.677 0-4.882 4.882-4.882 12.796 0 17.678l58.66 58.66H12.5c-6.903 0-12.5 5.598-12.5 12.5 0 6.903 5.597 12.5 12.5 12.5h213.654l-58.66 58.662c-4.88 4.882-4.88 12.796 0 17.678 2.44 2.44 5.64 3.66 8.84 3.66s6.398-1.22 8.84-3.66l79.997-80c4.884-4.882 4.884-12.796 0-17.678z"/>
        </svg>
        </a>
      </div>

      

    </div>
    <div class="about container-fluid">
      <div class="container">
        <div class="col-xs-12 col-sm-4 pict">
        </div>
        <div class="col-xs-12 col-sm-7 col-sm-offset-1">
          <h6><?php echo l::get('about-title') ?></h6>
          <ul>
            <li><?php echo l::get('about-1') ?></li>
            <li><?php echo l::get('about-2') ?></li>
            <li><?php echo l::get('about-3') ?></li>
            <li><?php echo l::get('about-4') ?></li>
            <li><?php echo l::get('about-5') ?></li>
            <li><?php echo l::get('about-6') ?></li>
            <li><?php echo l::get('about-7') ?></li>
          </ul>
          <a href="<?php $site->url() ?>/code" class="link"><?php echo l::get('see-code') ?><svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 268.832 268.832">
            <path fill="#FFF" d="M265.17 125.577l-80-80c-4.88-4.88-12.796-4.88-17.677 0-4.882 4.882-4.882 12.796 0 17.678l58.66 58.66H12.5c-6.903 0-12.5 5.598-12.5 12.5 0 6.903 5.597 12.5 12.5 12.5h213.654l-58.66 58.662c-4.88 4.882-4.88 12.796 0 17.678 2.44 2.44 5.64 3.66 8.84 3.66s6.398-1.22 8.84-3.66l79.997-80c4.884-4.882 4.884-12.796 0-17.678z"/>
          </svg>
          </a>
        </div>
      </div>
    </div>
    
    <div id="map"></div>

    <div class="container-fluid">
      <div class="contact container">
        <h2><?php echo l::get('contact-title') ?></h2>
        <?php echo $page->contact()->kirbytext() ?>
        <div class="message">
          <p>
          <?php
          if($site->language()=='fr'){
            echo "Ecrivez-moi un mail, même si c'est juste pour dire salut :)";}
          elseif ($site->language()=='en'){
            echo "Write me an email, even if it's just to say hi :)";
          }?>
            
          </p>
          <a href="mailto:thomas.miller147@gmail.com">
          <?php echo file_get_contents( $site->url() . '/assets/images/icons/email.svg' ); ?>
          <?php
          if($site->language()=='fr'){
            echo "Envoyez-moi un message";}
          elseif ($site->language()=='en'){
            echo "Message Me";
          }?>
          </a>
        </div>
      </div>
    </div>
  </main>
  <!-- mapbox -->
  <script>
      function initMap() {

        var APIKEY = "AIzaSyA3NAgO6oSSqbt8vURaHTY39VdME6evFfk";
        // Sionge 12 coordinates
        var thomasMarker = {lat: 46.618459, lng: 7.056731};
        var mapDiv = document.getElementById('map');
        // the map styles
        var styles = [{"featureType":"all","elementType":"all","stylers":[{"visibility":"on"},{"hue":"#ff0000"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#095A8A"},{"visibility":"on"}]}];
        // my icon
        var icon = {
          url: "/assets/images/map-marker.svg",
          anchor: new google.maps.Point(0,0),
          scale: 4
        }
        // setting up map
        var map = new google.maps.Map(mapDiv, {
          center: thomasMarker,
          scrollwheel: false,
          zoom: 14
        });
        // enabling/disabling mouse scroll for zoom
        google.maps.event.addListener(map, 'click', function(event){
          this.setOptions({scrollwheel:true});
        });
        google.maps.event.addListener(map, 'mouseout', function(event){
         this.setOptions({scrollwheel:false});  
        });
        // popup content
        var contentString = '<div id="popup">'+
            '<div id="address">'+
            'Rue de la Sionge 12<br/>'+
            '1630 Bulle<br/>'+
            '+41 560 20 71<br/>'+
            '<a href=\"mailto:thomas.miller147@gmail.com\">thomas.miller147@gmail.com</a>'+
            '</div>'+
            '</div>';
        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });

        map.setOptions({
          styles: styles
        });
        var marker = new google.maps.Marker({
          position: thomasMarker,
          map: map,
          icon: icon,
          title: 'Thomas Miller'
        });
        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });

      }
        
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3NAgO6oSSqbt8vURaHTY39VdME6evFfk&callback=initMap"></script>
<?php snippet('footer') ?>