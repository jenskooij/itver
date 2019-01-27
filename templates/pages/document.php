<?php /** @var \CloudControl\Cms\storage\entities\Document $document */ ?>
<h1>
    <?= \CloudControl\Cms\services\ValuelistService::get('global')->get('title') ?> - <?= \CloudControl\Cms\util\Cms::editDocument($document->path) ?>
    <?= $document->title ?>
</h1>
<small>Publicationdate: <?=date('c', $document->publicationDate)?></small>
<p><?= $document->fields->content[0] ?></p>