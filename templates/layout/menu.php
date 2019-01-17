<div class="mdl-layout__drawer">
    <span class="mdl-layout-title">
        <!-- This is the title of the menu -->
        <?=\CloudControl\Cms\services\ValuelistService::get('global')->get('title')?>
    </span>
    <nav class="mdl-navigation">
        <div class="mdl-navigation__link">
            <form action="<?= \CloudControl\Cms\services\LinkService::get('/search') ?>">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="q" name="q">
                    <label class="mdl-textfield__label" for="q">Search...</label>
                </div>
            </form>
        </div>
      <a href="<?=$request::$subfolders?>" class="mdl-navigation__link">Home</a>
        <?php $this->includeTemplate('templates/layout/menu/document-list', array('folder' => isset($folder) ? $folder : null)); ?>
    </nav>
</div>