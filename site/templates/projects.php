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
      <div class="innerwrap container">
        <img src="<?php echo $site->url() ?>/assets/images/project-header.png" alt="responsive">
        <div>
          <h1><?php echo $page->title()->html() ?></h1>
          <h2><?php echo l::get('some-of-my-work') ?></h2>
        </div>
      </div>
    </div>
    <div class="text">
      <div class="container-fluid">
      
      <?php $projectCounter = 1; ?>
        <?php foreach($page->children()->visible() as $project): ?>
            <div class="project row <?php if(($projectCounter % 2) == 1){echo "left";} if(($projectCounter % 2) == 0){echo "right";} ?>">
              <div class="col-md-7">
                <div class="project-desc">
                  <div class="desc-top">
                    <h3><?php echo $project->title() ?></h3>

                    <a href="<?php echo $project->theurl() ?>" target="_blank">
                      <?php echo $project->urlname() ?> 
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                        <g fill="#FF5722" fill-rule="evenodd">
                          <path d="M7.744 11.507L5.61 13.64c-.566.567-1.32.88-2.123.88-.803 0-1.557-.313-2.125-.88-1.17-1.172-1.17-3.078 0-4.25l4.015-4.013c.567-.568 1.322-.88 2.124-.88.804 0 1.558.312 2.126.88.33.33.58.735.726 1.176l-1.9 1.9c-.255.255-.595.396-.956.396-.362 0-.702-.142-.957-.397-.13-.13-.23-.28-.298-.447-.05-.123-.19-.182-.312-.133-.122.05-.18.19-.132.312.092.228.228.432.402.606.346.347.806.538 1.296.538s.95-.19 1.295-.537l4.015-4.013c.346-.346.537-.806.537-1.295 0-.49-.19-.95-.537-1.296C12.46 1.84 12 1.65 11.51 1.65c-.49 0-.95.19-1.296.536L8.947 3.454c-.094.093-.094.245 0 .338.093.094.245.094.338 0l1.268-1.267c.255-.256.595-.397.957-.397.36 0 .7.14.957.397.255.255.396.595.396.957 0 .36-.14.7-.396.957l-1.743 1.74c-.174-.424-.432-.814-.76-1.142-1.358-1.358-3.568-1.358-4.926 0L1.024 9.052c-1.358 1.358-1.358 3.568 0 4.926.68.68 1.57 1.02 2.463 1.02.892 0 1.784-.34 2.463-1.02l2.132-2.132c.094-.094.094-.245 0-.34-.093-.092-.245-.092-.338 0z"/>
                          <path d="M13.973 1.02c-1.358-1.36-3.568-1.36-4.926 0L6.912 3.153c-.094.093-.094.245 0 .338.093.093.245.093.338 0l2.135-2.135c1.172-1.17 3.078-1.17 4.25 0 1.17 1.172 1.17 3.078 0 4.25L9.62 9.62c-.567.568-1.322.88-2.124.88-.803 0-1.557-.312-2.125-.88-.33-.33-.58-.735-.726-1.176l1.9-1.9c.256-.255.596-.396.957-.396.362 0 .702.14.958.396.13.13.23.28.297.447.05.124.19.183.31.133.124-.05.183-.19.133-.31-.092-.23-.227-.433-.402-.607C8.45 5.86 7.99 5.67 7.5 5.67c-.488 0-.948.19-1.294.536L4.25 8.162c-.036.02-.065.05-.085.084L2.19 10.22c-.345.346-.535.806-.535 1.295 0 .49.19.95.536 1.296.348.347.808.537 1.297.537.49 0 .95-.19 1.295-.536l1.266-1.265c.093-.093.093-.245 0-.338-.094-.094-.245-.094-.34 0l-1.264 1.265c-.256.256-.596.396-.957.396-.362 0-.7-.14-.957-.396-.256-.256-.396-.595-.396-.957 0-.36.14-.7.396-.957l1.742-1.742c.175.425.433.815.76 1.143.66.657 1.533 1.02 2.464 1.02.93 0 1.805-.363 2.463-1.02l4.013-4.015c1.358-1.36 1.358-3.568 0-4.926z"/>
                        </g>
                      </svg>
                    </a>
                  </div>

                  <p><?php echo $project->text() ?></p>

                  <?php if (($project->macmac() == '1')||($project->dev() == '1')){ ?>
                    <div class="desc-middle">

                      <?php if ($project->macmac() == '1'){?>
                        <span class="macmac"><?php echo l::get('built-at-macmac-ltd') ?></span>
                      <?php }

                      if ($project->dev() == '1'){?>
                        <span class="dev">.. <?php echo l::get('in-development') ?></span>
                      <?php } ?>

                    </div>
                  <?php } ?>

                  <div class="desc-bottom">
                    <h4># <?php echo $project->key() ?></h4>                    
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                  <div class="container-screen">
                    <div class="screen monitor" style="background-image: url(<?php if($image = $project->image()): ?><?php echo $image->url() ?><?php endif ?>);">
                      <a href="<?php echo $project->theurl() ?>" class="monitor-link" target="_blank"><?php echo $project->urlname() ?></a>
                      <div class="base">
                        <div class="foot top"></div>
                        <div class="foot bottom"></div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <?php $projectCounter++; ?>
        <?php endforeach ?>
      </div>
    </div>
  </main>

<?php snippet('footer') ?>