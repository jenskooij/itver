<?php
/**
 * Created by Jens on 17-1-2019.
 */

namespace components;


use CloudControl\Cms\cc\ResponseHeaders;
use CloudControl\Cms\components\BaseComponent;
use CloudControl\Cms\storage\Storage;

class SitemapComponent extends BaseComponent
{
    public function run(Storage $storage)
    {
        parent::run($storage);
        ResponseHeaders::add(ResponseHeaders::HEADER_CONTENT_TYPE, 'text/xml');
        $this->parameters['sitemap'] = $this->storage->getDocuments()->getDocumentFolderBySlug('/');
    }

}