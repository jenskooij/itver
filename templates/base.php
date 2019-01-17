<?php $this->includeTemplate('templates/layout/head', array('document' => isset($document) ? $document : null)); ?>
<!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <?php $this->includeTemplate('templates/layout/header',
        array('document' => isset($document) ? $document : null)); ?>
    <?php $this->includeTemplate('templates/layout/menu', array('folder' => isset($folder) ? $folder : null)); ?>

  <main class="mdl-layout__content">
    <div class="mdl-grid">
      <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
      <div class="mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col" style="padding:2em;">

        <!-- This is where the main content of the found document is shown -->
          <?php if (isset($searchResults)) : ?>
              <?php $this->includeTemplate('templates/pages/search',
                  array(
                      'searchResults' => $searchResults
                  )); ?>
          <?php else : ?>
              <?php if (isset($document) && $document !== false) : ?>
                  <?php $this->includeTemplate('templates/pages/document',
                      array(
                          'document' => isset($document) ? $document : null
                      )); ?>
              <?php else : ?>
                  <?php $this->includeTemplate('templates/pages/home',
                      array(
                          'document' => isset($document) ? $document : null,
                          'folder' => isset($folder) ? $folder : null
                      )); ?>
              <?php endif ?>
          <?php endif ?>
      </div>
    </div>
<?php $this->includeTemplate('templates/layout/social-media');?>
  </main>
  <footer class="mdl-mini-footer">
    <div class="mdl-mini-footer__right-section languages">
        <?php $this->includeTemplate('templates/layout/menu/document-list', array('folder' => isset($folder) ? $folder : null, 'noClass' => true, 'separator' => true)); ?>
    </div>
  </footer>
  <footer class="mdl-mini-footer">
    <div class="mdl-mini-footer__right-section">
      <div class="mdl-logo mdl-cell--hide-phone mdl-cell--hide-tablet"><?= \CloudControl\Cms\services\ValuelistService::get('global')->get('title') ?></div>
      <ul class="mdl-mini-footer__link-list">
        <li>
          <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">
            <img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png"/>
          </a>
        </li>
        <li class="mdl-cell--hide-phone mdl-cell--hide-tablet">
          <span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">Iterative Versioning</span>
          by
          <a xmlns:cc="http://creativecommons.org/ns#" href="https://www.jenskooij.nl" property="cc:attributionName" rel="cc:attributionURL">Jens Kooij</a>
          is licensed under a
          <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a>
          .
        </li>
        <li class="mdl-cell--hide-phone mdl-cell--hide-tablet">
          Based on a work at
          <a xmlns:dct="http://purl.org/dc/terms/" href="https://www.itver.org" rel="dct:source">https://www.itver.org</a>
          .
        </li>
      </ul>
    </div>
  </footer>
</div>

<script>var SUBFOLDERS = '<?=$request::$subfolders?>';</script>
<script src="//s.electerious.com/basicLightbox/dist/basicLightbox.min.js"></script>
<script src="<?= $request::$subfolders ?>js/image-handler.js"></script>
</body>
</html>