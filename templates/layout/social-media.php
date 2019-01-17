<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
    <div class="mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col social-media" style="padding:2em;">
        <?php $link = urlencode('http://' . $_SERVER['SERVER_NAME'] . $request::$requestUri); ?>
        Share this page:
        <a target="_blank" class="icon facebook" title="Delen op Facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?= $link ?>">
            <span>Facebook</span>
        </a>
        <a target="_blank" class="icon twitter" title="Delen op Twitter" href="https://twitter.com/intent/tweet?url=<?= $link ?>">
            <span>Twitter</span>
        </a>
        <a target="_blank" class="icon google-plus" title="Delen op Google+" href="https://plus.google.com/share?url=<?= $link ?>">
            <span>Google+</span>
        </a>
        <a target="_blank" class="icon linkedin" title="Delen op LinkedIn" href="http://www.linkedin.com/shareArticle?mini=true&url=<?= $link ?>">
            <span>LinkedIn</span>
        </a>
        <a target="_blank" class="icon pinterest" title="Delen op Pinterest" href="http://pinterest.com/pin/create/button/?url=<?= $link ?>">
            <span>Pinterest</span>
        </a>
        <a target="_blank" class="icon tumblr" title="Delen op Tumblr" href="http://www.tumblr.com/share?v=3&u=<?= $link ?>">
            <span>Tumblr</span>
        </a>
    </div>
</div>