<header class="mdl-layout__header">
  <div class="mdl-layout__header-row">
    <span class="mdl-layout-title">
      <!-- This is where the title of the current document is displayed -->
        <?php if (isset($document) && $document !== false) : ?>
            <?= \CloudControl\Cms\services\ValuelistService::get('global')->get('title') ?> - <?= $document->title ?>
        <?php else : ?>
            <?= \CloudControl\Cms\services\ValuelistService::get('global')->get('title') ?>
        <?php endif ?>
    </span>
    <!-- Add spacer, to align navigation to the right -->
    <div class="mdl-layout-spacer"></div>
    <!-- Navigation. We hide it in small screens. -->
    <nav class="mdl-navigation mdl-layout--large-screen-only">
      <a class="mdl-navigation__link" href="<?= \CloudControl\Cms\services\LinkService::get('/') ?>">Home</a>
      <a class="mdl-navigation__link" href="#" onclick="document.getElementsByClassName('mdl-js-layout')[0].MaterialLayout.toggleDrawer();document.getElementById('q').focus();return false;">Search</a>
        <?php if (\CloudControl\Cms\components\CmsComponent::isCmsLoggedIn()) : ?>
          <a class="mdl-navigation__link" href="<?= \CloudControl\Cms\services\LinkService::get('/cms') ?>">Cms</a>
          <a class="mdl-navigation__link" href="<?= \CloudControl\Cms\services\LinkService::get('/cms/log-off') ?>">Logoff</a>
        <?php endif ?>
    </nav>
  </div>
</header>