<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="header-content">
            <div class="logo">MegaShop</div>
            <nav>
    <ul>
        <?php require_once app_path('data.php'); ?>
        <?php $__currentLoopData = $navigation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                // On adapte les URLs statiques (.html) vers les routes Laravel
                $routeName = ($item['label'] == 'Accueil') ? 'home' : strtolower($item['label']);
                // Note: Il faudra peut-être ajuster selon tes noms de routes dans web.php
            ?>
            <li><a href="<?php echo e(($item['label'] == 'Accueil') ? route('home') : '#'); ?>"><?php echo e($item['label']); ?></a></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</nav>
        </div>
    </header>
</body>
</html><?php /**PATH C:\Users\pc\Herd\Laravel dev 202\laravelDev202\megashop\resources\views/partials/header.blade.php ENDPATH**/ ?>