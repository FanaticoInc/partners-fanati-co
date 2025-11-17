<?php $__env->startPush('styles'); ?>
    <!-- START GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo e(asset('css/custom.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('css/pretty-checkbox.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('css/admin/responsive.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('global/plugins/line-awesome-master/dist/css/line-awesome-font-awesome.css')); ?>" rel="stylesheet" type="text/css"/>
    
    <link href="<?php echo e(asset('global/plugins/simple-line-icons/simple-line-icons.min.css')); ?>" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo e(asset('global/plugins/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')); ?>" rel="stylesheet"
          type="text/css"/>
    <link href="<?php echo e(asset('global/plugins/bootstrap-toastr/toastr.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('global/plugins/icheck/skins/all.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('global/plugins/icheck/skins/futurico/futurico.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('global/plugins/ladda/ladda-themeless.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('global/plugins/digitalClock/assets/css/style.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('global/plugins/webui-popover-master/dist/jquery.webui-popover.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('global/plugins/select2/css/select2-bootstrap.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('global/plugins/select2/css/select2.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE STYLES -->
    <?php if(isset($styles) && $styles): ?>
        <?php $__currentLoopData = $styles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $style): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <link href="<?php echo e($style); ?>" rel="stylesheet" type="text/css"/>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    <!-- END PAGE STYLES -->

    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="<?php echo e(asset('global/css/components.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('global/css/plugins.css')); ?>" rel="stylesheet" type="text/css"/>
    <!-- END THEME GLOBAL STYLES -->

    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="<?php echo e(themeAssetUrl('layouts/layout/css/layout.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(themeAssetUrl('layouts/layout/css/themes/' .activeLayout(). '.css')); ?>" rel="stylesheet"
          type="text/css" id="style_color"/>
    <link href="<?php echo e(themeAssetUrl('layouts/layout/css/custom.css')); ?>" rel="stylesheet" type="text/css"/>
    <!-- END THEME LAYOUT STYLES -->
<?php $__env->stopPush(); ?><?php /**PATH /app/app/Components/Themes/Base/Templates/Admin/Layout/css.blade.php ENDPATH**/ ?>