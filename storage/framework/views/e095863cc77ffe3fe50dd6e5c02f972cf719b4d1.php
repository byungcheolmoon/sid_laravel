<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="msapplication-tap-highlight" content="no">

  <!-- SEO -->
  <meta name="description" content="<?php echo e(config('project.description')); ?>">

  <!-- Facebook Meta -->
  <meta property="og:title" content="<?php echo e(config('app.name')); ?>">
  <meta property="og:image" content="">
  <meta property="og:type" content="Website">
  <meta property="og:author" content="">

  <!-- Google Meta -->
  <meta itemprop="name" content="">
  <meta itemprop="description" content="<?php echo e(config('project.description')); ?>">
  <meta itemprop="image" content="">
  <meta itemprop="author" content=""/>

  <!-- Twitter Meta-->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="<?php echo e(config('app.name')); ?>">
  <meta name="twitter:description" content="<?php echo e(config('project.description')); ?>">
  <meta name="twitter:image" content="">
  <meta name="twitter:domain" content="<?php echo e(config('project.url')); ?>">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <title><?php echo e(config('app.name', 'Laravel')); ?></title>

  <!-- Styles -->
  <link href="<?php echo e(elixir('css/app.css')); ?>" rel="stylesheet">

  <?php echo $__env->yieldContent('style'); ?>

  <!-- Scripts -->
  <script>
    window.Laravel = <?php echo json_encode([
      'csrfToken' => csrf_token(),
      'currentUser' => $currentUser,
      'currentRouteName' => $currentRouteName,
      'currentLocale' => $currentLocale,
      'currentUrl' => $currentUrl,
    ]); ?>
  </script>
</head>

<body id="app-layout">
  <?php echo $__env->make('layouts.partial.navigation', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <div class="container">
    <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>
  </div>

  <?php echo $__env->make('layouts.partial.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <!-- Scripts -->
  <script src="<?php echo e(elixir('js/app.js')); ?>"></script>

  <?php echo $__env->yieldContent('script'); ?>
</body>
</html>
