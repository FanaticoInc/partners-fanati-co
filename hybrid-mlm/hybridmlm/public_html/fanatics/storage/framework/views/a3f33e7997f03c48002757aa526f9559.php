<meta charset="utf-8"/>
<title><?php echo getConfig('company_information','company_name'); ?> <?php if(isset($title)): ?> -  <?php echo e($title); ?><?php endif; ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="<?php echo $__env->yieldContent('metaDescription'); ?>" name="description"/>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<script src="<?php echo e(asset('global/plugins/jquery.min.js')); ?>" type="text/javascript"></script>
<!-- BEGIN PAGE LEVEL TOP PLUGINS -->
<?php if(isset($headScripts) && $headScripts): ?>
    <?php $__currentLoopData = $headScripts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $script): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <script src="<?php echo e($script); ?>" type="text/javascript"></script>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php if(isset($jsVariables) && $jsVariables): ?>
    <script type="text/javascript">
                <?php $__currentLoopData = $jsVariables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $variable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        var <?php echo e($key); ?> =
        '<?php echo e($variable); ?>';
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </script>
<?php endif; ?>

<!-- END PAGE LEVEL TOP PLUGINS -->
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<?php echo $__env->make('GuestLayout.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldPushContent('styles'); ?>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="<?php echo e(asset(getConfig('company_information', 'favicon'))); ?>"/>
<!-- END HEAD --><?php /**PATH /app/app/Components/Themes/Base/Templates/GuestLayout/head.blade.php ENDPATH**/ ?>