</div><!-- end of .site-container -->
  <footer class="footer container-fluid" role="contentinfo">
    <div class="container">
      <div class="footer-inner">
        <div class="footer-left">© <?php echo date("Y") ?> Thomas Miller</div>
        <div class="footer-right">
          <div class="footer-phone">T +41 79 560 20 71</div> 
          <div class="icons">
            <div class="icon">
              <?php echo file_get_contents( $site->url() . '/assets/images/icons/email.svg' ); ?>
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
  </footer>
  
</div><!-- end of .page-wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
    <?php echo js('assets/min/script.js') ?>
</body>
</html>