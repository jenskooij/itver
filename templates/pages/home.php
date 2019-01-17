<h1>Welcome to <?= \CloudControl\Cms\services\ValuelistService::get('global')->get('title') ?>!</h1>
<p>Iterative Versioning documentation is available in the following languages:</p>
<style>
    .langauges {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        height:6em;
        margin:2em;
    }
    .langauges .mdl-navigation__link{
        display:list-item;
    }
</style>
<div class="langauges">
    <?php $this->includeTemplate('templates/layout/menu/document-list', array('folder' => isset($folder) ? $folder : null)); ?>
</div>
