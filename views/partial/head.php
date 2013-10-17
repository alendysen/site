<?php // if (!isset($config_loaded)) require($_SERVER['DOCUMENT_ROOT'] . '/config.php')?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>
      <?php if (isset($title)): ?>
        <?php echo $title ?> | <?php echo TITLE ?>
      <?php else: ?>
        <?php echo TITLE ?>
      <?php endif ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php if (isset($description)): ?>
      <?php echo $description ?>
    <?php else: ?>
      <?php echo DESCRIPTION ?>
    <?php endif ?>">
    <meta name="author" content="<?php if (isset($author)): ?>
      <?php echo $author ?>
    <?php else: ?>
      <?php echo AUTHOR ?>
    <?php endif ?>">

    <!-- Le styles -->
    <link href="<?php echo $site_url ?>components/bootstrap/docs/assets/css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="<?php echo $site_url ?>components/bootstrap/docs/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="<?php echo $site_url ?>components/bootstrap/docs/assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $site_url ?>components/bootstrap/docs/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $site_url ?>components/bootstrap/docs/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $site_url ?>components/bootstrap/docs/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo $site_url ?>components/bootstrap/docs/assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>
