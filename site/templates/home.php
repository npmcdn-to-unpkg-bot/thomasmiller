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
              <h2>Bimbosan</h2>
              <p><?php echo l::get('bimbosan') ?></p>
            </figcaption>
            <a href="http://bimbosan.ch/" target="_blank"></a>
            <img src="assets/images/featured/featured-bimbosan.jpg" alt="bimbosan" />
          </figure>
          <figure class="featured-project">
            <figcaption>
              <h2>Storytelling</h2>
              <p><?php echo l::get('story') ?></p>
            </figcaption>
            <a href="http://stories.prison.ch/fr/transition-vers-lintegration/" target="_blank"></a>
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
          <a href="<?php $site->url() ?>/assets/images/<?php echo l::get('cv-filename') ?>" target="_blank" class="link"><?php echo l::get('see-cv') ?>
            <svg width="16px" height="20px" viewBox="0 0 16 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs></defs>
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="pdf" fill="#FFF">
                    <g id="Group">
                        <path d="M15.6347826,4.20241379 L15.3666087,3.93655172 L11.8553043,0.455517241 L11.5871304,0.189655172 C11.4657391,0.0693103448 11.2973913,0 11.1252174,0 L1.0306087,0 C0.618086957,0 0.173913043,0.315862069 0.173913043,1.00896552 L0.173913043,13.4482759 L0.173913043,19.1506897 L0.173913043,19.3103448 C0.173913043,19.5989655 0.466782609,19.8803448 0.813217391,19.9689655 C0.830608696,19.9734483 0.847304348,19.98 0.865391304,19.9834483 C0.919652174,19.9941379 0.974956522,20 1.0306087,20 L14.9693913,20 C15.0250435,20 15.0803478,19.9941379 15.1346087,19.9834483 C15.1526957,19.98 15.1693913,19.9734483 15.1867826,19.9689655 C15.5332174,19.8803448 15.826087,19.5989655 15.826087,19.3103448 L15.826087,19.1506897 L15.826087,13.4482759 L15.826087,4.82 C15.826087,4.55551724 15.794087,4.36034483 15.6347826,4.20241379 L15.6347826,4.20241379 Z M14.586087,4.13793103 L11.6521739,4.13793103 L11.6521739,1.22931034 L14.586087,4.13793103 L14.586087,4.13793103 Z M1.0306087,19.3103448 C1.00591304,19.3103448 0.983652174,19.3013793 0.96173913,19.2934483 C0.907478261,19.267931 0.869565217,19.2141379 0.869565217,19.1506897 L0.869565217,14.137931 L15.1304348,14.137931 L15.1304348,19.1506897 C15.1304348,19.2141379 15.0925217,19.2675862 15.0382609,19.2934483 C15.0163478,19.3013793 14.994087,19.3103448 14.9693913,19.3103448 L1.0306087,19.3103448 L1.0306087,19.3103448 Z M0.869565217,13.4482759 L0.869565217,1.00896552 C0.869565217,0.934137931 0.881043478,0.689655172 1.0306087,0.689655172 L10.9766957,0.689655172 C10.9652174,0.733103448 10.9565217,0.777931034 10.9565217,0.824482759 L10.9565217,4.82758621 L14.9944348,4.82758621 C15.0413913,4.82758621 15.0862609,4.81896552 15.130087,4.80758621 C15.130087,4.81275862 15.1304348,4.81482759 15.1304348,4.82 L15.1304348,13.4482759 L0.869565217,13.4482759 L0.869565217,13.4482759 Z" id="Shape"></path>
                        <path d="M5.57982609,15.4289655 C5.464,15.3348276 5.33321739,15.2637931 5.18747826,15.2168966 C5.04173913,15.1696552 4.89426087,15.1462069 4.7453913,15.1462069 L3.7373913,15.1462069 L3.7373913,18.6206897 L4.30817391,18.6206897 L4.30817391,17.3665517 L4.73147826,17.3665517 C4.91513043,17.3665517 5.08347826,17.34 5.23547826,17.2865517 C5.38747826,17.2331034 5.51756522,17.1575862 5.6253913,17.0603448 C5.73321739,16.9631034 5.81704348,16.8427586 5.87756522,16.6996552 C5.93773913,16.5565517 5.968,16.3972414 5.968,16.2210345 C5.968,16.0544828 5.93217391,15.9044828 5.86086957,15.7706897 C5.78956522,15.6368966 5.69565217,15.5234483 5.57982609,15.4289655 L5.57982609,15.4289655 Z M5.36347826,16.5768966 C5.32834783,16.6727586 5.28278261,16.7472414 5.22573913,16.8006897 C5.16869565,16.8541379 5.10608696,16.8927586 5.03791304,16.9162069 C4.96973913,16.9396552 4.90052174,16.9517241 4.83095652,16.9517241 L4.30782609,16.9517241 L4.30782609,15.5751724 L4.73565217,15.5751724 C4.8813913,15.5751724 4.9986087,15.597931 5.08765217,15.6434483 C5.17634783,15.6889655 5.24521739,15.7455172 5.2946087,15.8131034 C5.34365217,15.8806897 5.376,15.9513793 5.392,16.0251724 C5.40765217,16.0989655 5.41565217,16.1641379 5.41565217,16.2206897 C5.41565217,16.3624138 5.39826087,16.4810345 5.36347826,16.5768966 L5.36347826,16.5768966 Z" id="Shape"></path>
                        <path d="M9.02747826,15.6551724 C8.88,15.5013793 8.6946087,15.3775862 8.47095652,15.2851724 C8.24730435,15.1927586 7.98817391,15.1462069 7.69356522,15.1462069 L6.63791304,15.1462069 L6.63791304,18.6206897 L7.96452174,18.6206897 C8.00869565,18.6206897 8.07686957,18.6151724 8.16904348,18.6041379 C8.26086957,18.5931034 8.36243478,18.5682759 8.4733913,18.5286207 C8.58434783,18.4893103 8.69913043,18.4303448 8.81808696,18.3517241 C8.93704348,18.2731034 9.04382609,18.1655172 9.13913043,18.0286207 C9.23443478,17.8917241 9.31269565,17.722069 9.3746087,17.5193103 C9.43652174,17.3165517 9.46747826,17.072069 9.46747826,16.7862069 C9.46747826,16.5786207 9.43095652,16.3765517 9.35826087,16.1803448 C9.28486957,15.9844828 9.17495652,15.8093103 9.02747826,15.6551724 L9.02747826,15.6551724 Z M8.61147826,17.837931 C8.44034783,18.0831034 8.1613913,18.2055172 7.7746087,18.2055172 L7.20869565,18.2055172 L7.20869565,15.5748276 L7.54156522,15.5748276 C7.81426087,15.5748276 8.03617391,15.6103448 8.20730435,15.6810345 C8.37843478,15.7517241 8.51408696,15.8444828 8.61391304,15.9593103 C8.71373913,16.0741379 8.78086957,16.202069 8.816,16.3434483 C8.85078261,16.4848276 8.86817391,16.627931 8.86817391,16.7724138 C8.86817391,17.2375862 8.7826087,17.5931034 8.61147826,17.837931 L8.61147826,17.837931 Z" id="Shape"></path>
                        <polygon id="Shape" points="10.2949565 18.6206897 10.8751304 18.6206897 10.8751304 17.0555172 12.3398261 17.0555172 12.3398261 16.6689655 10.8751304 16.6689655 10.8751304 15.5751724 12.4869565 15.5751724 12.4869565 15.1462069 10.2949565 15.1462069"></polygon>
                        <path d="M11.2793043,7.91758621 C10.9596522,7.91758621 10.5673043,7.95896552 10.1113043,8.04103448 C9.47478261,7.37137931 8.81043478,6.39344828 8.34156522,5.43344828 C8.8066087,3.49241379 8.57391304,3.21758621 8.47130435,3.08793103 C8.36208696,2.95 8.208,2.7262069 8.03269565,2.7262069 C7.95930435,2.7262069 7.75895652,2.75931034 7.67930435,2.78551724 C7.47895652,2.85172414 7.37113043,3.00482759 7.28486957,3.20448276 C7.03895652,3.77448276 7.37634783,4.7462069 7.72347826,5.49517241 C7.42678261,6.66517241 6.92904348,8.06551724 6.40591304,9.20206897 C5.08765217,9.80068966 4.38747826,10.3886207 4.32417391,10.9496552 C4.30121739,11.1537931 4.34991304,11.4534483 4.712,11.7227586 C4.81113043,11.7962069 4.92730435,11.8351724 5.04834783,11.8351724 L5.04834783,11.8351724 C5.35269565,11.8351724 5.66017391,11.6041379 6.016,11.1086207 C6.27547826,10.7472414 6.55408696,10.2544828 6.84486957,9.64275862 C7.77634783,9.23896552 8.92869565,8.87413793 9.91547826,8.66965517 C10.4650435,9.19275862 10.9572174,9.45758621 11.3801739,9.45758621 C11.6918261,9.45758621 11.9589565,9.31551724 12.1523478,9.04689655 C12.3537391,8.76724138 12.3996522,8.51689655 12.288,8.30206897 C12.154087,8.0437931 11.824,7.91758621 11.2793043,7.91758621 L11.2793043,7.91758621 Z M5.056,11.2531034 C4.89321739,11.1293103 4.9026087,11.0458621 4.90608696,11.0144828 C4.92765217,10.8227586 5.2306087,10.4824138 5.97391304,10.0682759 C5.41043478,11.1 5.10782609,11.2368966 5.056,11.2531034 L5.056,11.2531034 Z M7.90817391,3.34896552 C7.92313043,3.34413793 8.27165217,3.72862069 7.94156522,4.45793103 C7.44556522,3.95482759 7.87408696,3.36034483 7.90817391,3.34896552 L7.90817391,3.34896552 Z M7.18921739,8.87517241 C7.54226087,8.04103448 7.8706087,7.12 8.11930435,6.26689655 C8.50991304,6.96275862 8.97913043,7.63793103 9.44869565,8.17862069 C8.70643478,8.35137931 7.91617391,8.59517241 7.18921739,8.87517241 L7.18921739,8.87517241 Z M11.6765217,8.71 C11.5693913,8.85862069 11.3370435,8.86206897 11.2556522,8.86206897 C11.0702609,8.86206897 11.0010435,8.75275862 10.7175652,8.53655172 C10.9513043,8.50689655 11.1718261,8.49931034 11.3474783,8.49931034 C11.6566957,8.49931034 11.7133913,8.54448276 11.7561739,8.56724138 C11.7485217,8.59172414 11.7283478,8.63793103 11.6765217,8.71 L11.6765217,8.71 Z" id="Shape"></path>
                    </g>
                </g>
            </g>
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