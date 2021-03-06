<!-- This is where we loop through available documents and fill the navigation -->
<?php /** @var \CloudControl\Cms\storage\entities\Document $folder */
/** @var \CloudControl\Cms\storage\entities\Document $doc */
if (isset($folder) && $folder !== false) : ?>
    <?php $i = 0; ?>
    <?php foreach ($folder->getContent() as $doc) : ?>
        <?php if ($i != 0 && isset($separator)) : ?>
      -
        <?php endif ?>
        <?php if ($doc->state === 'published') : ?>
      <a class="<?= isset($noClass) ? '' : 'mdl-navigation__link' ?>" href="<?= \CloudControl\Cms\services\LinkService::get($doc->path) ?>"><?= $doc->title ?></a>
        <?php endif ?>
        <?php if ($doc->type === 'folder') : ?>
            <?php
            $doc->orderByField('title', 'DESC');
            $contents = $doc->getContent();
            $linkAble = $contents !== null ? current($contents) : null;
            ?>
      <a class="<?= isset($noClass) ? '' : 'mdl-navigation__link' ?>" href="<?= $linkAble !== null ? $linkAble->path : '' ?>"><?= \CloudControl\Cms\services\ValuelistService::get('languages')->get($doc->title) ?></a>
        <?php endif ?>
        <?php $i += 1; ?>
    <?php endforeach ?>
<?php endif ?>