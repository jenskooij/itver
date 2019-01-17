<h1>
    <?= \CloudControl\Cms\services\ValuelistService::get('global')->get('title') ?> - <?= \CloudControl\Cms\util\Cms::editDocument($document->path) ?>
    <?= $document->title ?>
</h1>
<p><?= $document->fields->content[0] ?></p>