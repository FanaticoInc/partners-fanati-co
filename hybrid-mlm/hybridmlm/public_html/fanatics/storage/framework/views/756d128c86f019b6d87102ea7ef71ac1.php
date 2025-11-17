<?php $__env->startPush('scripts'); ?>
    <!--[if lt IE 9]>
<script src="<?php echo e(asset('global/plugins/respond.min.js')); ?>"></script>
<script src="<?php echo e(asset('global/plugins/excanvas.min.js')); ?>"></script>
<script src="<?php echo e(asset('global/plugins/ie8.fix.min.js')); ?>"></script>
<![endif]-->
    <!-- BEGIN CORE PLUGINS -->
    <!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
    <script src="<?php echo e(asset('global/plugins/bootstrap/js/bootstrap.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('global/plugins/js.cookie.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')); ?>"
            type="text/javascript"></script>
    <script src="<?php echo e(asset('global/plugins/jquery.blockui.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')); ?>"
            type="text/javascript"></script>
    <script src="<?php echo e(asset('global/plugins/bootstrap-toastr/toastr.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('global/plugins/icheck/icheck.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('global/plugins/ladda/spin.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('global/plugins/ladda/ladda.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('global/plugins/webui-popover-master/dist/jquery.webui-popover.min.js')); ?>"
            type="text/javascript"></script>
    <script src="<?php echo e(asset('global/plugins/bindWithDelay/bindWithDelay.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('global/plugins/select2/js/select2.full.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('global/plugins/jquery-validation/js/jquery.validate.min.js')); ?>"
            type="text/javascript"></script>
    <script src="<?php echo e(asset('global/plugins/jquery-validation/js/additional-methods.min.js')); ?>"
            type="text/javascript"></script>
    <script src="<?php echo e(asset('global/plugins/jquery-circle-progress-master/dist/circle-progress.js')); ?>"
            type="text/javascript"></script>
    <script src="<?php echo e(asset('global/plugins/countUpJS/dist/countUp.js')); ?>" type="text/javascript"></script>

    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <?php if(isset($scripts) && $scripts): ?>
        <?php $__currentLoopData = $scripts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $script): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <script src="<?php echo e($script); ?>" type="text/javascript"></script>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="<?php echo e(asset('global/scripts/app.min.js')); ?>" type="text/javascript"></script>
    <!-- END THEME GLOBAL SCRIPTS -->

    <!-- BEGIN THEME LAYOUT SCRIPTS -->
    <script src="<?php echo e(themeAssetUrl('layouts/layout/scripts/layout.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(themeAssetUrl('layouts/layout/scripts/demo.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('layouts/global/scripts/quick-sidebar.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('layouts/global/scripts/quick-nav.min.js')); ?>" type="text/javascript"></script>
    <!-- END THEME LAYOUT SCRIPTS -->
    <!-- BEGIN PAGE LEVEL BOTTOM PLUGINS -->
    <?php if(isset($bottomScripts) && $bottomScripts): ?>
        <?php $__currentLoopData = $bottomScripts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $script): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <script src="<?php echo e($script); ?>" type="text/javascript"></script>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    <!-- END PAGE LEVEL BOTTOM PLUGINS -->
<?php $__env->stopPush(); ?><?php /**PATH /app/app/Components/Themes/Base/Templates/Admin/Layout/js.blade.php ENDPATH**/ ?>