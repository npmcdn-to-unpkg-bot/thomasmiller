<nav role="navigation">

  <ul class="menu">

    <?php foreach($pages->visible() as $p): ?>
    <li>
      <a <?php e($p->isOpen(), ' class="activ"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>

    </li>
    <?php endforeach ?>
  </ul>
  <ul class="lang-menu">
    <?php foreach($site->languages() as $language): ?>
    <li<?php e($site->language() == $language, ' class="activ"') ?>>
      <a href="<?php echo $page->url($language->code()) ?>">
        <?php echo html($language->code()) ?>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
</nav>
