<?php $__env->startPush('scripts'); ?>
    
    <script type="text/javascript" src="<?php echo e(asset('js/custom.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('js/main.js')); ?>"></script>
    <script src="<?php echo e(asset('global/plugins/bootstrap/js/bootstrap.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('global/plugins/jquery.blockui.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('global/plugins/jquery.cookie.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('global/plugins/ladda/spin.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('global/plugins/ladda/ladda.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('global/plugins/webui-popover-master/dist/jquery.webui-popover.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('global/plugins/bindWithDelay/bindWithDelay.js')); ?>" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="<?php echo e(asset('global/scripts/app.min.js')); ?>" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <?php if(isset($scripts) && $scripts): ?>
        <?php $__currentLoopData = $scripts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $script): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <script src="<?php echo e($script); ?>" type="text/javascript"></script>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    <script src="<?php echo e(asset('global/plugins/backstretch/jquery.backstretch.min.js')); ?>" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <script src="<?php echo e(themeAssetUrl('layouts/layout/scripts/layout.min.js')); ?>" type="text/javascript"></script>
    <!-- END THEME LAYOUT SCRIPTS -->
<?php $__env->stopPush(); ?><?php /**PATH /app/app/Components/Themes/Base/Templates/GuestLayout/js.blade.php ENDPATH**/ ?>