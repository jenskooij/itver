<!DOCTYPE html>
<html>
  <head>
    <!-- This is where the title of the current document is displayed in the title of the browser -->
    <title>
        <?php if (isset($document) && $document !== false) : ?>
            <?= \CloudControl\Cms\services\ValuelistService::get('global')->get('title') ?> - <?= $document->title ?>
        <?php else : ?>
            <?= \CloudControl\Cms\services\ValuelistService::get('global')->get('title') ?>
        <?php endif ?>
    </title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="manifest" href="<?=$request::$subfolders?>manifest.json">
    <link rel="apple-touch-icon" href="<?=$request::$subfolders?>images/icons/icon-144x144.png">
    <link rel="icon" href="<?=$request::$subfolders?>favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="<?= $request::$subfolders ?>css/site.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-pink.min.css">
    <link rel="stylesheet" href="//s.electerious.com/basicLightbox/dist/basicLightbox.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </head>
  <body>