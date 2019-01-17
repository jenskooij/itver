<h2>Search Results</h2>
<ul>
    <?php foreach ($searchResults as $result) : ?>
        <?php if ($result instanceof \CloudControl\Cms\search\results\SearchSuggestion) : ?>
            <li>
                <p>Did you mean
                    <a href="?q=<?= str_replace($result->original, $result->term, $_GET['q']) ?>">
                        <?= str_replace($result->original, '<b>' . $result->term . '</b>', $_GET['q']) ?>
                    </a>
                    ?
                </p>
            </li>
        <?php endif ?>
    <?php endforeach ?>
</ul>
<ol>
    <?php foreach ($searchResults as $result) : ?>
        <?php if ($result instanceof \CloudControl\Cms\search\results\SearchResult) : ?>
            <li>
                <h3>
                    <a href="<?= \CloudControl\Cms\services\LinkService::get($result->getDocument()->path) ?>">
                        <?= $result->getDocument()->title ?>
                    </a>
                </h3>
                <p><?= $result->getDocument()->fields->intro[0] ?></p>
            </li>
        <?php endif ?>
    <?php endforeach ?>
    <?php if (count($searchResults) === 0) : ?>
        <li>
            <p>No Search results found</p>
        </li>
    <?php endif ?>
</ol>