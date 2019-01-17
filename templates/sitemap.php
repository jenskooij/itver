<?= '<?xml version="1.0" encoding="UTF-8"?>' ?>
<?php
function renderFolder($folder, $prefix)
{
    /** @var \CloudControl\Cms\storage\entities\Document $doc */
    /** @var \CloudControl\Cms\storage\entities\Document $folder */
    foreach ($folder->getContent() as $doc) : ?>
        <?php if ($doc->type === 'folder') : ?>
            <?= renderFolder($doc, $prefix . $doc->slug) ?>
        <?php else : ?>
        <url>
          <changefreq>monthlty</changefreq>
          <loc><?= $prefix ?><?= $doc->path ?></loc>
          <priority>1.0</priority>
          <lastmod><?=gmdate('c', $doc->publicationDate)?></lastmod>
        </url>
        <?php endif ?>
    <?php endforeach;
}

?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
    <changefreq>monthlty</changefreq>
    <loc><?='https://' . $_SERVER['SERVER_NAME']?>/</loc>
    <priority>1.0</priority>
    <lastmod><?=gmdate('c', strtotime('01-01-2019'))?></lastmod>
  </url>
    <?= renderFolder($sitemap, 'https://' . $_SERVER['SERVER_NAME']) ?>
</urlset>
