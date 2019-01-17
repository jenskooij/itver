<!-- This is where we loop through available documents and fill the navigation -->
<?php /** @var \CloudControl\Cms\storage\entities\Document $folder */
/** @var \CloudControl\Cms\storage\entities\Document $doc */
if (isset($folder) && $folder !== false) : ?>
    <?php foreach ($folder->getContent() as $doc) : ?>
        <?php if ($doc->state === 'published') : ?>
            <a class="mdl-navigation__link" href="<?= \CloudControl\Cms\services\LinkService::get($doc->path) ?>"><?= $doc->title ?></a>
        <?php endif ?>
        <?php if ($doc->type === 'folder') : ?>
            <?php
            $doc->orderByField('title', 'DESC');
            $contents = $doc->getContent();
            $linkAble = $contents !== null ? current($contents) : null;
            ?>
            <a class="mdl-navigation__link" href="<?=$linkAble !== null ? $linkAble->path : '' ?>">
                <?=\CloudControl\Cms\services\ValuelistService::get('languages')->get($doc->title)?>
            </a>
        <?php endif ?>
    <?php endforeach ?>
<?php endif ?>