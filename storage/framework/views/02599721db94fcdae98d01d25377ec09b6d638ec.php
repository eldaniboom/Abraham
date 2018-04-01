<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Abraham</title>
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/bootstrap-responsive.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('color/default.css')); ?>">
        <link rel="shortcut icon" type="text/css" href="<?php echo e(asset('img/favicon.ico')); ?>">

    </head>

    <body>
      <?php echo $__env->yieldContent('content'); ?>
    </body>

    <script src="<?php echo e(asset('js/jquery.js')); ?>"> </script>
    <script src="<?php echo e(asset('js/jquery.scrollTo.js')); ?>"> </script>
    <script src="<?php echo e(asset('js/jquery.nav.js')); ?>"> </script>
    <script src="<?php echo e(asset('js/jquery.localScroll.js')); ?>"> </script>
    <script src="<?php echo e(asset('js/bootstrap.js')); ?>"> </script>
    <script src="<?php echo e(asset('js/jquery.prettyPhoto.js')); ?>"> </script>
    <script src="<?php echo e(asset('js/isotope.js')); ?>"> </script>
    <script src="<?php echo e(asset('js/jquery.flexslider.js')); ?>"> </script>
    <script src="<?php echo e(asset('js/inview.js')); ?>"> </script>
    <script src="<?php echo e(asset('js/animate.js')); ?>"> </script>
    <script src="<?php echo e(asset('js/custom.js')); ?>"> </script>
    <script src="<?php echo e(asset('contactform/contactform.js')); ?>"> </script>


</html>
