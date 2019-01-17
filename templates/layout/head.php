<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <?php if (isset($document) && !empty($document) && $document instanceof \CloudControl\Cms\storage\entities\Document) : ?>
          <?php
          $title = $document->title;
          $description = $document->fields->intro[0];
          $image = isset($document->bricks->{'meta-data'}->fields->image[0]) ? \CloudControl\Cms\services\ImageService::get($document->bricks->{'meta-data'}->fields->image[0]) : '/images/icons/icon-512x512.png';
          ?>
        <!-- This is where the title of the current document is displayed in the title of the browser -->
        <title><?= \CloudControl\Cms\services\ValuelistService::get('global')->get('title') ?> - <?= $title ?></title>
        <meta name="description" content="<?= $description ?>"/>
        <meta property="og:type" content="article">
        <meta property="og:title" content="<?= $title ?>">
        <meta property="og:url" content="https://<?= $_SERVER['SERVER_NAME'] . $request::$subfolders . $request::$relativeUri ?>">
        <meta property="og:image" content="https://<?= $_SERVER['SERVER_NAME'] . $image ?>">
        <meta property="article:author" content="Jens Kooij">
        <meta property="article:published_time" content="<?= gmdate('c', $document->publicationDate) ?>">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="<?= $title ?>">
        <meta name="twitter:description" content="<?= $description ?>">
        <meta name="twitter:image" content="https://<?= $_SERVER['SERVER_NAME'] . $image ?>">
        <meta name="twitter:image:alt" content="<?= $title ?>">
      <?php else : ?>
        <title><?= \CloudControl\Cms\services\ValuelistService::get('global')->get('title') ?></title>
        <meta name="description" content="<?= \CloudControl\Cms\services\ValuelistService::get('global')->get('description') ?>"/>
        <meta property="og:type" content="article">
        <meta property="og:title" content="<?= \CloudControl\Cms\services\ValuelistService::get('global')->get('title') ?>">
        <meta property="og:url" content="https://<?= $_SERVER['SERVER_NAME'] . $request::$subfolders . $request::$relativeUri ?>">
        <meta property="og:image" content="https://<?= $_SERVER['SERVER_NAME'] . $request::$subfolders . 'images/icons/icon-512x512.png' ?>">
        <meta property="article:author" content="Jens Kooij">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="<?= \CloudControl\Cms\services\ValuelistService::get('global')->get('title') ?>">
        <meta name="twitter:description" content="<?= \CloudControl\Cms\services\ValuelistService::get('global')->get('description') ?>">
        <meta name="twitter:image" content="https://<?= $_SERVER['SERVER_NAME'] . $request::$subfolders . 'images/cloud-control.png' ?>">
        <meta name="twitter:image:alt" content="<?= \CloudControl\Cms\services\ValuelistService::get('global')->get('title') ?>">
      <?php endif ?>
    <!-- Stylesheets -->
    <link rel="manifest" href="<?= $request::$subfolders ?>manifest.json">
    <link rel="apple-touch-icon" href="<?= $request::$subfolders ?>images/icons/icon-144x144.png">
    <link rel="icon" href="<?= $request::$subfolders ?>favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="<?= $request::$subfolders ?>css/site.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-pink.min.css">
    <link rel="stylesheet" href="//s.electerious.com/basicLightbox/dist/basicLightbox.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- JS Libraries -->
    <script src="//s.electerious.com/basicLightbox/dist/basicLightbox.min.js"></script>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  </head>
  <body>