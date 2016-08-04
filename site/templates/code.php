<?php snippet('header') ?>

  <?php 
    /* Defining the language variable */
    if($site->language()=='fr'){
      $lang = 'fr';}
    elseif ($site->language()=='en'){
      $lang = 'en';}
  ?>
  <?php 
    /* fetching all the svgs and putting them in variables */
    $icon_angular = file_get_contents($site->url()."/assets/images/svg/angular.svg");
    $icon_apple = file_get_contents($site->url()."/assets/images/svg/apple.svg");
    $icon_bootstrap = file_get_contents($site->url()."/assets/images/svg/bootstrap.svg");
    $icon_browsersync = file_get_contents($site->url()."/assets/images/svg/browsersync.svg");
    $icon_css = file_get_contents($site->url()."/assets/images/svg/css.svg");
    $icon_es6 = file_get_contents($site->url()."/assets/images/svg/es6.svg");
    $icon_git = file_get_contents($site->url()."/assets/images/svg/git.svg");
    $icon_greensock = file_get_contents($site->url()."/assets/images/svg/greensock.svg");
    $icon_gulp = file_get_contents($site->url()."/assets/images/svg/gulp.svg");
    $icon_html = file_get_contents($site->url()."/assets/images/svg/html.svg");
    $icon_javascript = file_get_contents($site->url()."/assets/images/svg/javascript.svg");
    $icon_joomla = file_get_contents($site->url()."/assets/images/svg/joomla.svg");
    $icon_jquery = file_get_contents($site->url()."/assets/images/svg/jquery.svg");
    $icon_kirby = file_get_contents($site->url()."/assets/images/svg/kirby.svg");
    $icon_nodejs = file_get_contents($site->url()."/assets/images/svg/nodejs.svg");
    $icon_npm = file_get_contents($site->url()."/assets/images/svg/npm.svg");
    $icon_photoshop = file_get_contents($site->url()."/assets/images/svg/photoshop.svg");
    $icon_php = file_get_contents($site->url()."/assets/images/svg/php.svg");
    $icon_react = file_get_contents($site->url()."/assets/images/svg/react.svg");
    $icon_sass = file_get_contents($site->url()."/assets/images/svg/sass.svg");
    $icon_sketch = file_get_contents($site->url()."/assets/images/svg/sketch.svg");
    $icon_snap = file_get_contents($site->url()."/assets/images/svg/snap.svg");
    $icon_sublime = file_get_contents($site->url()."/assets/images/svg/sublime.svg");
    $icon_susy = file_get_contents($site->url()."/assets/images/svg/susy.svg");
    $icon_vue = file_get_contents($site->url()."/assets/images/svg/vue.svg");
    $icon_woocommerce = file_get_contents($site->url()."/assets/images/svg/woocommerce.svg");
    $icon_wordpress = file_get_contents($site->url()."/assets/images/svg/wordpress.svg");
  ?>
  <main class="main" role="main">
    <div class="top container-fluid">
      <div id="code-title"></div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="code-intro"><?php echo $page->intro()->html() ?></div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">

          <div id="code-selector">
            <ul>
              <li data-code="1" class="codemenu-selected"><?php echo l::get('languages') ?></li>
              <li data-code="2">CMS</li>
              <li data-code="3"><?php echo l::get('workflow') ?></li>
              <li data-code="4"><?php echo l::get('tools') ?></li>
              <li data-code="5">Ecommerce</li>
              <li data-code="6"><?php echo l::get('interests') ?></li>
            </ul>
          </div>

          <select id="code-selector-mobile">
              <option value="1" class="codemenu-selected"><?php echo l::get('languages') ?></option>
              <option value="2">CMS</option>
              <option value="3"><?php echo l::get('workflow') ?></option>
              <option value="4"><?php echo l::get('tools') ?></option>
              <option value="5">Ecommerce</option>
              <option value="6"><?php echo l::get('interests') ?></option>
          </select>

        </div>
      </div>

      <div class="row">
        <div class="col-xs-12">
          
          <div id="code-container">
            <div class="description languages code-selected" data-code="1">
              <div class="row">
                <div class="col-xs-12 col-lg-6 col-lg-offset-3">
                  <div class="icons">
                    <?php echo $icon_html; ?>
                    <?php echo $icon_css; ?>
                    <?php echo $icon_javascript; ?>
                    <?php echo $icon_php; ?>
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="inner">
                    <p><?php echo $page->languages() ?></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="description cms" data-code="2">
              <div class="row">
                <div class="col-xs-12 col-lg-4 col-lg-offset-4">
                  <div class="icons">
                    <?php echo $icon_wordpress; ?>
                    <?php echo $icon_kirby; ?>
                    <?php echo $icon_joomla; ?>
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="inner">
                    <p><?php echo $page->cms() ?></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="description workflow" data-code="3">
              <div class="row">
                <div class="col-xs-12">
                  <div class="icons">
                    <?php echo $icon_git; ?>
                    <?php echo $icon_bootstrap; ?>
                    <?php echo $icon_susy; ?>
                    <?php echo $icon_gulp; ?>
                    <?php echo $icon_browsersync; ?>
                    <?php echo $icon_sass; ?>
                    <?php echo $icon_npm; ?>
                    <?php echo $icon_jquery; ?>
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="inner">
                    <p><?php echo $page->workflow()->kirbytext() ?></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="description tools" data-code="4">
              <div class="row">
                <div class="col-xs-12 col-lg-4 col-lg-offset-4">
                  <div class="icons">
                    <?php echo $icon_sketch; ?>
                    <?php echo $icon_photoshop; ?>
                    <?php echo $icon_apple; ?>
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="inner">
                    <p><?php echo $page->tools()->html() ?></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="description ecommerce" data-code="5">
              <div class="row">
                <div class="col-xs-12 col-lg-2 col-lg-offset-5">
                  <div class="icons">
                    <?php echo $icon_woocommerce; ?>
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="inner">
                    <p><?php echo $page->ecommerce() ?></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="description future" data-code="6">
              <div class="row">
                <div class="col-xs-12">
                  <div class="icons">
                    <?php echo $icon_snap; ?>
                    <?php echo $icon_greensock; ?>
                    <?php echo $icon_nodejs; ?>
                    <?php echo $icon_es6; ?>
                    <?php echo $icon_vue; ?>
                    <?php echo $icon_react; ?>
                    <?php echo $icon_angular; ?>
                  </div>
                </div>
                <div class="col-xs-12">
                  <div class="inner">
                    <p><?php echo $page->future() ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
    
  </main>
<?php snippet('footer') ?>