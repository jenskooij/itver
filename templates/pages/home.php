<h1>Welcome to <?= \CloudControl\Cms\services\ValuelistService::get('global')->get('title') ?></h1>
<blockquote>TL&semi;DR year.sprint.iteration(-ADDITION)</blockquote>
<p>Iterative Versioning documentation is available in the following languages:</p>
<style>

</style>
<div class="langauges">
    <?php $this->includeTemplate('templates/layout/menu/document-list', array('folder' => isset($folder) ? $folder : null)); ?>
</div>
