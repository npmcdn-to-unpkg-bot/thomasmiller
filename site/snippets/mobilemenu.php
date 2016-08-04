<ul class="mobilemenu">
  <?php foreach($pages->visible() as $p): ?>
  <li <?php e($p->isOpen(), ' class="active"') ?>>
    <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>

  </li>
  <?php endforeach ?>
  <?php foreach($site->languages() as $language): ?>
  <li<?php e($site->language() == $language, ' class="activ"') ?>>
    <a href="<?php echo $page->url($language->code()) ?>">
      <?php echo html($language->code()) ?>
    </a>
  </li>
  <?php endforeach ?>
</ul>
  